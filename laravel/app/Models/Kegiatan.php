<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'tbl_Kegiatan';
    protected $fillable = [
        'id__kegiatan',
        'nama_kegiatan'
    ];
    protected $primaryKey = 'id_kegiatan';
    public $incrementing = false;
    protected $keyType = 'string';
}