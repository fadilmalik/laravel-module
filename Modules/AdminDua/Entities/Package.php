<?php

namespace Modules\AdminDua\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Entities\Bussiness;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'bisnis_id', 'nama_paket', 'harga'
    ];
    
    protected static function newFactory()
    {
        return \Modules\AdminDua\Database\factories\PackageFactory::new();
    }

    public function bussiness()
    {
        return $this->belongsTo(Bussiness::class, 'bisnis_id', 'id');
    }
}
