@extends('layouts.inicio')

@section('title','Dashboard')

@section ('content','Welcome to your aplication dashboard')

@section ('footerscripts')
        @parent
        <script> src ='dashboard.js' </script>
@endsection

@section('main')
<p> Sing up to our website</p>
@include('partials.sing-up-button',[ 'text' =>'See just how great it is.'])
@endsection










