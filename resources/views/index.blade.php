@extends('layouts.index')

@section('title', 'Home')

@section('content')
    <home
            :advert='@json($advert)'
            :bio='@json($user)'
            :projects='@json($projects)'
            :technology-type='@json($skills)'
    ></home>
@stop
