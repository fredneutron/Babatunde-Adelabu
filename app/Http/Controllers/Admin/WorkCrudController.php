<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 9/7/18
 * Time: 4:52 PM
 */

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\WorkRequest as StoreRequest;
use App\Http\Requests\WorkRequest as UpdateRequest;

class WorkCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Work');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/work');
        $this->crud->setEntityNameStrings('work', 'work');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setColumns(['position', 'company_name', 'description', 'start_on', 'end_on', 'user_id']);

        $this->crud->addField( [
            'name' => 'position',
            'label' => 'Position',
            'type' => 'text'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'company_name',
            'label' => 'Company name',
            'type' => 'text'
        ], 'update/create.both');

        $this->crud->addField( [
            'name' => 'description',
            'label' => 'Description',
            'type' => 'summernote'
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'start_on',
            'label' => 'Start',
            'type' => 'date_picker',
            'date_picker_options' => [
                'format' => 'mm-yyyy',
                'language' => 'en',
                'viewMode'=> 'months',
                'minViewMode'=> 'months'
            ]
        ], 'update/create/both');

        $this->crud->addField( [
            'name' => 'end_on',
            'label' => 'End',
            'type' => 'date_picker',
            'date_picker_options' => [
                'format' => 'mm-yyyy',
                'language' => 'en',
                'viewMode'=> 'months',
                'minViewMode'=> 'months'
            ]
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