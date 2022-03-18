<?php

namespace App\Models;

use App\Models\Traits\AppVersionLogic;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $version
 * @property boolean $required_flag
 */
class AppVersion extends Model
{
    use AppVersionLogic;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'version', 'required_flag'];

}
