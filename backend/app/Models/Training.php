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
 * @property integer $set_number
 * @property integer $actual_number
 * @property integer $set_time_sec
 * @property float $actual_time_sec
 * @property boolean $success_flag
 * @property string $training_type
 * @property string $played_at
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
    protected $fillable = ['user_id', 'training_menu_id', 'created_at', 'updated_at', 'set_number', 'actual_number', 'set_time_sec', 'actual_time_sec', 'success_flag', 'training_type', 'played_at'];

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
