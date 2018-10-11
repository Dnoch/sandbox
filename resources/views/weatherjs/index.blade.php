@extends('frame')
@section('title')
    WeatherJS
@endsection
@section('custom-meta')
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center bg-primary mt-5 p-5 rounded">
                <h1 id="w-location"></h1>
                <h3 class="text-dark" id="w-desc"></h3>
                <h3 id="w-string"></h3>
                <img id="w-icon">
                <ul id="w-details" class="list-group mt-3">
                    <li class="list-group-item" id="w-humidity"></li>
                    <li class="list-group-item" id="w-dewpoint"></li>
                    <li class="list-group-item" id="w-feels-like"></li>
                    <li class="list-group-item" id="w-wind"></li>
                </ul>
                <hr>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#locModal">
                    Change Location
                </button>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="locModal" tabindex="-1" role="dialog" aria-labelledby="locModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="locModalLabel">Choose Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="w-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" id="state" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="w-change-btn" type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    
    <script src="storage.js"></script>
    <script src="weather.js"></script>
    <script src="ui.js"></script>
    <script src="weather-app.js"></script>
@endsection
@section('custom-scripts')
    <script src="{{ mix('/js/weather-app.js') }}"></script>
@endsection