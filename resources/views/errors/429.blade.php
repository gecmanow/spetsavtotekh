@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
@section('ogimage'){{ asset('img/og/429.jpg') }}@endsection
