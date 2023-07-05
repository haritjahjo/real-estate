@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('admin.properties.index') }}" class="btn btn-outline-success">Back</a>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Form Grid</h6>
                        <form action="{{ route('admin.properties.create') }}" method="POST" id="myForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Property Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Property Status</label>
                                        <select class="form-select" id="prop_status" name="prop_status">
                                            <option selected disabled>Select Property Status</option>
                                            <option>12-18</option>
                                            <option>18-22</option>
                                            <option>22-30</option>
                                            <option>30-60</option>
                                            <option>Above 60</option>
                                        </select>
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Lower Price</label>
                                        <input type="text" class="form-control" id="lower_price" name="lower_price">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Max Price</label>
                                        <input type="text" class="form-control" id="max_price" name="max_price">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="formFile">Main Thumbnail</label>
                                        <input class="form-control" type="file" id="thumbnail" name="thumbnail"
                                            onchange="mainThumbUrl(this)">
                                        <img src="" id="mainThumb">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label" for="formFile">Multi Image</label>
                                        <input class="form-control" type="file" id="multiImg" name="multi_img[]"
                                            multiple="">
                                        <div class="row" id="preview_img">

                                        </div>

                                    </div>
                                </div>
                            </div><!-- Row -->



                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Bed Rooms</label>
                                        <input type="text" class="form-control" id="bedrooms" name="bedrooms">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Bath Rooms</label>
                                        <input type="text" class="form-control" id="bathrooms" name="bathrooms">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Garage</label>
                                        <input type="text" class="form-control" id="garage" name="garage">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Garage Size</label>
                                        <input type="text" class="form-control" id="garage_size" name="garage_size">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Postal Code</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Property Size</label>
                                        <input type="text" class="form-control" id="size" name="size">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Property Video</label>
                                        <input type="text" class="form-control" id="video" name="video">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Neighborhood</label>
                                        <input type="text" class="form-control" id="neighborhood"
                                            name="neighborhood">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Latitude</label>
                                        <input type="text" class="form-control" id="latitude" name="latitude">
                                        <a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                            target="_blank">Go here to get Latitude</a>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Longitude</label>
                                        <input type="text" class="form-control" id="longitude" name="longitude">
                                        <a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                            target="_blank">Go here to get Longitude</a>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Property Type</label>
                                        <select class="form-select" id="property_types_id" name="property_types_id">
                                            <option selected disabled>Select Property Status</option>
                                            @foreach ($propertyTypes as $type)
                                                <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Property Amenities</label>
                                        <select class="js-example-basic-multiple form-select" multiple="multiple"
                                            data-width="100%" id="amenities_id" name="amenities_id">
                                            @foreach ($amenities as $amenity)
                                                <option value="{{ $amenity->id }}">{{ $amenity->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Agent</label>
                                        <select class="form-select" id="agent_id" name="agent_id">
                                            <option selected disabled>Select Property Status</option>
                                            @foreach ($activeAgents as $activeAgent)
                                                <option value="{{ $activeAgent->id }}">{{ $activeAgent->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Short Desription</label>
                                    <textarea class="form-control" id="short_description" name="short_description" rows="3"></textarea>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Long Description</label>

                                    <textarea class="form-control" name="long_description" id="long_description" rows="3"></textarea>
                                </div>
                            </div><!-- Col -->
                            <hr>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" id="featured" name="featured" value="1" class="form-check-input">
                                    <label class="form-check-label" for="featured">
                                        Featured Property
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" name="hot" value="1" class="form-check-input"
                                        id="checkInline">
                                    <label class="form-check-label" for="checkInline">
                                        Hot Property
                                    </label>
                                </div>

                            </div>
                            <div class="row add_item">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="facility_name" class="form-label">Facilities </label>
                                        <select name="facility_name[]" id="facility_name" class="form-control">
                                            <option value="">Select Facility</option>
                                            <option value="Hospital">Hospital</option>
                                            <option value="SuperMarket">Super Market</option>
                                            <option value="School">School</option>
                                            <option value="Entertainment">Entertainment</option>
                                            <option value="Pharmacy">Pharmacy</option>
                                            <option value="Airport">Airport</option>
                                            <option value="Railways">Railways</option>
                                            <option value="Bus Stop">Bus Stop</option>
                                            <option value="Beach">Beach</option>
                                            <option value="Mall">Mall</option>
                                            <option value="Bank">Bank</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="distance" class="form-label"> Distance </label>
                                        <input type="text" name="distance[]" id="distance" class="form-control"
                                            placeholder="Distance (Km)">
                                    </div>
                                </div>
                                <div class="form-group col-md-4" style="padding-top: 30px;">
                                    <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add
                                        More..</a>
                                </div>
                            </div>
                            <!---end row-->
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--========== Start of add multiple class with ajax ==============-->
    <div style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                <div class="container mt-2">
                    <div class="row">

                        <div class="form-group col-md-4">
                            <label for="facility_name">Facilities</label>
                            <select name="facility_name[]" id="facility_name" class="form-control">
                                <option value="">Select Facility</option>
                                <option value="Hospital">Hospital</option>
                                <option value="SuperMarket">Super Market</option>
                                <option value="School">School</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Airport">Airport</option>
                                <option value="Railways">Railways</option>
                                <option value="Bus Stop">Bus Stop</option>
                                <option value="Beach">Beach</option>
                                <option value="Mall">Mall</option>
                                <option value="Bank">Bank</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="distance">Distance</label>
                            <input type="text" name="distance[]" id="distance" class="form-control"
                                placeholder="Distance (Km)">
                        </div>
                        <div class="form-group col-md-4" style="padding-top: 20px">
                            <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle">Add</i></span>
                            <span class="btn btn-danger btn-sm removeeventmore"><i
                                    class="fa fa-minus-circle">Remove</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!----For Section-------->
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 0;
            $(document).on("click", ".addeventmore", function() {
                var whole_extra_item_add = $("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", ".removeeventmore", function(event) {
                $(this).closest("#whole_extra_item_delete").remove();
                counter -= 1
            });
        });
    </script>
    <!--========== End of add multiple class with ajax ==============-->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    prop_status: {
                        required: true,
                    },
                    max_price: {
                        required: true,
                    },
                    lower_price: {
                        required: true,
                    },
                    // bedrooms: {
                    //     required: true,
                    // },
                    // bathrooms: {
                    //     required: true,
                    // },
                    // garage: {
                    //     required: true,
                    // },
                    // garage_size: {
                    //     required: true,
                    // },
                    // address: {
                    //     required: true,
                    // },
                    // city: {
                    //     required: true,
                    // },
                    // state: {
                    //     required: true,
                    // },
                    // postal_code: {
                    //     required: true,
                    // },
                    // size: {
                    //     required: true,
                    // },
                    // video: {
                    //     required: true,
                    // },
                    // neighborhood: {
                    //     required: true,
                    // },
                    // latitude: {
                    //     required: true,
                    // },
                    // longitude: {
                    //     required: true,
                    // },
                    // short_description: {
                    //     required: true,
                    // },
                    // long_description: {
                    //     required: true,
                    // },
                    property_types_id: {
                        required: true,
                     },
                    // amenities_id: {
                    //     required: true,
                    // },
                    // agent_id: {
                    //     required: true,
                    // },
                    // multiImg: {
                    //     required: true,
                    // },
                    // thumbnail: {
                    //     required: true,
                    // },

                },
                messages: {
                    name: {
                        required: 'Please Enter Property Name',
                    },
                    prop_status: {
                        required: 'Please Enter Property Status',
                    },
                    max_price: {
                        required: 'Please Enter Max Price',
                    },
                    lower_price: {
                        required: 'Please Enter Lower Price',
                    },
                    // bedrooms: {
                    //     required: 'Please Enter Bedrooms',
                    // },
                    // bathrooms: {
                    //     required: 'Please Enter Bathrooms',
                    // },
                    // garage_size: {
                    //     required: 'Please Enter Garage Size',
                    // },
                    // garage: {
                    //     required: 'Please Enter Garage',
                    // },
                    // address: {
                    //     required: 'Please Enter Address',
                    // },
                    // city: {
                    //     required: 'Please Enter City',
                    // },                    
                    // state: {
                    //     required: 'Please Enter State',
                    // },
                    // postal_code: {
                    //     required: 'Please Enter Postal Code',
                    // },
                    // size: {
                    //     required: 'Please Enter Property Size',
                    // },
                    // video: {
                    //     required: 'Please Enter Property Video',
                    // },
                    // neighborhood: {
                    //     required: 'Please Enter Neighborhood',
                    // },
                    // latitude: {
                    //     required: 'Please Enter Latitude',
                    // },
                    // longitude: {
                    //     required: 'Please Enter Longitude',
                    // },
                    // short_description: {
                    //     required: 'Please Enter Short Description',
                    // },
                    // long_description: {
                    //     required: 'Please Enter Long Description',
                    // },
                    property_types_id: {
                        required: 'Please Enter Property Type',
                    },
                    // amenities_id: {
                    //     required: 'Please Enter Amenities',
                    // },
                    // agent_id: {
                    //     required: 'Please Enter Agent',
                    // },
                    // multiImg: {
                    //     required: 'Please Upload Image',
                    // },
                    // thumbnail: {
                    //     required: 'Please Upload Image',
                    // },                    
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>



    <script type="text/javascript">
        function mainThumbUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThumb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);

            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                                .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(100)
                                        .height(80); //create image element 
                                    $('#preview_img').append(
                                        img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>
@endsection
