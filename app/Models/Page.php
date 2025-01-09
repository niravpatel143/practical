<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['slug', 'title', 'content', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(Page::class);
    }

    public function children()
    {
        return $this->hasMany(Page::class, 'parent_id');
    }
}

