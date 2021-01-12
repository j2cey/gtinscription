<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use App\Traits\Image\HasImageFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Participant
 * @package App\Models
 *
 * @property integer $id
 * @property string $uuid
 * @property bool $is_default
 * @property string $tags
 * @property integer|null $status_id
 *
 * @property string $nom
 * @property string $occupation
 * @property string $email
 * @property string $phone
 * @property string $fichier
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Participant extends BaseModel
{
    use HasFactory, HasImageFile;
    protected $guarded = [];

    #region Validation Rules

    public static function defaultRules() {
        return [

        ];
    }
    public static function createRules() {
        return array_merge(self::defaultRules(), [

        ]);
    }
    public static function updateRules($model) {
        return array_merge(self::defaultRules(), [

        ]);
    }

    #endregion
}
