<?php

namespace App\Models;

use App\Models\Traits\ScheduleLogic;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $user_id
 * @property integer $training_menu_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $reserve_time
 * @property string $training_type
 * @property integer $set_number
 * @property integer $set_time_sec
 * @property TrainingMenu $trainingMenu
 * @property User $user
 */
class Schedule extends Model
{
    use ScheduleLogic;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'training_menu_id', 'created_at', 'updated_at', 'reserve_time', 'training_type', 'set_number', 'set_time_sec'];

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
