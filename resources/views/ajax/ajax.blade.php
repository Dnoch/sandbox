@extends('frame')
@section('title')
    Chuck Norris Joke Generator
@endsection
@section('content')
    <div class="container">
        <h2>Chuck Norris Joke Generator</h2>
        <form>
            <div>
                <label for="number">Number of jokes</label>
                <input type="number" id="number">
            </div>
            <div>
                <button class="get-jokes">Get Jokes</button>
            </div>
        </form>
        <ul class="jokes"></ul>
    </div>
@endsection
@section('custom-scripts')
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection