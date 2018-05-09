@extends('dev.frame')
@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Payload (JSON)</th>
            <th scope="col">Payload (XML Original)</th>
            <th scope="col">Form Name</th>
            <th scope="col">URL of Form</th>
            <th scope="col">TRS Response</th>
            <th scope="col">TRS Environment</th>
            <th scope="col">PHP Error</th>
            <th scope="col">Sent At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payloads as $payload)
            <tr>
                <th scope="row">{{$payload->id}}</th>
                @php
                    $json = json_decode($payload->payload_as_json);
                @endphp
                <td>
                    <pre style="max-width: 250px" class="prettyprint">{{json_encode($json, JSON_PRETTY_PRINT)}}</pre>
                </td>
                <td>
                    <pre style="max-width: 250px" class="prettyprint">{{$payload->payload}}</pre>
                </td>
                <td>{{$payload->form_name}}</td>
                <td>{{$payload->site_url}}</td>
                <td><pre style="max-width: 250px" class="prettyprint">{{$payload->trs_response}}</pre></td>
                @if($payload->trs_url === 'http://service.teljoy.co.za/MarketingServicePublicDev/WebQueryServicePublic.svc?wsdl')
                <td>Development</td>
                @elseif($payload->trs_url === 'http://service.teljoy.co.za/MarketingServicePublicProd/WebQueryServicePublic.svc?wsdl')
                    <td>Production/Live</td>
                @else
                    <td><pre style="max-width: 250px" class="prettyprint">{{$payload->trs_url}}</pre></td>
                @endif
                @if(isset($payload->php_error))
                    <td>{{$payload->php_error}}</td>
                @else
                    <td>N/A</td>
                @endif
                <td>
                    {{$payload->updated_at->diffForHumans()}}
                    <br>
                    {{$payload->updated_at}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $payloads->links() }}
@endsection