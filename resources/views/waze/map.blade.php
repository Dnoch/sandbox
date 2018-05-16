@extends('frame')

@section('title')
foo
@endsection
@section('content')
  {{--<iframe src="https://embed.waze.com/iframe?zoom=14&from_lat=-26.0467&from_lon=28.05998&to_lat=-26.14961&to_lon=28.09381&at_req=0&at_text=Now"--}}
          {{--width="1014" height="768"></iframe>--}}
{{$image}}

@endsection
@section('custom-scripts')
  <script>
    // window.location="https://www.waze.com/en-GB/livemap?zoom=17&lat=-26.14961&lon=28.09381&from_lat=-26.0467&from_lon=28.05998&to_lat=-26.14961&to_lon=28.09381&at_req=0&at_text=Now";
  </script>
@endsection