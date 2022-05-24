<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'posts';
    protected $fillable =[
        'judul',
        'category_id',
        'content',
        'slug',
        'gambar',
        'users_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
