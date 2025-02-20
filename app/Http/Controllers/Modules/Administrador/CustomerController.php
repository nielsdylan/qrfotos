<?php

namespace App\Http\Controllers\Modules\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    //
    public function lista(){
        return view('modules.administrador.customer.lista', get_defined_vars());
    }
    public function listar(){
        $data     = Customer::get();
        //$tipo_cambio = TipoCambio::orderBy('name', 'desc')->first();
        return DataTables::of($data)
            ->addColumn('accion', function ($data) {
                return
                '<div class="flex align-items-center list-user-action" >
                    <a href="#" class="btn btn-outline-info btn-icon btn-sm ver"  data-id="' . $data->id . '" ><i class="fa fa-eye"></i></a>
                    <a href="#" class="btn btn-outline-warning btn-icon btn-sm editar"  data-id="' . $data->id . '" ><i class="bx bx-edit-alt"></i>
                    </a>
                    <a href="#" class="btn btn-outline-danger btn-icon btn-sm eliminar"  data-id="' . $data->id . '" ><i class="fa fa-trash"></i>
                    </a>

                </div>';
        })->rawColumns(['accion'])->make(true);
    }
    public function guardar(Request $request){
        $user = User::firstOrNew([
            'email' => $request->email
        ]);
        $user->name = $request->apellidos . ' ' . $request->nombres;
        $user->email = $request->email;
        $user->password = Hash::make($request->password) ;
        $user->save();

        $customer = Customer::firstOrNew(
            ['user_id' => $user->id],
            ['estado' => 1],
        );
        $customer->numero_documento = $request->numero_documento;
        $customer->nombres = $request->nombres;
        $customer->apellidos = $request->apellidos;
        $customer->email = $request->email;
        $customer->user_id = $user->id;
        $customer->save();

        return response()->json([
            "titulo"=>"Éxito",
            "mensaje"=>"Se registor con éxito",
            "icon"=>"success",
        ],200);
    }
}
