<?php

namespace App\Models;

use App\Models\Traits\TermsOfServiceLogic;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $effective_time
 * @property string $body
 */
class TermsOfService extends Model
{
    use TermsOfServiceLogic;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'effective_time', 'body'];
}
