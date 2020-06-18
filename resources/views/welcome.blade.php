@extends('layouts.main')
@include('includes.navbars.iniNavbar')
@section('content')
<div class="container">
    <h1 style="text-align: center; margin-top: 20px">Toro fit assessorias</h1>
    <img class="center" src="{{ URL::to('/') }}/images/logonoback.png">
</div>


@include('includes.footer')
@stop
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>