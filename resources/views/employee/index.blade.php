@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        @if(session('status'))
        <div class="alert alert-success alert-dismissible mt-3" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Well done!</strong> {{session('status')}}
        </div>
        @endif
        <div class="col-md-12">
            <div class="text-left mt-3 mb-3">
                <a href="{{route('create.employee')}}" class="btn btn-primary">Add Employee</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Departement</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <th scope="row">{{$employee->id}}</th>
                        <td>{{$employee->fullname}}</td>
                        <td>{{$employee->company->company_name}}</td>
                        <td>{{$employee->department}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{route('show.employee', $employee)}}" class="btn btn-secondary">Detail</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('edit.employee', $employee)}}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-md-4">
                                    <form action="{{route('destroy.employee', $employee)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data employee?' )">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection