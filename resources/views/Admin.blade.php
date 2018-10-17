@extends('beautymail::templates.widgets')

@section('content')
    @include('beautymail::templates.widgets.articleStart')
    <h4 class="secondary">
        <strong> Hi Admin,</strong>
    </h4>
    <p> Here is a message from <strong>{{ $name }}({{ $email }})</strong> about <strong>{{ $subject }}</strong>, please read careful and forward your response to this emaill ( <a href="mailto:{{ $email }}">{{ $email }}</a>).</p><br><br>
    <p>{{$message}}</p>
    @include('beautymail::templates.widgets.articleEnd')
@stop