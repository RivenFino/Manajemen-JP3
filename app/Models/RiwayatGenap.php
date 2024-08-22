<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatGenap extends Model
{
    use HasFactory;
    protected $table = 'riwayatgenap';
    protected $fillable = ['id_guru', 'id_mapel', 'type', 'kelas', 'rombel', 'alokasi_jp', 'total_jp'];

    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    /**
     * Relasi ke model MataPelajaran
     */
    public function mataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mapel');
    }
}
