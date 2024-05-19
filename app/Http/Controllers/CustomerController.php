<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Get all customers
        $customers = customer::all();
        return view('customers.index', compact('customers'));
    }

    public function show($id)
    {
        // Get a single customer
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        // Validate and save a new customer
        $validated = $request->validate([
            'NIK' => 'required|unique:customers',
            'nama_customer' => 'required',
            'email' => 'required|email',
            'country' => 'required',
        ]);

        Customer::create($validated);
        return redirect()->route('customers.index');
    }
    public function destroy($id)
    {
        $customer = customer::findOrFail($id);

        $customer->invoices()->delete();
        $customer->pembayaran()->delete();

        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
