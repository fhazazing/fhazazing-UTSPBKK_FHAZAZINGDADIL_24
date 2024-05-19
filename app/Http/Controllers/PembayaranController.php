<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        // Get all pembayaran
        $pembayarans = pembayaran::all();
        return view('pembayarans.index', compact('pembayarans'));
    }

    public function show($id)
    {
        // Get a single pembayaran
        $pembayaran = pembayaran::findOrFail($id);
        return view('pembayarans.show', compact('pembayaran'));
    }

    public function create()
    {
        return view('pembayarans.create');
    }

    public function store(Request $request)
    {
        // Validate and save a new pembayaran
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'tanggal' => 'required|date',
            'metode_bayar' => 'required|in:cash,transfer',
            'invoice_id' => 'required|exists:invoice,id',
        ]);

        pembayaran::create($validated);
        return redirect()->route('pembayarans.index');
    }
}
