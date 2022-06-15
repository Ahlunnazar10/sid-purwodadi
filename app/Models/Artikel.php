<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Artikel extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    protected $with = ['author', 'kategori'];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['cari'] ?? false, function($query, $cari) {
            return $query->where('title', 'like', '%' . $cari . '%')
                         ->orWhere('body', 'like', '%' . $cari . '%');
        });
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class); 
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
