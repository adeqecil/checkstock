<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use PhpParser\Node\Expr\FuncCall;

class ProductsController extends Controller
{
    public function index () {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function create () {
        return view('addproduct');
    }

    public function edit (Product $products) {
        return view('editproduct', compact('products'));
    }

    public function store (Request $request) {
        $request->validate([
            'productname' => 'required',
            'description' => 'required',
            'purchaseprice' => 'required',
            'sellprice' => 'required',
            'image' => 'required'
        ]);

        Product::create([
            'product' => $request->productname,
            'description' => $request->description,
            'purchase_price' => $request->purchaseprice,
            'sell_price' => $request->sellprice,
            'image' => $request->image
        ]);

        return redirect('product')->with('status', 'Product successfully added!');
    }

    public function destroy (Product $product) {
        Product::destroy($product->id);
        return redirect('product')->with('status', 'Product successfully deleted!');
    }

}
