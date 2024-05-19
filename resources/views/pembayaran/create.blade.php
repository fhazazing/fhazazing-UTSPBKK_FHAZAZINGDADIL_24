@extends('layouts.app')

@section('content')
    <h1>Add New Pembayaran</h1>

    <form action="{{ route('pembayarans.store') }}" method="POST">
        @csrf
        <label for="customer_id">Customer:</label>
        <select id="customer_id" name="customer_id" required>
            @foreach ($customer as $customers)
                <option value="{{ $customer->id }}">{{ $customer->nama_customer }}</option>
            @endforeach
        </select>
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required>
        <label for="metode_bayar">Metode Bayar:</label>
        <select id="metode_bayar" name="metode_bayar" required>
            <option value="cash">Cash</option>
            <option value="transfer">Transfer</option>
        </select>
        <label for="invoice_id">Invoice:</label>
        <select id="invoice_id" name="invoice_id" required>
            @foreach ($invoices as $invoice)
                <option value="{{ $invoice->id }}">{{ $invoice->deskripsi }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>
@endsection
