@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('ogimage'){{ asset('img/og/404.jpg') }}@endsection
