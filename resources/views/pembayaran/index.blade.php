@extends('layouts.app')

@section('content')
    <h1>Pembayarans</h1>
    <a href="{{ route('pembayarans.create') }}">Add New Pembayaran</a>
    <ul>
        @foreach ($pembayarans as $pembayaran)
            <li>
                <a href="{{ route('pembayarans.show', $pembayaran->id) }}">
                    {{ $pembayaran->tanggal }} - {{ $pembayaran->metode_bayar }}
                </a>
                <a href="{{ route('pembayarans.edit', $pembayaran->id) }}">Edit</a>
                <form action="{{ route('pembayarans.destroy', $pembayaran->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
