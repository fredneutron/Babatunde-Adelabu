@extends('beautymail::templates.widgets')

@section('content')
    @include('beautymail::templates.widgets.articleStart')
    <h4 class="secondary">
        <strong> Hi Admin,</strong>
    </h4>
    <p> Here is a message from <strong>{{ $view['name'] }}({{ $view['email'] }})</strong> about <strong>{{ $view['subject'] }}</strong>, please read careful and forward your response to this email ( <a href="mailto:{{ $view['email'] }}">{{ $view['email'] }}</a>).</p><br><br>
    <p>{{$view['message']}}</p>
    @include('beautymail::templates.widgets.articleEnd')
@stop