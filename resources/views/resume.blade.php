@extends('layouts.index')

@section('title', 'CV')

@section('content')
    <resume
            :advert='@json($advert)'
            :bio='@json($user)'
            :educations='@json($educations)'
            hobbies="{{ $hobbies }}"
            :skills='@json($skills)'
            :works='@json($works)'
    ></resume>
@stop
