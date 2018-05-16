@extends('frame')
@section('title')
Fetch API Sandbox
@endsection
@section('content')
    <div class="container">
        <h1>Fetch API Sandbox</h1>
        <button id="button1">Get Text</button>
        <button id="button2">Get JSON</button>
        <button id="button3">Get API Data</button>
        <br><br>
        <div id="output"></div>
    </div>
@endsection
@section('custom-scripts')
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection