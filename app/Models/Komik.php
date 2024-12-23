<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = 'comics';
    protected $primaryKey = 'id';
    protected $fillable = ['title','author','publisher','description','cover_image','category_id','status'];
    protected $inputType = [
        'title' => 'text',
        'author' => 'text',
        'publisher' => 'text',
        'description' => 'textarea',
        'cover_image' => 'file',
        'category_id' => 'select',
        'status' => 'select'
    ];

    public function chapters()
    {
        return $this->hasMany(Chapters::class, 'comic_id', 'id');
    }

    public function fetchLastTwoChapters()
    {
        return $this->chapters()
            ->orderBy('chapter_number', 'desc')
            ->take(2)
            ->get();
    }
}
