<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Models\Product;

class ProductController extends Controller

{
    public function show(Product $product){
        SEOMeta::setTitle("Mushugranel | " . $product->name);
        return view('products.show', compact('product'));

    }

}
