<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


$filter_product = "";

function _setSession($name,$value){
  session()->put($name, $value);
}
function _getSession($name){
  return session()->get($name);
}

function get_default_lang()
{
  return   Config::get('app.locale');
}

function UploadImage($image, $folder)
{
  $filename = time() . rand(0, 100000) . '.' . $image->extension();
  $image->move(public_path($folder), $filename);
  return $filename;
}

function UploadImages($images, $folder)
{
  foreach ($images as $image) {
    $imagesNames[] = UploadImage($image,$folder);
  }
  $imagesField = implode(',', $imagesNames);
  return $imagesField;
}


function ParentCategories()
{
  return Category::where('parent_id', null)->get();
}
function Categories()
{
  return Category::get();
}

function SubCategories()
{
  return Category::where('parent_id', "!=", null)->get();
}

function SubCatsOfCat($parent_id)
{
  return Category::where('parent_id', $parent_id)->get();
}
