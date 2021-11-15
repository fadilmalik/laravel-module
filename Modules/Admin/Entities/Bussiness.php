<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bussiness extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bisnis', 'alamat'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\BussinessFactory::new();
    }
}
