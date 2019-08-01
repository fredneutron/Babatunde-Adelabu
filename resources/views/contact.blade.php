@extends('layouts.index')

@section('title', 'Contact')

@section('content')
    <contact :links='@json($contact)'
    ></contact>
@stop