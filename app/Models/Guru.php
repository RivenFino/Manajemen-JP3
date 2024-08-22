<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = ['nip', 'nama'];

    /**
     * Relasi ke model Riwayat
     * Seorang Guru bisa memiliki banyak Riwayat
     */
    public function riwayat()
    {
        return $this->hasMany(Riwayat::class, 'id_guru');
    }
}
