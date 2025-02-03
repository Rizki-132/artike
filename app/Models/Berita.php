<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar', 
        'judul',
        'slug', 
        'kategori_id', 
        'desk_singkat', 
        'desk_detail',
    ];

    // untuk merubah judul menjadi slug
    protected static function boot(): void
    {
        parent::boot();
        static::creating(function (Berita $berita) {
            $berita->slug = static::generateUniqueSlug($berita->judul);
        });
    }

    public static function generateUniqueSlug(string $judul): string
    {
        $slug = Str::slug($judul);
        $count = static::where('slug', 'like', "{$slug}%")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }

    // untuk relasi
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
