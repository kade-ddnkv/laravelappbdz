<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Basket
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket query()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUserId($value)
 * @mixin \Eloquent
 */
class Basket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'baskets_products')->withPivot('quantity');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
