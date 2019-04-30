@extends('app')
{{-- About page content --}}
@section('content')
    {{-- Landing page --}}
    @include('templates.land-template')
    @include('info.contact-info')
    @include('footer')
@endsection