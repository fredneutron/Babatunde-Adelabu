<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('bio', 'BioCrudController');
    CRUD::resource('education', 'EducationCrudController');
    CRUD::resource('epic-skills', 'EpicSkillsCrudController');
    CRUD::resource('hobbies', 'HobbiesCrudController');
    CRUD::resource('projects', 'ProjectsCrudController');
    CRUD::resource('skills', 'SkillsCrudController');
    CRUD::resource('social', 'SocialCrudController');
    CRUD::resource('work', 'WorkCrudController');
    CRUD::resource('post', 'PostCrudController');
    CRUD::resource('comment', 'CommentCrudController');
}); // this should be the absolute last line of this file