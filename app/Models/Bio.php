<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 9/3/18
 * Time: 6:42 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Bio extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'bio';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['first_name', 'other_name', 'last_name', 'bio_description', 'gender', 'date_of_birth', 'residential_address', 'current_location', 'state_of_origin', 'nationality', 'profile_picture', 'email', 'phone_number', 'user_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function setProfilePictureAttribute($value)
    {
        $attribute_name = 'profile_picture';
        $disk = 'cloudinary';
        $destination_path = '/images/profile_picture';

        // if the image was erased
        if ($value == null){
            // delete the image from disk
            Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // Make the image
            $image = Image::make($value);

            // Generate a filename
            $filename = md5($value.time()).'.jpg';

            // Store the image on the disk.
            Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());

            // Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
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
