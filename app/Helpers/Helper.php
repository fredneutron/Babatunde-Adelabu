<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 8/28/18
 * Time: 5:55 PM
 */

namespace App\Helpers;

use App\Models\Social;

class Helper
{
    public static function getSocial ()
    {
        // rearrange social data collect from database
         return $social = [
            'facebook' => Social::where(['user_id' => 1, 'name' => 'facebook'])->get(),
            'linked-in' => Social::where(['user_id' => 1, 'name' => 'linkedin'])->get(),
            'twitter' => Social::where(['user_id' => 1, 'name' => 'twitter'])->get(),
            'instagram' => Social::where(['user_id' => 1, 'name' => 'instagram'])->get(),
        ];
    }
}