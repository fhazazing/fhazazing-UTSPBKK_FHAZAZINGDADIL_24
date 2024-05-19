@extends('layouts.app')

@section('content')
    <h1>Add New Customer</h1>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <label for="NIK">NIK:</label>
        <input type="text" id="NIK" name="NIK" required>
        <label for="nama_customer">Nama:</label>
        <input type="text" id="nama_customer" name="nama_customer" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required>
        <button type="submit">Save</button>
    </form>
@endsection
