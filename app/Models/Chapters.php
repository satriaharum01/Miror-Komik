<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Chapters extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = 'chapters';
    protected $primaryKey = 'id';
    protected $fillable = ['comic_id','title','chapter_number','content'];
    protected $inputType = [
        'comic_id' => 'select',
        'title' => 'text',
        'chapter_number' => 'number',
        'content' => 'textarea'
    ];

    public function getFormattedCreatedAtAttribute()
    {
        $createdAt = Carbon::parse($this->created_at);
        $now = Carbon::now();

        if ($createdAt->diffInHours($now) < 24) {
            return $createdAt->diffForHumans();
        } elseif ($createdAt->diffInDays($now) <= 3) {
            return round($createdAt->diffInDays($now), 0) . ' hari lalu';
        } else {
            return $createdAt->format('F d, Y');
        }
    }
}
