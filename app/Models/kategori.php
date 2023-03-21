<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function barangs()
    {
        return $this->hasMany(barangs::class);
    }
}
