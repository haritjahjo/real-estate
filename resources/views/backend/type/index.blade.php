@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('admin.property-types.create') }}" class="btn btn-outline-success">Add Property Type</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Property Type All</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>S1</th>
                                        <th>Type Name</th>
                                        <th>Type Icon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($types as $type)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $type->type_name }}</td>
                                            <td>{{ $type->type_icon }}</td>
                                            <td>
                                                <a href="{{ route('admin.property-types.edit', $type->id) }}"
                                                    class="btn btn-outline-primary">Edit</a>
                                                <form action="{{ route('admin.property-types.destroy', $type->id) }}"
                                                    method="POST" onsubmit="return confirm('are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger" type="submit">Delete</button>
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
        </div>

    </div>
@endsection
