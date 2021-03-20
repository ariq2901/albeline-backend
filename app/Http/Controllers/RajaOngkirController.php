<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostRequest;
use ariqjusuf\proxyrajaongkir\RajaOngkir;
use Illuminate\Http\Request;

class RajaOngkirController extends Controller
{
    public function getKota()
    {
        $data = RajaOngkir::Kota()->all();

        return response()->json(["cities" => $data]);
    }

    public function getCost(CostRequest $request)
    {
        $input = $request->validated();

        $data = RajaOngkir::Cost($input)->get();

        return response()->json(["result" => $data]);
    }
}
