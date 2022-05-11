<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "title",
        "content",
        "status"
    ];

    protected $appends = ['slug'];

    public function getSlugAttribute()
    {
        return Str::slug($this->attributes['title']); 
    }

    public function getStatusAttribute()
    {
        return $this->attributes['status'] == 0 ? 'Rascunho' : 'Publicado';
    }

    public function scopeIsPublish($query)
    {
        return $query->where('status', 1);
    }
}
