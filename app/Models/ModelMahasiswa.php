<?php

namespace App\Models;

use App\Models\Mahasiswa; 
use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'mhsnobp';
    protected $allowedFields    = [
        'mhsnobp','mhsnama','mhsalamat','prodinama','mhstgllhr'
    ];
}
