@extends('layouts.app')

@section('content')
    <h1>Add New Customer</h1>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="NIK">NIK:</label>
            <input type="text" id="NIK" name="NIK" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_customer">Nama:</label>
            <input type="text" id="nama_customer" name="nama_customer" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
