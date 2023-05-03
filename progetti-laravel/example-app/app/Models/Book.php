<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'num_pages', 'abstract', 'editor_id', 'author_id'
    ];

    public function editor()
    {
        return $this->belongsTo(Editor::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
