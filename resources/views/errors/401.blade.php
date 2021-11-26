@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
@section('ogimage'){{ asset('img/og/401.jpg') }}@endsection
