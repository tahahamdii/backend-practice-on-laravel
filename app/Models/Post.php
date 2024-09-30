<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title' , 'description'];

// protected $guarded = ['id'];

protected $guarded = [];
public function Category()
{
    return $this->belongsTo(Category::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}

}
