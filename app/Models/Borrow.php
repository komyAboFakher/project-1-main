<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'book_id',
        'borrow_date',
        'due_date',
        'returned_date',
        'status',
        'notes',
    ];

    public function book(){
        return $this->belongsTo(Library::class,'book_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
