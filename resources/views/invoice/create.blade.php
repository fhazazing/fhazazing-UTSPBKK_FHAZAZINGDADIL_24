@extends('layouts.app')

@section('content')
    <h1>Add New Customer</h1>

    <form action="{{ route('invoice.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <input type="text" id="deskripsi" name="deskripsi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="besar_dp">Uang Panjar:</label>
            <input type="text" id="besar_dp" name="besar_dp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="NIK">NIK:</label>
            <input type="text" id="NIK" name="NIK" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
@endsection
