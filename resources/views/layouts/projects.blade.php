@extends('app')
{{-- About page content --}}
@section('content')
    {{-- Landing page --}}
    @include('templates.land-template')

    {{-- Footer page --}}
    @include('info.project-info')

    {{-- Footer page --}}
    @include('footer')
@endsection