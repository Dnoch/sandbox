@extends('dev.frame')
@section('content')
    <div class="container">
        <div class="d-flex flex-row">
            <div class="p-5">
                <h1 class="align-text-bottom">User Profile Object</h1>
            </div>
            <div class="p-5 ml-auto align-self-end">
                <a target=_blank href="/loginas/{{$user->id}}">
                    <button class="btn btn-primary">Login As This User</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <h4>User Object</h4>
                <h5>ID: {{$user->id}}</h5>
            </div>
            <div class="col-10">
                <div class="d-flex flex-wrap align-content-stretch">
                    <pre class="prettyprint">{{json_encode($user, JSON_PRETTY_PRINT)}}</pre>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <h4>Application Update Object(s)</h4>
            </div>
            <div class="col-10">
                @foreach($user->applicationUpdate()->get() as $applicationUpdate)
                    <div class="d-flex flex-wrap align-content-stretch">
                        <pre class="prettyprint">{{json_encode($applicationUpdate, JSON_PRETTY_PRINT)}}</pre>
                    </div>
                    <div class="d-flex flex-wrap align-content-stretch">
                        @php
                            $counter = 1;
                        @endphp
                        @foreach($applicationUpdate->booking()->get() as $booking)
                            
                            <div class="p-2 align-self-center">
                                <code>Booking Object #{{$counter}}</code>
                                <pre class="prettyprint">{{json_encode($booking, JSON_PRETTY_PRINT)}}</pre>
                            </div>
                            @php
                                $counter++;
                            @endphp
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <h4>Profile Object</h4>
            </div>
            <div class="col-10">
                @foreach($user->profile()->get() as $profile)
                    <div class="d-flex flex-wrap align-content-stretch">
                        <pre class="prettyprint">{{json_encode($profile, JSON_PRETTY_PRINT)}}</pre>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <h4>Contract Object(s)</h4>
            </div>
            <div class="col-10">
                @php
                    $counter = 1;
                @endphp
                <div class="d-flex flex-wrap align-content-stretch">
                    @foreach($user->contracts()->get() as $profile)
                        <div class="p-2 align-self-center">
                            <code>Contract Object #{{$counter}}</code>
                            <pre class="prettyprint">{{json_encode($profile, JSON_PRETTY_PRINT)}}</pre>
                        </div>
                        @php
                            $counter++;
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>

@endsection