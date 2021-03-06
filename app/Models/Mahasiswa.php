<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MataKuliah;

class Mahasiswa extends Model
{
    //use HasFactory;
    protected $table='mahasiswa'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jurusan',
        'foto',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    // public function matakuliah()
    // {
    //     return $this->belongsToMany(Matakuliah::class, 'mahasiswa_matakuliah', 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    // }

    public function matakuliah()
    {
        return $this->hasMany(Matakuliah::class);
    }

    // 'JenisKelamin',
    // 'Email',
    // 'Alamat',
    // 'TanggalLahir',
}
