<?php

namespace App\Models;

use App\Models\Traits\TrainingLogic;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $user_id
 * @property integer $training_menu_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $set_count
 * @property integer $actual_count
 * @property integer $actual_time_ms
 * @property boolean $success_flag
 * @property TrainingMenu $trainingMenu
 * @property User $user
 */
class Training extends Model
{
    use TrainingLogic;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'training_menu_id',
        'created_at',
        'updated_at',
        'set_count',
        'actual_count',
        'actual_time_ms',
        'success_flag',
    ];

    protected $visible = [
        'id',
        'user_id',
        'training_menu_id',
        'created_at',
        'updated_at',
        'set_count',
        'actual_count',
        'actual_time_ms',
        'success_flag',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trainingMenu()
    {
        return $this->belongsTo('App\Models\TrainingMenu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
