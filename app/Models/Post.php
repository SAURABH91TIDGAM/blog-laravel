<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $gaurded = ['id'];

    protected $fillable = ['title','excerpt','body'];

    protected $with = ['category', 'author'];

    public function getRouteKeyName()
    {
        return 'slug';
    
    }

    public function category()
    {
        //has one , has Many, belongs To, belongs To many
        return $this->belongsTo(Category::class);

    }
    
    public function author(){

        return $this->belongsTo(User::class, 'user_id');
    }
}
