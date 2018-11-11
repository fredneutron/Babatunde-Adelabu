@extends('layouts.index')

@section('title', 'Home')

@section('content')
    <?php $project = $projects[array_rand($projects, 1)]; ?>
    <main class="page lanidng-page">
            
        <!-- Biography -->
        <!-- pass registered user's biography to bio -->
        <Bio :bio='@json($bio)'
             contact-link="{{ $advertise['contact_link'] }}"
             contact-ad="{{ $advertise['contact_statement'] }}"
             cv="{{ $advertise['cv'] }}"
             path="{{ $image_path }}">
        </Bio>

        <!-- This is for advertising projects
         select all registered projects from database and pass it to advertise-content -->
        <project-display :advertise-content='@json($projects)'
                         path="{{ $image_path }}">
        </project-display>

        <!-- This is for advertise contact -->
        <ad-link advertise-text="{{ $advertise['advertise_text'] }}"
                 advertise-contact="{{ $advertise['contact_statement'] }}"
                 advertise-contact-link="{{ $advertise['contact_link'] }}">
        </ad-link>

        <!-- This is for skills advertise -->
        <s-skills :frontend='@json($special['frontend'])'
                  :backend='@json($special['backend'])'
                  :security='@json($special['security'])'>
        </s-skills>

        <!-- select all registered project in database and pass it to projects -->
        <project-ad :projects='@json($project)'
                    path="{{ $image_path }}">
        </project-ad>

    </main>

@stop
