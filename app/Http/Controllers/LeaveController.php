<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves=Leave::latest()->get();
        return view('leaves.index',compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leaves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'leaveType'=>'required|max:255',
        ]);
        Leave::create($request->all());
        return redirect()->route('leaves.index')
            ->with('Success','Leaves Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        return view('leaves.show',compact('leave'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leaves = Leave::where('leaveID',$id)->first();
        return view('leaves.edit',['leave'=>$leaves]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $leave=Leave::where('leaveID',$id)->first();
        $request->validate([
            'leaveType'=>'required|max:255',
        ]);
        $leave->update($request->all());
        return redirect()->route('leaves.index')
            ->with('Success','Leaves Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Leave::where('leaveID',$id)->delete();
        return redirect()->route('leaves.index')
            ->with('Success','Leave Deleted Successfully');
    }
    public function __construct(){
        $this->middleware('auth');
    }
}
