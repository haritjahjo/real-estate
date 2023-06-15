@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('admin.amenities.create') }}" class="btn btn-outline-success">Add Amenity</a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Amenities</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>S1</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($amenities as $amenity)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $amenity->name }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.amenities.edit', $amenity->id) }}"
                                                        class="btn btn-outline-primary" role="button">Edit</a>

                                                    <form action="{{ route('admin.amenities.destroy', $amenity->id) }}"
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
