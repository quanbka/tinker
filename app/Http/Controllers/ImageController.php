<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    public function resize ($width, $height, $image) {
        $img = Image::make("https://$image");
        // return $img;
        // $img->fit($width, $height);
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        return $img->response(null, 80);
        $dirname = 'cdn/' . $width . '/' . $height . '/'. dirname($image);
        $basename = basename($image);
        if (!file_exists($dirname)) {
            mkdir($dirname, 0777, true);
        }
        $fullPath = $dirname . '/' . $basename;
        // $img->save($fullPath, '80');
        return $img->response(null, 80);
    }

    // public function resizeW640 ($image) {
    //     $width =  640;
    //     $height = null;
    //         $img = Image::make($image);
    //         $img->resize($width, $height, function ($constraint) {
    //             $constraint->aspectRatio();
    //         });
    //         $dirname = 'w640/'. dirname($image);
    //         $basename = basename($image);
    //         if (!file_exists($dirname)) {
    //             mkdir($dirname, 0777, true);
    //         }
    //         $fullPath = $dirname . '/' . $basename;
    //         $img->save($fullPath, '80');
    //         return $img->response(null, 80);
    // }
    // public function resizeH200 ($image) {
    //     $width =  null;
    //     $height = 200;
    //         $img = Image::make($image);
    //         $img->resize($width, $height, function ($constraint) {
    //             $constraint->aspectRatio();
    //         });
    //         $dirname = 'h200/'. dirname($image);
    //         $basename = basename($image);
    //         if (!file_exists($dirname)) {
    //             mkdir($dirname, 0777, true);
    //         }
    //         $fullPath = $dirname . '/' . $basename;
    //         $img->save($fullPath, '80');
    //         return $img->response(null, 80);
    // }
    //
    // public function download () {
    //     $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    //     $origin_link = str_replace( 'https://dubaotiente.xyz/', 'https://static.dubaotiente.com/', "$actual_link");
    //     $origin_link = str_replace( 'http://dubaotiente.xyz/', 'https://static.dubaotiente.com/', "$origin_link");
    //     $origin_link = preg_replace("/\?(.*)/", "", $origin_link);
    //     // print_r($actual_link);
    //     // print_r($origin_link);
    //     // print_r(( $_SERVER['REQUEST_URI'] ));
    //     $array = (explode("/", $_SERVER['REQUEST_URI']));
    //     unset($array[count($array) - 1]);
    //     $path = join("/", $array);
    //     $path = ltrim( $path, "/");
    //     echo ("mkdir -p '$path'");
    //     echo exec("mkdir -p '$path'");
    //     chdir($path);
    //     echo getcwd() . "\n";
    //     echo exec("wget '$origin_link'");
    // }
    //
    // public function downloadPostImage () {
    //     $posts = \App\Models\Post::all();
    //     foreach ($posts as $key => $post) {
    //         if ($post->content) {
    //             $doc = new \DOMDocument();
    //             libxml_use_internal_errors(true);
    //             $doc->loadHTML($post->content);
    //             libxml_clear_errors();
    //             $imageTags = $doc->getElementsByTagName('img');
    //
    //             foreach($imageTags as $tag) {
    //                 echo 'curl --silent --output /dev/null https://dubaotiente.xyz/' .  $tag->getAttribute('src') . "\n";
    //                 echo 'curl --silent --output /dev/null https://dubaotiente.xyz/' .  $tag->getAttribute('data-original')  . "\n";
    //                 // die;
    //             }
    //         }
    //
    //     }
    // }
}
