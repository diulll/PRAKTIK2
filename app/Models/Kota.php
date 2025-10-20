<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';
    protected $primaryKey = 'id';
    protected $fillable = ['propinsi_id', 'nama_kota'];

    public function propinsi()
    {
        return $this->belongsTo(Propinsi::class);
    }
}
