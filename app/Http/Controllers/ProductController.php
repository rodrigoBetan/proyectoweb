<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Categori;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 

     

     public function __construct()
     {
        $this->middleware('auth');
        $this->middleware('can:ver producto index')->only('index');
        $this->middleware('can:crear producto')->only('create','store');
        $this->middleware('can:products.edit')->only('edit','update');
        $this->middleware('can:products.destroy')->only('destroy');
        
         }

    public function index()
    {
      

        $products = Product::paginate(10);

        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
/*
        $categorias = Categori::orderBy('id', 'DESC')
        ->select('id', 'nombre')
        ->get();

     return view('product.create', compact('product','categori'));

    */
    $categoria = Categori::query()->pluck('nombre', 'id')->all();
       $product = new Product();
        return view('product.create', compact('product','categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

            $request->validate([
                'nombre'=>'Required',
                'imagen'=>'Required|image|mimes:jpeg,png,jpg,git|max:2048',
                'descripcion'=>'Required',
                'precio'=>'Required',
                'sctock'=>'Required',
               
               

            ]);
    
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombreImagen = time().'.'.$imagen->getClientOriginalExtension();
                $imagen->move(public_path('img'), $nombreImagen);
            }
          $product = new Product();
          $product->nombre = $request->nombre;
          $product->descripcion = $request->descripcion;
          $product->precio = $request->precio;
          $product->sctock = $request->sctock;
          $product->imagen = $nombreImagen;
          $product->id_Categoria = $request->categoria;
          $product->save();

          return redirect()->route('products.index')
          ->with('success', 'Product created successfully.');

    
        $imagen->move('img/',$nombreImagen);
     
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
      public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

       /* $categoria = Categori::query()->pluck('nombre', 'id')->all();*/
      
         

        return view('product.edit', compact('product','categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate(Product::$rules);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
