@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
@section('ogimage'){{ asset('img/og/503.jpg') }}@endsection
