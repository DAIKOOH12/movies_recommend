<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistMovies extends Model
{
    use HasFactory;

    protected $table = "wishlists_movies";

    protected $primaryKey = ['wishlist_id', 'movie_id'];

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'wishlist_id',
        'movie_id',
    ];

    public function wishlist(){
        return $this->belongsTo(Wishlist::class,'wishlist_id','wishlist_id');
    }
}
