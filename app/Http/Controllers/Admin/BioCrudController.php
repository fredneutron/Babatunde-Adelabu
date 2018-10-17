<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 9/3/18
 * Time: 6:30 PM
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\BioRequest as StoreRequest;
use App\Http\Requests\BioRequest as UpdateRequest;

class BioCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Bio');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/bio');
        $this->crud->setEntityNameStrings('bio', 'bio');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setColumns(['first_name', 'other_name', 'last_name', 'bio_description', 'gender', 'date_of_birth', 'residential_address', 'current_location', 'state_of_origin', 'nationality', 'profile_picture', 'email', 'phone_number', 'user_id']);

        $this->crud->addField( [
            'name' => 'first_name',
            'label' => 'First name',
            'type' => 'text',
            'placeholder' => 'First name'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'other_name',
            'label' => 'Other name',
            'type' => 'text',
            'placeholder' => 'Other name'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'last_name',
            'label' => 'Last name',
            'type' => 'text',
            'placeholder' => 'Last name'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'bio_description',
            'label' => 'Description',
            'type' => 'summernote'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'gender',
            'label' => 'Gender',
            'type' => 'radio',
            'options' => [
                'Male' => 'Male',
                'Female' => 'Female'
            ]
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'date_of_birth',
            'label' => 'Birthday',
            'type' => 'date_picker',
            'date_picker_options' => [
                'format' => 'dd-mm-yyyy',
                'language' => 'en'
            ]
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'residential_address',
            'label' => 'Home Address',
            'type' => 'address',
            'store_as_json' => true
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'current_location',
            'label' => 'Current location',
            'type' => 'address',
            'store_as_json' => true
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'state_of_origin',
            'label' => 'State Of Origin',
            'type' => 'address',
            'store_as_json' => true
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'nationality',
            'label' => 'Nationality',
            'type' => 'text',
            'store_as_json' => true
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'profile_picture',
            'label' => 'Profile Picture',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'prefix' => 'images/profile_pictures/'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'email',
            'label' => 'Email address',
            'type' => 'email'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'phone_number',
            'label' => 'Phone number',
            'type' => 'number'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'user_id',
            'label' => 'User',
            'type' => 'select',
            'entity' => 'user',
            'attribute' => 'name',
            'model' => 'Backpack\Base\app\Models\BackpackUser'
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