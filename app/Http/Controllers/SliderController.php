<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('dashboard.slider.index', compact('slider'));
    }

    public function getSliders(Request $request)
    {
        if ($request->ajax()) {
            $data = Slider::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a data-toggle="modal" data-target=".editModal" data-id="' . $row->id . '"  class="edit btn btn-success btn-sm editslider"
                                data-attr="' . url('slider/' . $row->id . '/edit') . '" title="show">Edit</a>
                                    ' . csrf_field() . '
                                    ' . method_field("DELETE") . '
                            <a class="btn btn-danger btn-sm delete"  data-id="' . $row->id . '" title="delete">
                            DELETE</a>
                            <input type="hidden" value="' . csrf_token() . '"  class="token_delete">';
                    return $actionBtn;
                })->addColumn('image', function ($row) {
                    return '<img src=" ' . $row->image_path . ' " height="75px" width="75px" />';
                })->addColumn('status', function ($row) {
                    return '<input class = "toggle-class" type="checkbox" data-onstyle="success" name="status"
                            data-offstyle = "danger" data-toggle = "toggle" data-on="Active" data-off="InActive" data-id="' . $row->id . '" >';
                })->rawColumns(['action', 'image', 'status'])->make(true);
        }
    }

    public function create()
    {
        $create = view('dashboard.slider.parts.create')->render();
        return response()->json(array('success' => true, 'html' => $create));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:sliders',
            'image' => 'required',
        ]);

        $data = $request->except('image', 'status');
        $data['status'] = $request->status = "on" ? 1 : 0;

        if ($request->image) {
            $path = $request->file('image')->store('/uploads/slider');
            $data['image'] = $request->image->hashName();
            $data['link'] = $path;
            $request->image->move(public_path('/uploads/slider/'), $data['image']);
        }

        Slider::create($data);

        toast('slider created successfully!', 'success');

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    public function edit(Request $request)
    {
        $slider = Slider::all();

        $edit = view('dashboard.slider.parts.edit', compact('slider'))->render();
        return response()->json(array('success' => true, 'html' => $edit, 'slider' => $slider));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|unique:sliders,title,' . $slider->id,
            'image' => 'required',
            'status' => 'required',
        ]);

        $slider->update([
            'title' => $request->get('title'),
            'status' => $request->get('status'),
        ]);
        if ($request->image) {
            Storage::disk('public_upload')->delete('slider/' . $slider->title);

            $slider->delete();
            Image::make($request->image)->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/slider/' . $request->image->hashName()));
            $path = $request->image->store('/uploads/slider');
            $insert['path'] = $path;
        }

        toast('admin updated successfully!', 'success');

        return response()->json(['success' => true, 'message' => 'Data updated successfully']);
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        toast('slider deleted successfully!', 'success');
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    public function changeStatus(Request $request)
    {
        $slider = Slider::find($request->slider_id);
        $slider->status = $request->status;
        $slider->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
}
