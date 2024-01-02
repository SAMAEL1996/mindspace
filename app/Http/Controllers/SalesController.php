<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index() {

    }
    
    public function create() {
        $items = \App\Models\Item::all();

        return view('sales', compact('items'));
    }

    public function store() {
        if(!request()->has('items') || !request('date')) {
            return redirect()->back();
        }

        $items = request('items');
        $date = request('date');

        foreach($items as $key => $value) {
            $item = \App\Models\Item::find($key);
            $total = count($value) * (int)$item->amount;

            $sale = new \App\Models\Sale;
            $sale->date = request('date');
            $sale->item_id = $key;
            $sale->qty = count($value);
            $sale->total = $total;
            $sale->save();
        }

        return redirect()->route('sales.index');
    }
}
