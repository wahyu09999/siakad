<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent
use App\Models\Mahasiswa;

class Mahasiswa extends Model //Definisi Model
{
//  protected $table='mahasiswa'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
//  protected $primaryKey = 'id_mahasiswa'; // Memanggil isi DB Dengan primarykey


    protected $table='mahasiswa';  //eloquent akan membuat model mahasiswa menyimpan record di table mahasiswa
    protected $primaryKey = 'nim'; //memanggil isi db denga promary key


    protected $fillable = [
    'nim',
    'nama',
    'kelas_id',
    'jurusan',
    
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
};



//  protected $fillable = [
//  'Nim',
//  'Nama',
//  'Kelas',
//  'Jurusan',
//  'jeniskelamin',
//  'email',
//  'alamat',
//  'tgllahir',
//  ];

