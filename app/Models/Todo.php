<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controllers\TodoController;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'completed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
