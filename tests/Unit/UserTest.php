<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\ModelTestCase;

class UserTest extends ModelTestCase
{
    public function testModelConfiguration()
    {
        $this->runConfigurationAssertions(new User(), [
            //fillable
            'uuid', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'
        ], [
            //hidden
        ], [
            '*'
        ], [
            //visible
            'id','uuid','name','email'
        ]);
    }
}
