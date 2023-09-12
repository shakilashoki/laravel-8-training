@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle') }}</div>

                <div class="card-body">
                    @if(Session::get('success', false))
                        <div class="alert alert-success alert-notification">
                            <i class="fa fa-check"></i>
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <a href="{{ route('vehicle.create') }}" class="btn btn-primary">Add</a>
                    <br>
                    <table class="table table-striped ">
                        <tr>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Year</th>
                            <th>Option</th>
                        </tr>
                        @foreach ($vehicles as $row)
                            <tr>
                                <td>{{ $row->brand }}</td>
                                <td>{{ $row->model }}</td>
                                <td>{{ $row->type }}</td>
                                <td>{{ $row->year }}</td>
                                <td>
                                    @if($row->status == 0)
                                        <button class="btn btn-primary" disabled>Edit</button>
                                        <button class="btn btn-danger" disabled>Delete</button>
                                    @else
                                        <a href="{{ route('vehicle.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('vehicle.delete.soft', $row->id) }}" class="btn btn-danger">Delete</a>
                                    @endif


                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
