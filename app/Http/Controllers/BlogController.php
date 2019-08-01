<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 6/13/19
 * Time: 5:25 PM
 */

namespace App\Http\Controllers;

use Wink\WinkPost;

class BlogController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        $posts = WinkPost::with('tags')->live()->orderBy('publish_date', 'DESC')->get();
        // return view
        return view('blog', [
            'posts' => $posts
        ]);
    }

    public function post($year, $month, $slug) {

        $post = WinkPost::where('slug', $slug)->with('tags')->first();
        return view('post', [
            'post' => $post,
        ]);
    }
}