<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();

        return view('dashboard.admin.index', compact('admins'));
    }

    public function getAdmins(Request $request)
    {
        if ($request->ajax()) {
            $data = Admin::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a data-toggle="modal" data-target=".editModal" data-id="' . $row->id . '"  class="edit btn btn-success btn-sm editadmin"
                                data-attr="' . url('admin/' . $row->id . '/edit') . '" title="show">Edit</a>
                                    ' . csrf_field() . '
                                    ' . method_field("DELETE") . '
                            <a class="btn btn-danger btn-sm delete"  data-id="' . $row->id . '" title="delete">
                            DELETE</a>
                            <input type="hidden" value="' . csrf_token() . '"  class="token_delete">';
                    return $actionBtn;
                })->addColumn('image', function ($row) {
                    return '<img src=" ' . $row->image_path . ' " height="75px" width="75px" />';
                })->rawColumns(['action', 'image'])
                ->make(true);
        }
    }


    public function create()
    {
        $create = view('dashboard.admin.parts.create')->render();
        return response()->json(array('success' => true, 'html' => $create));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required',
            'image' => 'required',
        ]);

        $data = $request->except('image', 'confirmed_password','password');
        $data['password'] = Hash::make($request->password);

        if ($request->image) {
            $data['image'] = $request->image->hashName();
            $request->image->move(public_path('/uploads/admin/'), $data['image']);
        }

        Admin::create($data);

        toast('admin created successfully!', 'success');

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    public function edit(Request $request)
    {
        $admins = Admin::all();

        $edit = view('dashboard.admin.parts.edit', compact('admins'))->render();
        return response()->json(array('success' => true, 'html' => $edit, 'admins' => $admins));
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'required',
        ]);

        $admin->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('email')),
        ]);

        toast('admin updated successfully!', 'success');

        return response()->json(['success' => true, 'message' => 'Data updated successfully']);
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        toast('admin deleted successfully!', 'success');
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}

