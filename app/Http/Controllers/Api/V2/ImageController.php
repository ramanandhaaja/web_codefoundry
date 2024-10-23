<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    function index(){
        return '[{"imagePath":"something.jpg"}]';
    }
}
