@extends('layouts.admin')
@section('PageTitle')
ELMS | Leave Details
@endsection
@section('user')
    @if($message=Session::get('Success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="row">
        <div class="col s12">
            <div class="page-title" style="font-size: 24px;">Leave Details</div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Leave Details</span>
                    <table id="leaveDetails" class="display responsive-table">
                        <tbody>
                        <tr>
                            <th>Leave ID</th>
                            <th>Leave Type</th>
                            <th width="300px">Action</th>
                        </tr>
                        @foreach($leaves as $leave)
                            <tr>
                                <td>{{$leave->leaveID}}</td>
                                <td>{{$leave->leaveType}}</td>
                                <td>
                                    <form action="{{route('leaves.destroy',$leave->leaveID)}}" method="POST">
                                        <a class="btn btn-primary" href="{{route('leaves.edit',$leave->leaveID)}}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered">

    </table>
@endsection
