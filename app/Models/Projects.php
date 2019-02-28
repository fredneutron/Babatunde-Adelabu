<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 9/11/18
 * Time: 9:12 AM
 */

namespace App\Models;


use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use JD\Cloudder\Facades\Cloudder;

class Projects extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'projects';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'image', 'description', 'url', 'user_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function setImageAttribute($value)
    {
        $attribute_name = 'image';
        $disk = 'cloudinary';
        $destination_path = '/images/projects/';

        // if the image was erased
        if($value == null){
            // delete the image from cloud
            Cloudder::destoryImage(Cloudder::getPublicId());
            Cloudder::delete(Cloudder::getPublicId());
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // Generate a public_id
            $public_id = md5($value.time());

            // upload the image to Cloudinary
            Cloudder::upload($value,null, ['folder' => $destination_path, 'public_id' => $public_id]);

            // get image url from cloudinary
            //$image_url = Cloudder::secureShow(Cloudder::getPublicId());
	        $image_url = Cloudder::show(Cloudder::getPublicId(), ['width'=> 'auto', 'height' => 1200, 'crop'=> 'fit', 'format' => 'jpg']);

            // Save the path to the database
            $this->attributes[$attribute_name] = $image_url;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo('Backpack\Base\app\Models\BackpackUser')->withDefault([
            'name' => 'Babatunde Adelabu',
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
