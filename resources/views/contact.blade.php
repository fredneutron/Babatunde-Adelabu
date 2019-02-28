@extends('layouts.index')

@section('title', 'Contact')

@section('content')
    <main class="page contact-page">
        <section class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2>Contact me</h2>
                </div>
                <div class="row">

                    <!-- Form field for contacting the portfolio's user -->
                    <contact></contact>

                    <!-- select name,dob,email,phone from database and pass it to contact -->
                    <contact-link :contact='@json($contact)'></contact-link>
                </div>
            </div>
        </section>
    </main>
@stop