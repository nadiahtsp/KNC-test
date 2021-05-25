@extends('layouts.master')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h4>Edit Data Employee {{$employee->fullname}}</h4>
            <form action="{{route('update.employee', $employee)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="employee_name">Employee Name</label>
                        <input required value="{{$employee->fullname}}" type="text" class="form-control" id="fullname" name="fullname" placeholder="fullname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="employee_email">Company</label>
                    <select required class="custom-select" name="id_comp" id="inputGroupSelect01">
                        <option value="">Choose...</option>
                        @foreach($companies as $company)
                        <option value="{{$company->company_id}}" @if($employee->id_comp === $company->company_id) selected @endif>{{$company->company_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input required value="{{$employee->department}}" type="text" class="form-control" id="department" name="department" placeholder="Department">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input required value="{{$employee->email}}" type="text" class="form-control" id="email" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input required value="{{$employee->phone}}" type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>

                <button type="submit" class="btn btn-primary">Update employee</button>
                <a href="{{route('index.employee')}}" type="button" class="btn btn-secondary">Cancel</a>
                </form>
        </div>
    </div>
</div>
@endsection