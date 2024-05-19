@extends('layouts.app')

@section('content')
    <h1>Edit Pembayaran</h1>

    <form action="{{ route('pembayarans.update', $pembayaran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="customer_id">Customer:</label>
        <select id="customer_id" name="customer_id" required>
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}" @if ($pembayaran->customer_id == $customer->id) selected @endif>{{ $customer->nama_customer }}</option>
            @endforeach
        </select>
        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" value="{{ $pembayaran->tanggal }}" required>
        <label for="metode_bayar">Metode Bayar:</label>
        <select id="metode_bayar" name="metode_bayar" required>
            <option value="cash" @if ($pembayaran->metode_bayar == 'cash') selected @endif>Cash</option>
            <option value="transfer" @if ($pembayaran->metode_bayar == 'transfer') selected @endif>Transfer</option>
        </select>
        <label for="invoice_id">Invoice:</label>
        <select id="invoice_id" name="invoice_id" required>
            @foreach ($invoices as $invoice)
                <option value="{{ $invoice->id }}" @if ($pembayaran->invoice_id == $invoice->id) selected @endif>{{ $invoice->deskripsi }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>
@endsection
