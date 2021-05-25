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
                <a href="{{route('create.company')}}" class="btn btn-primary">Add Company</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Company email</th>
                        <th scope="col">Company Address</th>
                        <th scope="col">Company Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$company->company_name}}</td>
                        <td>{{$company->company_email}}</td>
                        <td>{{$company->company_address}}</td>
                        <td>{{$company->company_phone}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{route('show.company', $company)}}" class="btn btn-secondary">Detail</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('edit.company', $company)}}" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-md-4">
                                    <form action="{{route('destroy.company', $company)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data company?' )">Delete</button>
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
    <div class="row float-right">
        <div class="col-md-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{$companies->links()}}
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection