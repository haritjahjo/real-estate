@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{route('admin.property-types.index')}}" class="btn btn-outline-success">Back</a>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Add Property Type</h6>

                        <form action="{{ route('admin.property-types.store')}}" method="POST" class="forms-sample">
                            @csrf
                            <div class="mb-3">
                                <label for="type_name" class="form-label">Type Name</label>
                                <input type="text" 
                                    class="
                                        form-control
                                        @error('type_name')
                                            is-invalid
                                        @enderror
                                        " 
                                        id="type_name" name="type_name" autocomplete="off"
                                    placeholder="Type Name">
                                @error('type_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="type_icon" class="form-label">Type Icon</label>
                                <input type="text" 
                                    class="
                                        form-control
                                        @error('type_icon')
                                            is-invalid
                                        @enderror
                                        " 
                                        id="type_icon" name="type_icon" placeholder="Type Icon">
                                @error('type_icon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
