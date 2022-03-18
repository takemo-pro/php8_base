<?php

namespace App\Models;

use App\Models\Traits\TrainingMenuLogic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property integer $product_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property string $description
 * @property Product $product
 */
class TrainingMenu extends Model
{
    use TrainingMenuLogic;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'created_at', 'updated_at', 'name', 'description'];

    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
