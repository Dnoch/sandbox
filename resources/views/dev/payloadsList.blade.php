@extends('dev.frame')
@section('custom-meta')
    <meta http-equiv="refresh" content="5">
@endsection
@section('content')
    
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Payload</th>
            <th scope="col">From IP</th>
            <th scope="col">Our Response</th>
            <th scope="col">Sent At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payloads as $payload)
            <tr>
                <th scope="row">{{$payload->id}}</th>
                @php
                    $json = json_decode($payload->payload);
                @endphp
                <td>
                    <pre class="prettyprint">{{json_encode($json, JSON_PRETTY_PRINT)}}</pre>
                </td>
                @if($payload->from_url === '196.213.95.210')
                    <td>NinjaTech Office</td>
                @elseif($payload->from_url === '127.0.0.1')
                    <td>localhost</td>
                @elseif($payload->from_url === '196.25.47.130')
                    <td>Teljoy TRS</td>
                @else
                    <td>{{$payload->from_url}}</td>
                @endif
                <td>{{$payload->our_response}}</td>
                <td>
                    {{$payload->updated_at->diffForHumans()}}
                    <br>
                    {{$payload->updated_at}}
                </td>
                <td>
                    @if(isset($json->IdNumber))
                        <a href="/profile-info-by-id-number/{{$json->IdNumber}}">
                            <button type="button" class="btn btn-dark">
                                View
                            </button>
                        </a>
                    @elseif(isset($json->CustomerNumber))
                        <a href="/profile-info-by-customer-number/{{$json->CustomerNumber}}">
                            <button type="button" class="btn btn-dark">
                                View
                            </button>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $payloads->links() }}



@endsection