<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $table = 'participants';
    public $timestamps = false;
    protected $fillable = ['nim', 'nama', 'prestasi', 'keterangan', 'gambar'];
}
