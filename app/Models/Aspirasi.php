<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['cari'] ?? false, function($query, $cari) {
            return $query->where('nik', 'like', '%' . $cari . '%');
        });
    }

}
