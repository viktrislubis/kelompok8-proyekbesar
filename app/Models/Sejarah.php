<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    use HasFactory;

    protected $table = 'sejarah'; // Nama tabel di database
    protected $fillable = ['sejarah']; // Kolom yang bisa diisi
}
