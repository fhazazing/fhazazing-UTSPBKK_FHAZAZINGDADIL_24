<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        // Get all invoices
        $invoices = invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function show($id)
    {
        // Get a single invoice
        $invoice = invoice::findOrFail($id);
        return view('invoices.show', compact('invoice'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        // Validate and save a new invoice
        $validated = $request->validate([
            'deskripsi' => 'required',
            'status' => 'required|in:bayar,lunas',
            'besar_dp' => 'required|integer',
            'NIK' => 'required|exists:customers,NIK',
        ]);

        invoice::create($validated);
        return redirect()->route('invoices.index');
    }
}
