<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = "wishlists";

    protected $primaryKey = "wishlist_id";

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = [
        'wishlist_title',
        'wishlits_description',
        'wishlist_state',
        'wishlist_image'
    ];

    public function wishlistMovies()
    {
        return $this->hasMany(WishlistMovies::class, 'wishlist_id', 'wishlist_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
