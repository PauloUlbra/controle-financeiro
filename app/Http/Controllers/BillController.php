<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        $bills = Bill::all();
        return view('bills.index', compact('bills'));
    }

    public function create()
    {
        return view('bills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'amount' => 'required',
            'expiration_date' => 'required'
        ]);

        $bill = new Bill();
        $bill->description = $request->description;
        $bill->amount = $request->amount;
        $bill->expiration_date = $request->expiration_date;
        $bill->is_paid = false;
        $bill->save();
        return redirect('bills')->with('success', 'Bill added successfully');
    }

    public function edit($id)
    {
        $bills = Bill::findOrFail($id);
        return view('bills.edit', compact('bills'));
    }

    public function update(Request $request, $id)
    {
        $bill = Bill::findOrFail($id);
        $bill->update($request->all());
        return redirect('bills')->with('success', 'Bill updated successfully.');
    }

    public function destroy($id)
    {
        $bill = Bill::findOrFail($id);
        $bill->delete();
        return redirect('bills')->with('success', 'Bill deleted successfully.');
    }
}
