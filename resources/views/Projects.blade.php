@extends('layouts.index')

@section('title', 'Projects')

@section('content')
    <projects :projects='@json($projects)'
    ></projects>
@stop