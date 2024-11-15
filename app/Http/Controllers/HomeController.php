<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Pedido;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalproductos=count(Product::all());
        $totalpedidos=count(Pedido::all());
        $totalTOTAL=count(Pedido ::all());
        $totalCategoria=count(Categori::all());
        $totalVentas = Pedido::sum('Total');


        return view('home',compact(['totalproductos','totalpedidos','totalCategoria','totalVentas']));
    }
}
