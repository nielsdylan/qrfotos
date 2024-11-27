<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function nuevo(){
        return view('modules.gallery.nuevo');
    }
}
