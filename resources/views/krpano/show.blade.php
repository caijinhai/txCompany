@extends('layouts.krpano')

@section('content')

    embedpano({swf:"{{ asset('swf/tour.swf') }}", xml:"{{ asset($krpano_photo->krpano_path) }}", target:"pano", html5:"prefer", passQueryParameters:true});

@stop