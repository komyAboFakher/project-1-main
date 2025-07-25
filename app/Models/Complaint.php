<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complaint extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'user_id',
        'complaint',
        'category',
        'status',
        'priority',
        'notes'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}