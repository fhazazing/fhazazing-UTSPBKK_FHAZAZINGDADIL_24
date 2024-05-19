@extends('layouts.app')

@section('content')
    <h1>Customer Details</h1>
    <p>NIK: {{ $customer->NIK }}</p>
    <p>Nama: {{ $customer->nama_customer }}</p>
    <p>Email: {{ $customer->email }}</p>
    <p>Country: {{ $customer->country }}</p>
    <a href="{{ route('customers.index') }}">Back to Customers</a>
@endsection
