<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nama', 'user_id', 'alamat', 'nomor_telepon', 'tanggal_bergabung', 'status_keanggotaan'];

    Public function profile(){
        return $this->belongsTo('App\Model\User');
    }
}


