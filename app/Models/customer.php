<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = ['NIK', 'nama_customer', 'email', 'country'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'NIK', 'NIK');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
