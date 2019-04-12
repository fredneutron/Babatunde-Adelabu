<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 9/8/18
 * Time: 6:26 PM
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SocialRequest as StoreRequest;
use App\Http\Requests\SocialRequest as UpdateRequest;

class SocialCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Social');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/social');
        $this->crud->setEntityNameStrings('social', 'social');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // allow data preview
        $this->crud->allowAccess('show');

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setColumns(['name', 'url', 'user_id']);

        $this->crud->addField( [
            'name' => 'name',
            'label' => 'Name',
            'type' => 'select_from_array',
            'options' => [
                'facebook' => 'Facebook',
                'github' => 'Github',
                'instragam' => 'Instragam',
                'linkedin' => 'Linkedin',
                'twitter' => 'Twitter',
                'spotify' => 'Spotify',
                'GPodcast' => 'Google Podcast'
            ],
            'allows_null' => false
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'url',
            'label' => 'Url',
            'type' => 'text'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'user_id',
            'label' => 'User',
            'type' => 'select',
            'entity' => 'user',
            'attribute' => 'email',
            'model' => 'App\Models\Bio'
        ], 'update/create/both');

        // add asterisk for fields that are required in TagRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}