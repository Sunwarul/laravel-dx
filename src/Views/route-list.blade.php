@extends('laravel-dx::layout')

@section('content')
<style>
    .small {
        /* font-size: 5px; */
    }
</style>

<div class="container-fluid">
    <h2 class="text-center1">{{ __("Route List") }}</h2>
    <pre class="small">
        {{ $routeList }}
    </pre>
</div>

@endsection
