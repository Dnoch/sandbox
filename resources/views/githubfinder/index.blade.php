@extends('frame')
@section('title')
    Github Finder
@endsection
@section('custom-meta')
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
@endsection
@section('content')
    <nav class="navbar navbar-dark bg-primary mb-3">
        <div class="container">
            <a href="#" class="navbar-brand">GitHub Finder</a>
        </div>
    </nav>
    <div class="container searchContainer">
        <div class="search card card-body">
            <h1>Search GitHub Users</h1>
            <p class="lead">Enter a username to fetch a user profile and repos</p>
            <input type="text" id="searchUser" class="form-control" placeholder="GitHub Username...">
        </div>
        <br>
        <div id="profile"></div>
        <div id="repos"></div>
    </div>
    
    <footer class="mt-5 p-3 text-center bg-light">
        GitHub Finder &copy;
    </footer>
@endsection
@section('custom-scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection