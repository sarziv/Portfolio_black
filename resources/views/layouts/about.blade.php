{{-- This is Route -> HOME  --}}
@extends('app')

{{-- About page content --}}
@section('content')

    {{-- Landing page --}}
    @include('land-page')

    {{-- Home Information page --}}
    @include('info.about-info')

    {{-- Footer page --}}
    @include('footer')

@endsection