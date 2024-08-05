@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Anggota</h1>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="NIK" class="form-label">NIK:</label>
            <input type="text" class="form-control" id="NIK" name="NIK" required>
        </div>
        <div class="mb-3">
            <label for="nama_customer" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama_customer" name="nama_customer" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country:</label>
            <textarea class="form-control" id="country" name="country" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
    <!-- <h1>Add New Customer</h1>

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
    </form> -->
@endsection
