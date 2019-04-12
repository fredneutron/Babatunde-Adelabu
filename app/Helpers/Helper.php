<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 8/28/18
 * Time: 5:55 PM
 */

namespace App\Helpers;

use App\Models\Bio;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use JD\Cloudder\Facades\Cloudder;

class Helper
{
    public static function getSocial ()
    {
        // selecting all user's info from database
        $user = Bio::where('email', 'adelabu4fred@gmail.com')->first();

        // get social links
        $socials = $user->socials;

        // rearrange social data collect from database
        return $socials;
    }

    public static function getNavigation ()
    {
        // return an array of navigation routes
        return [
            [
                'name' => 'Home',
                'url' =>  '/.'
            ],
            [
                'name' => 'Projects',
                'url' => '/Projects'
            ],
            [
                'name' => 'Blog',
                'url' => '/Blog'
            ],
            [
                'name' => 'CV',
                'url' => '/Resume'
            ],
            [
                'name' => 'Contact',
                'url' => '/Contact'
            ]
        ];
    }

    public static function localImageUpload(Array $attributes, String $attributeName, String $disk, String $uploadPath, String $imageValue, bool $resize = false, $height = 0, $width = 0)
    {
        // if the image was erased
        if ($imageValue == null){
            // delete the image from disk
            Storage::disk($disk)->delete($attributes[$attributeName]);

            // set null in the database column
            return null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($imageValue, 'data:image'))
        {
            // Make the image
            if ($resize === false)
            {
                $image = Image::make($imageValue);
            } else {
                // make and resize the image
                $image = Image::make($imageValue)->resize($width,$height);
            }

            // Generate a filename
            $filename = md5($imageValue.time()).'.jpg';

            // Store the image on the disk.
            Storage::disk($disk)->put($uploadPath.'/'.$filename, $image->stream());

            // return the path
            return $uploadPath.'/'.$filename;
        }
    }

    public static function cloudinaryImageUpload(String $uploadPath, String $imageValue, Array $options = null)
    {
        // if the image was erased
        if($imageValue == null){
            // delete the image from cloud
            Cloudder::destoryImage(Cloudder::getPublicId());
            Cloudder::delete(Cloudder::getPublicId());
        }

        // if a base64 was sent, store it in the db
        if (starts_with($imageValue, 'data:image'))
        {
            // Generate a public_id
            $public_id = md5($imageValue.time());

            // upload the image to Cloudinary
            Cloudder::upload($imageValue,null, ['folder' => $uploadPath, 'public_id' => $public_id]);

            // get image url from cloudinary
            if ($options === null)
            {
                $image_url = Cloudder::secureShow(Cloudder::getPublicId());
            } else {
                $image_url = Cloudder::show(Cloudder::getPublicId(), $options);
            }

            // return the path
            return $image_url;
        }
    }
}
