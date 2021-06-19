<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;

class Pegawai extends Model
{
    use HasFactory;
    // use Searchable;

    protected $primaryKey = 'p_id';
    
    protected $fillable = ['p_nama','p_nip','p_tplahir','p_alamat','p_tglahir','p_gender','p_golongan','p_eselon','p_jabatan','p_tptugas','p_agama','p_ukerja','p_nohp','p_npwp'];

    // public function searchableAs()
    // {
    //     return 'pegawais_index';
    // }
}
