@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NIK">NIK:</label>
            <input type="text" id="NIK" name="NIK" class="form-control" value="{{ $customer->NIK }}" required>
        </div>
        <div class="form-group">
            <label for="nama_customer">Nama:</label>
            <input type="text" id="nama_customer" name="nama_customer" class="form-control" value="{{ $customer->nama_customer }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $customer->email }}" required>
        </div>
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" class="form-control" value="{{ $customer->country }}" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
