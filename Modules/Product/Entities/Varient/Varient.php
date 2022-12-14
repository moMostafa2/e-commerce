<?php

namespace Modules\Product\Entities\Varient;

use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product\Product;
use Modules\Product\Entities\Attribute\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Varient extends Model
{
    use HasFactory;

    protected $fillable = ['quantity' , 'price' , 'sku' , 'product_id'];

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\Varient\VarientFactory::new();
    }

    public function isInStore()
    {
        return $this->quantity > 0 ? true : false;

    }

    public function hasQuantity($quantity)
    {
        return $this->quantity >= $quantity  ? true : false;

    }

    /**
     * The roles that belong to the Attribute
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class, 'attribute_varient',  'varient_id' , 'attribute_id')->withPivot('value');
    }


    /**
     * Get the user that owns the Varient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }



}
