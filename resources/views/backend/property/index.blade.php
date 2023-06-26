@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('admin.properties.create') }}" class="btn btn-outline-success">Add Property</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Properties</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>S1</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Prop Status</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($properties as $property)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td><img src="{{ asset($property->thumbnail)}}" alt="" style="height: 40px; width: 70px;"> </td>
                                            <td>{{ $property->name }}</td>
                                            <td>{{ $property->property-types_id }}</td>
                                            <td>{{ $property->prop_status }}</td>
                                            <td>{{ $property->city }}</td>
                                            <td>
                                                @if ($property->status === 1)
                                                    <span class="badge rounded-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge rounded-pill bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.properties.edit', $property->id) }}"
                                                        class="btn btn-outline-primary" role="button">Edit</a>

                                                    <form action="{{ route('admin.properties.destroy', $property->id) }}"
                                                        method="POST" onsubmit="return confirm('are you sure?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-outline-danger"
                                                            type="submit">Delete</button>
                                                    </form>
                                                </div>


                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
