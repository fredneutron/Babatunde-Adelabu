<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 9/8/18
 * Time: 10:05 AM
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\EpicSkillsRequest as StoreRequest;
use App\Http\Requests\EpicSkillsRequest as UpdateRequest;

class EpicSkillsCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\EpicSkills');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/epic-skills');
        $this->crud->setEntityNameStrings('special skill', 'special skills');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setColumns(['name', 'type', 'description', 'user_id']);

        $this->crud->addField( [
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'type',
            'label' => 'Type',
            'type' => 'select_from_array',
            'options' => ['frontend' => 'Frontend Development', 'security' => 'Security Enhancement', 'backend' => 'Backend Development'],
            'allows_null' => false
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'description',
            'label' => 'Description',
            'type' => 'summernote'
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