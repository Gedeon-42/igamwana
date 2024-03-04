<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel AJAX Dependent Country State City Dropdown Example - ItSolutionStuff.com</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-primary mb-4 text-center">
                   <h4 >Laravel AJAX Dependent Country State City Dropdown Example  ItSolutionStuff.com</h4>
                </div> 
                <form>
                    <div class="form-group mb-3">
                        <select  id="province-dropdown" class="form-control">
                            <option value="">Select Province</option>
                            @foreach ($provinces as $data)
                            <option value="{{$data->id}}">
                                {{$data->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <select id="district-dropdown" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="sector-dropdown" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="cell-dropdown" class="form-control">
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            province Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#province-dropdown').on('change', function () {
                var idProvince = this.value;
                $("#district-dropdown").html('');
                $.ajax({
                    url: "{{url('/api/district')}}",
                    type: "POST",
                    data: {
                        province_id: idProvince,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#district-dropdown').html('<option value="">-- Select District --</option>');
                        $.each(result.districts, function (key, value) {
                            $("#district-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#sector-dropdown').html('<option value="">Select sector </option>');
                    }
                });
            });
  
            /*------------------------------------------
            --------------------------------------------
            district Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#district-dropdown').on('change', function () {
                var idState = this.value;
                $("#sector-dropdown").html('');
                $.ajax({
                    url: "{{url('/api/sector')}}",
                    type: "POST",
                    data: {
                        district_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#sector-dropdown').html('<option value="">Select sector</option>');
                        $.each(res.sectors, function (key, value) {
                            $("#sector-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        
                    }
                });
            });
  
        // sector dropdown
            $('#sector-dropdown').on('change', function () {
                var idState = this.value;
                $("#cell-dropdown").html('');
                $.ajax({
                    url: "{{url('/api/cell')}}",
                    type: "POST",
                    data: {
                        sector_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#cell-dropdown').html('<option value=""> Select cell</option>');
                        $.each(res.cells, function (key, value) {
                            $("#cell-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

        });
    </script>
</body>