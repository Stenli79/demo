<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

/**
 * @property integer $id
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 */
class User extends Authenticatable
{
    use Notifiable, HasUUID;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var string[]
     */
    protected $visible = ['id','uuid','name','email'];

    /**
     * @var array
     */
    protected $fillable = ['uuid', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];

    /**
     * Get user by email
     *
     * @param string $email
     *
     * @return User
     */
    public function getUserByEmail( string $email )
    {
        return $this->where('email', $email)->first();
    }
}
