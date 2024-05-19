@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="NIK">NIK:</label>
        <input type="text" id="NIK" name="NIK" value="{{ $customer->NIK }}" required>
        <label for="nama_customer">Nama:</label>
        <input type="text" id="nama_customer" name="nama_customer" value="{{ $customer->nama_customer }}" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $customer->email }}" required>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="{{ $customer->country }}" required>
        <button type="submit">Save</button>
    </form>
@endsection
