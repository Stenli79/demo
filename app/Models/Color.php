<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string $created_at
 * @property string $updated_at
 */
class Color extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'colors';

    /**
     * @var array
     */
    protected $fillable = ['title', 'color_hex', 'created_at', 'updated_at'];
}
