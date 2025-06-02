<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function index(){
        $financials = Financial::all();
        return view('financial.index', compact('financials'));
    }

    public function create(){
        return view('financial.form');// creating new upload of GO's
    }

    public function store(Request $request)
    {
        $request->validate([
           'date' => 'required|date',
           'yojna_name' => 'required',
           'section'=>'required',
           'GO_number' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
        ]);

        Financial::create($request->all());
        return redirect()->route('financial.index')->with('success', 'FinancialController Order created successfully.');
    }

    public function show(Financial $financials)
    {
        return view('financial.show', compact('financials'));
    }

    public function edit(Financial $financial)
    {
        return view('financial.form', compact('financial'));
    }

    public function update(Request $request, Financial $financial)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'yojna_name' => 'required',
            'section' => 'required',
            'GO_number' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
        ]);

        // Update once with validated data
        $financial->update($validatedData);

        return redirect()->route('financial.index')->with('success', 'Financial Order updated successfully.');
    }

    public function destroy(Financial $financial)
    {
        $financial->delete();
        return redirect()->route('financial.index')->with('success', 'Financial Order deleted successfully.');
    }
}
