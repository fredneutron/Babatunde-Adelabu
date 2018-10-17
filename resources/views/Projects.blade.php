@extends('layouts.index')

@section('title', 'Projects')

@section('content')
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>Recent Work</h2>
                </div>

                <!-- pass all registered project from database to projects -->
                <recent-projects :projects='@json($projects)'
                                 path="{{ $image_path }}">
                </recent-projects>
            </div>
        </section>
    </main>

@stop