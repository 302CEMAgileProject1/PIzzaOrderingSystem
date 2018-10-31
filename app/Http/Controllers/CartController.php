<?php

namespace App\Http\Controllers;

use \Cart as Cart;
use Illuminate\Http\Request;
use Validator;


class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Cart::getContent();

        return view('user.cart.index', compact('items'));
    }

    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, $request->price, 1);

        return redirect(route('product.index'));
    }

    public function destroy($id)
    {
        Cart::remove($id);

        return redirect(route('cart.index'));
    }
}
