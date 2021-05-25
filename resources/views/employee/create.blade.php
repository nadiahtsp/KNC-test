@extends('layouts.master')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('store.employee')}}" method="POST">
                @csrf
                @method('POST')
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="fullname">Full Name</label>
                        <input required type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="company_email">Company</label>
                    <select required class="custom-select" name="id_comp" id="inputGroupSelect01">
                    <option value="">Choose...</option>
                        @foreach($companies as $company)
                        <option value="{{$company->company_id}}">{{$company->company_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Employee Email </label>
                    <input required type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input required type="text" class="form-control" id="department" name="department" placeholder="Department">
                </div>
                <div class="form-group">
                    <label for="address">Employee Address</label>
                    <input required type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="phone">Employee Phone</label>
                    <input required type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>

                <button type="submit" class="btn btn-primary">Add Employee</button>
                <a href="{{route('index.employee')}}" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection