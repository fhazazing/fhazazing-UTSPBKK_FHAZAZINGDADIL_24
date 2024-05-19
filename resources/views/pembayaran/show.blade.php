@extends('layouts.app')

@section('content')
    <h1>Pembayaran Details</h1>
    <p>Customer: {{ $pembayaran->customer->nama_customer }}</p>
    <p>Tanggal: {{ $pembayaran->tanggal }}</p>
    <p>Metode Bayar: {{ $pembayaran->metode_bayar }}</p>
    <p>Invoice: {{ $pembayaran->invoice->deskripsi }}</p>
    <a href="{{ route('pembayarans.index') }}">Back to Pembayarans</a>
@endsection
