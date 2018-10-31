<?php

namespace App\Http\Controllers;

use App\Product;

class SearchController extends Controller
{
    public function index()
    {
        // Split the terms by word.
        $terms = explode(" ", request('q'));

        $products = Product::query()
            ->where(function ($query) use ($terms) {
                foreach ($terms as $term) {
                    $query->where('name', 'like', '%' . $term . '%');
                }
            })
            ->get();

        //$cities = $privileges->cities->groupBy('name');

        return view('user.products.search', compact('products'));
    }
}
