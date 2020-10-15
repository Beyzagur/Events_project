<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo','category', 'name', 'date','time','city','place','price','is_approve','created_by', 'updated_by', 'deleted_by'
    ];

    public function user()
    {
        return $this->hasMany('App\User','id','created_by');
    }
}
