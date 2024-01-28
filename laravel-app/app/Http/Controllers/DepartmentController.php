<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments=Department::get();
        return view('departments.index',compact('departments'));

    }
    /**
     * Show the form for creating a new resource.
     */
        public function create()
    {
        return view('departments.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request)
    {
        Department::create([
            'name'=>$request->name
        ]);
        return redirect()->route('department.index')->with('message','Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $department=Department::findOrFail($id);
        return view('departments.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentRequest $request, string $id)
    {
        //
        Department::findOrFail($id)->update([
            'name'=>$request->name
        ]);
        return redirect()->route('department.index')->with('message','Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Department::findOrFail($id)->delete();
        return redirect()->route('department.index')->with('message','Success');

        //
    }
}
