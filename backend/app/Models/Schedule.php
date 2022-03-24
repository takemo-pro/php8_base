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
 * @property integer $set_count
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
    protected $fillable = [
        'user_id',
        'training_menu_id',
        'created_at',
        'updated_at',
        'reserve_time',
        'set_count',
    ];

    protected $visible = [
        'id',
        'user_id',
        'training_menu_id',
        'set_count',
        'created_at',
        'updated_at'
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
