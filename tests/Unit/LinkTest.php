<?php

namespace Tests\Unit;

use App\Models\Grid;
use App\Models\Link;
use Tests\ModelTestCase;

class LinkTest extends ModelTestCase
{
    public function testModelConfiguration()
    {
        $this->runConfigurationAssertions(new Link(), [
            'color', 'title', 'link', 'sequence'
        ], [
            //hidden
        ], [
            '*'
        ], [
            //visible
            'color','title','link','sequence'
        ]);
    }

    public function testLinkRelation()
    {
        $link = new Link();
        $grids = $link->grids();
        $this->assertHasManyRelation($grids, $link, new Grid());
    }
}
