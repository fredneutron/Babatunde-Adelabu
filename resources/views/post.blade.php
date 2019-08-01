@extends('layouts.index')

@section('title', 'Post:: topic')

@section('content')
    <post :article='@json($post)'>
    </post>
@stop