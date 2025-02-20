<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    //
    public function nuevo(){
        return view('modules.gallery.nuevo', get_defined_vars());
    }
    public function guardarFotos(Request $request) {


        $imagenes = $request->fotos;
        // return $imagenes;
        if($imagenes){
            // return $imagenes;
            foreach ($imagenes as $key => $value) {

                $description = '';
                if(array_key_exists($key, $request->descripcion)){
                    $description = $request->descripcion[$key];
                }

                $imageName  = time(). '_' . uniqid().'.' . $value->extension();
                $name       = $value->getClientOriginalName();
                $weight     = $value->getSize();
                $extencion  = $value->extension();
                $path       = 'images/'.Auth::user()->id . '/'.$imageName;
                $value->move(public_path('images/'.Auth::user()->id), $imageName);

                $save = new Image();
                $save->name         = $name;
                $save->description  = $description;
                $save->name_image   = $imageName;
                $save->weight       = $weight;
                $save->path         = $path;
                $save->extension    = $extencion;
                $save->user_id      = Auth::user()->id;
                $save->save();

            }
            return response()->json(["title"=>"Éxito","message"=>"Se guardo con éxito", "type"=>"success"],200);
        }

        return response()->json(["title"=>"Alerta","message"=>"Ingrese por lo menos una imagen", "type"=>"warning"],200);
    }
    public function lista(){
        $images = Image::where('user_id',Auth::user()->id)->paginate(15);
        // return response()->json($images);
        return view('modules.gallery.lista', get_defined_vars());
    }
    public function eliminarFotos(Request $request) {
        $image = Image::find($request->id);
        $image->delete();
        return response()->json($request->all());
    }
}
