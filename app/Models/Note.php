<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'urgency', 'impact', 'description', 'tags', 'deadline_at', 'is_done', 'location', 'user_id'];

    //Relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
