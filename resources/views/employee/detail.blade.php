@extends('layouts.master')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h4>Detail Data Employee {{$employee->fullname}}</h4>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="fullname">Full Name</label>
                    <input disabled value="{{$employee->fullname}}" type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                </div>
            </div>
            <div class="form-group">
                <label for="company_email">Company</label>
                <input disabled value="{{$employee->company->company_name}}" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input disabled value="{{$employee->department}}" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="email">Employee Email</label>
                <input disabled value="{{$employee->email}}" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="phone">Employee Phone</label>
                <input disabled value="{{$employee->phone}}" type="email" class="form-control" >
            </div>

            <a href="{{route('index.employee')}}" type="button" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</div>
@endsection