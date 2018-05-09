@extends('booklist.frame')
@section('custom-meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css"/>
@endsection
@section('header-styles')
    <style>
        .success, .error {
            color: white;
            padding: 5px;
            margin: 5px 0 15px 0;
        }
        
        .success {
            background: green;
        }
        
        .error {
            background: red;
        }
    </style>
@endsection

@section('title') Book List @endsection</head>
@section('content')
    <div class="container">
        <h1>Add Book</h1>
        <form id="book-form">
            <div>
                <label for="title">Title</label>
                <input value="Game Of Thones" type="text" id="title" class="u-full-width">
            </div>
            <div>
                <label for="author">Author</label>
                <input value="George R R Martin" type="text" id="author" class="u-full-width">
            </div>
            <div>
                <label for="isbn">ISBN#</label>
                <input value="90210" type="text" id="isbn" class="u-full-width">
            </div>
            <div>
                <input type="submit" value="Submit" class="u-full-width">
            </div>
        </form>
        <table class="u-full-width">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="book-list"></tbody>
        </table>
    </div>
@endsection

@section('custom-scripts')
    {{--<script src="/manual-js/app.js"></script>--}}
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection
