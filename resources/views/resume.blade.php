@extends('layouts.index')

@section('title', 'CV')

@section('content')
    <main class="page cv-page">

        <!-- Biography
             pass registered user's biography to bio -->
        <bio :bio='@json($user)'
             contact-link="{{ $advertise['contact_link'] }}"
             contact-ad="{{ $advertise['contact_statement'] }}"
             cv="{{ $advertise['cv'] }}"
             path="{{ $image_path }}"
        >
        </bio>

        <section class="portfolio-block cv">
            <div class="container">

                <!-- setting up all work experience -->
                <work-experience :works='@json($works)'>
                </work-experience>

                <!-- setting up all education background -->
                <education :education='@json($education)'>
                </education>

                <!-- setting up all skills set -->
                <skills :skills='@json($skills)'>
                </skills>

                <!-- setting up hobbies -->
                <hobbies :hobbies='@json($hobbies)'>
                </hobbies>

                <!-- print resume -->
                <print>
                </print>
            </div>
        </section>
    </main>
@stop
