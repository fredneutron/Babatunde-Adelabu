@extends('beautymail::templates.widgets')

@section('content')
    @include('beautymail::templates.widgets.newfeatureStart')
        <h4 class="secondary">
            <strong> Hi {{$name}},</strong>
        </h4>
    <p> Your request about <strong>{{$subject}}</strong> have been received, I will get back to you as soon as possible.</p><br>
        <p>Thank you for your Patience.</p>
    @include('beautymail::templates.widgets.newfeatureEnd')
@stop