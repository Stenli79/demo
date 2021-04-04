<?php

namespace Tests\Unit;

use App\Models\Grid;
use App\Models\Link;
use Tests\ModelTestCase;

class GridTest extends ModelTestCase
{
    public function testModelConfiguration()
    {
        $this->runConfigurationAssertions(new Grid(), [
            'link_id', 'created_at', 'updated_at'
        ]);
    }

    public function testGridRelation()
    {
        $grid = new Grid();
        $link = $grid->links();
        $this->assertBelongsToRelation($link, $grid, new Link(), 'link_id');
    }
}
