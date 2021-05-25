@extends('layouts.master')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h4>Edit Data Company {{$company->company_name}}</h4>
            <form action="{{route('update.company', $company)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="company_name">Company Name</label>
                        <input required value="{{$company->company_name}}" type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="company_email">Company Email</label>
                    <input required value="{{$company->company_email}}" type="email" class="form-control" id="company_email" name="company_email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="company_address">Company Address</label>
                    <input required value="{{$company->company_address}}" type="text" class="form-control" id="company_address" name="company_address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="company_phone">Company Phone</label>
                    <input required value="{{$company->company_phone}}" type="text" class="form-control" id="company_phone" name="company_phone" placeholder="Phone">
                </div>

                <button type="submit" class="btn btn-primary">Update Company</button>
                <a href="{{route('index.company')}}" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection