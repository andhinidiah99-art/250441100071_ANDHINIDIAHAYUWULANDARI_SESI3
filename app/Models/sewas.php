<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]

class kendaraan extends sewa
    {
        use HasFactory;
        protected $fillable=[
            'sewa_id','kendaraan_id', 'nama_penyewa', 'tanggal_mulai','lama_sewa', 'total_biaya', 'status', 'creat_at, update_at',        ];
    }


