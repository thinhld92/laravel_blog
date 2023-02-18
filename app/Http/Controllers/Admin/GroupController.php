<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GroupController extends Controller
{
    protected $data = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['pageTitle'] = "Danh sách nhóm người dùng";
        $this->data['groups'] = Group::latest()->get();
        return view('backend.groups.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['pageTitle'] = "Thêm mới nhóm người dùng";
        return view('backend.groups.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GroupRequest $request)
    {
        $group = new Group();
        $group->name = $request->name;
        $group->description = $request->description;
        $group->save();
        return redirect()->route('admin.groups.index')->with('success', 'Thêm mới nhóm người dùng thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $this->data['pageTitle'] = "Edit thông tin nhóm người dùng";
        $this->data['group'] = $group;
        return view('backend.groups.edit', $this->data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GroupRequest $request, Group $group)
    {
        $group->name = $request->name;
        $group->update();
        return redirect()->route('admin.groups.index')->with('success', 'Edit nhóm người dùng thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('admin.groups.index')->with('success', 'Xoá nhóm người dùng thành công!');
    }
}
