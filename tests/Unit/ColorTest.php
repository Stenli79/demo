<?php

namespace Tests\Unit;

use App\Models\Color;
use Tests\ModelTestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ColorTest extends ModelTestCase
{
    use RefreshDatabase;

    public function testModelConfiguration()
    {
        $this->runConfigurationAssertions(new Color(), [
            //fillable
            'title', 'color_hex', 'created_at', 'updated_at'
        ]);
    }
}
