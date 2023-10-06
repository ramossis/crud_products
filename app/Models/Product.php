<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable=[
       'category_id',
       'store_id',
       'name',
       'slug',
       'price',
       'description'
    ];
    protected $guarded=[
        'id','created_at','updated_at'
    ];

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function store(){
        return $this->belongsTo(Store::class,'store_id');
    }

}

