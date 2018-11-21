<?php

namespace App\Http\Controllers;

use App\OrderHistory;

class OrderHistoryController extends Controller
{
    public function index()
    {
        $user = \Auth::user();

        $histories = OrderHistory::where('user_id', $user->id)->get();

        return view('user.orders.index', compact('histories'));
    }

    public function store()
    {
        $store = \Cart::getContent();
        $user = \Auth::user();

        OrderHistory::create([
            'user_id' => $user->id,
            'cart_data' => $store,
            'total' => \Cart::getSubTotal(),
        ]);

        return redirect(route('orderHistory.index'))->with('success', 'Order place successfully!');
    }

    public function show(OrderHistory $orderHistory)
    {
        return view('user.orders.show', compact('orderHistory'));
    }
}
