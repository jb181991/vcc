@extends('voyager::master')

@section('content')
    <div class="page-content">
        <div class="col-md-12">
            <h5>Calling Service Form</h5>
        </div>
        <div class=" container-fluid" style="padding:20px;">

            <div class="col-md-6">
                <div class="panel panel-body">
                    <div class="col-md-12">
                        <p style="color:green;font-size:0.75rem;"Veterinary emergencies, hello.<br>
                            This call is recorded.<br>
                            What can I do for you?"</p>
                        <ul style="font-size:0.75rem;">
                            <li>Caller speaks...</li>
                        </ul>
                        <p style="color:green;font-size:0.75rem;">"We will first quickly fill out a form for the vet."</p>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">Date and hour <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control datepicker" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">Title <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <select name="title" id="title" class="form-control">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">First name <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">Last name <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Address</h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">Street <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">City <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">Canton <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">Country <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">Postal code <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">Email <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">Mobile Phone <span style="color: red;">*</span></label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="date_hour">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <button class="btn btn-primary btn-block"><i class="voyager-marker"></i> Route</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-secondary btn-block"><i class="voyager-marker"></i> Street view</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Patient/s</h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th><strong>Animal<br>species <span style="color: red;">*</span></strong></th>
                                        <th><strong>Date of<br>Birth <span style="color: red;">*</span></strong></th>
                                        <th><strong>Animal<br>name <span style="color: red;">*</span></strong></th>
                                        <th><strong>Things to know for this<br>patient <span style="color: red;">*</span></strong></th>
                                        <th><strong>Reason for your<br>call <span style="color: red;">*</span></strong></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-block">
                            <i class="voyager-add"></i>
                            Add Patient
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-12" style="margin-bottom:20px;">
                    <div id="map" class="map map-home" style="height: 300px; width:600px;"></div>
                </div>
                
                <div class="col-md-8">
                    <div class="panel panel-body" style="border: green 1px solid;">
                        <p>"Cabinet Veterinaire International The itinerary will be display here"</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

@section('javascript')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        $(document).ready(function(){
            var map = L.map('map').setView([51.505, -0.09], 13);

            L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
                attribution: '&copy; Vet Call Center'
            }).addTo(map);

            L.marker([51.5, -0.09]).addTo(map)
                .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                .openPopup();
        });
    </script>
@endsection