<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $table = 'riwayat';
    protected $fillable = ['id_guru', 'id_mapel', 'type', 'kelas', 'rombel', 'alokasi_jp', 'total_jp'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    /**
     * Relasi ke model MataPelajaran
     */
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mapel');
    }
}
