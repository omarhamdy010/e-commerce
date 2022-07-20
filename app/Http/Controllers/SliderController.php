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
                    $actionBtn =
                        '
                            <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-id="' . $row->id . '" class="edit btn btn-success btn-sm"
                                data-attr="' . url('slider/' . $row->id . '/edit') . '" title="show">Edit</a>
                                    ' . csrf_field() . '
                                    ' . method_field("DELETE") . '
                            <a class="btn btn-danger btn-sm delete"  data-id="' . $row->id . '" title="delete">
                            DELETE</a>
                            <input type="hidden" value="' . csrf_token() . '" class="token_delete">
                    ';
                    return $actionBtn;
                })->addColumn('image', function ($row) {
                    return '<img src=" ' . $row->image_path . ' " height="75px" width="75px" name="image" />';
                })->addColumn('status', function ($row) {
                    $button = ' <label  class="switch" >';
                    $button .= '  <input type="checkbox" data-id="'.$row->id.'" id="switch" ';
                    if ($row->status == 1) {
                        $button .= "checked";
                    }
                    $button .= '><span class="slider round"></span></label>';
                    return $button;
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
        ]);

        $data = $request->except('image', 'status');
        $data['status'] = $request->status  ? 1 : 0;

        if ($request->image) {
            $path = $request->file('image')->store('/uploads/slider');
            $data['image'] = $request->image->hashName();
            $data['link'] = $path;
            $request->image->move(public_path('/uploads/slider/'), $data['image']);
        }

        Slider::create($data);

        toast('slider created successfully!', 'success');

        return response()->json(['success' => true, 'message' => 'slider inserted successfully']);

    }

    public function edit(Slider $slider)
    {
        $edit = view('dashboard.slider.parts.edit', compact('slider'))->render();
        return response()->json(array('success' => true, 'html' => $edit, 'slider' => $slider));
    }

    public function update(Request $request, Slider $slider)
    {
//        dd($request->all());

        $request->validate([
            'title' => 'required|unique:sliders,title,' . $slider->id,
        ]);

        $data = $request->except(['image', 'status']);
//if ($request->status)
        $data['status'] = $request->status  ? 1 : 0;

        if ($request->image) {
            if ($slider->image != 'default.png') {
                Storage::disk('public_upload')->delete('slider/' . $slider->image);
            }
            Image::make($request->image)->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/slider/' . $request->image->hashName()));
            $data['image'] = $request->image->hashName();
        }

        $slider->update($data);

        toast('slider updated successfully!', 'success');

        return response()->json(['success' => true, 'message' => 'Data updated successfully']);
    }

    public function destroy(Slider $slider)
    {
        if ($slider->image != 'default.png') {
            Storage::disk('public_upload')->delete('slider/' . $slider->image);
        }
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
