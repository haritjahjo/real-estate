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

                        <h6 class="card-title">Edit Property Type</h6>

                        <form action="{{ route('admin.property-types.update', $property_type->id)}}" method="POST" class="forms-sample">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="id" name="id" value="{{ $property_type->id}}">
                            <div class="mb-3">
                                <label for="type_name" class="form-label">Type Name</label>
                                <input type="text" 
                                    class="
                                        form-control
                                        @error('type_name')
                                            is-invalid
                                        @enderror
                                        " 
                                        id="type_name" name="type_name" value="{{ $property_type->type_name}}"                                        
                                    >
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
                                        id="type_icon" name="type_icon" value="{{ $property_type->type_icon}}"
                                        >
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
