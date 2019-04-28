{{-- This is Route -> HOME  --}}
@extends('app')

{{-- About page content --}}
@section('content')

    {{-- Landing page --}}
    @include('templates.land-template')

    {{-- Home Information page --}}
    @include('info.home-info')

    {{-- Footer page --}}
    @include('footer')

@endsection