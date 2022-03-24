<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property mixed $body
 */
class Config extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'config';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    protected $casts = [
        'body' => 'array',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'created_at',
        'updated_at',

        'body->voice_version',
        'body->character_image_version',
        'body->app_version',
        'body->calorie_coefficient',
        'body->terms_of_service_id',
        'body->privacy_policy_id',
    ];
}
