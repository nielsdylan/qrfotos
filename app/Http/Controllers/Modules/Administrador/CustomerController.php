<?php

namespace App\Http\Controllers\Modules\Administrador;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    //
    public function lista(){
        return view('modules.administrador.customer.lista', get_defined_vars());
    }
    public function listar(){
        $data     = customer::get();
        //$tipo_cambio = TipoCambio::orderBy('name', 'desc')->first();
        return DataTables::of($data)
            ->addColumn('accion', function ($data) {
                return
                '<div class="flex align-items-center list-user-action" >
                    <a href="#" class="btn btn-default btn-icon btn-sm ver"  data-id="' . $data->id . '" ><i class="fa fa-eye"></i>
                    </a>

                </div>';
        })->rawColumns(['accion'])->make(true);
    }
}
