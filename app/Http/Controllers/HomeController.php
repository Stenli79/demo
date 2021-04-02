<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Grid;
use App\Models\Link;
use App\Models\Color;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function debug( Grid $grid )
    {
        $data = array(
            'title' => 'Title',
            'link' => 'link',
            'color' => 'color',
            'sequence' => DB::raw('sequence+1')
        );

        $link = Link::create([
            'title' => $data['title'],
            'link' => $data['link'],
            'color' => $data['color'],
            'sequence' => Link::max('sequence') +1
        ]);

        $mlq = $link->toArray();
        mlq($mlq);
    }

}
