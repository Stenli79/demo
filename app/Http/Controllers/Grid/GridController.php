<?php

namespace App\Http\Controllers\Grid;

use App\Http\Requests\GridCreateRequest;
use App\Http\Requests\GridUpdateRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\GridActionRequest;
use App\Models\Color;
use App\Models\Grid;
use App\Models\Link;

class GridController extends Controller
{
    /**
     * @var Link $gridModel
     */
    private $gridModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct( Grid $gridModel )
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->gridModel = $gridModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $gridItems = $this->gridModel->with('links')->get();

        return view('grid.index', ['grid_items' => $gridItems]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function edit( GridActionRequest $request )
    {
        $validated = $request->validated();

        $colors = Color::all();
        $links = Link::all();

        return view('grid.edit', [
            'slot_position' => $validated['id'],
            'colors' => $colors,
            'links'=> $links
        ]);
    }

    /**
     * @param int $id
     * @param GridCreateRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create( int $id, GridCreateRequest $request )
    {
        $this->gridModel->createSlot( $id, $request->validated() );

        return redirect()->route('home')->withSuccess('Slot has been updated successfully');
    }

    /**
     * @param GridUpdateRequest $request
     * @param Link $link
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( GridUpdateRequest $request, Link $link )
    {
        $validated = $request->validated();
        $linkRecord = $link->getLinkById($validated['link_id']);

        $this->gridModel->updateSlot( $validated['id'], $linkRecord );

        return redirect()->route('home')->withSuccess('Slot has been updated successfully');
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function clear( int $id )
    {
        $this->gridModel->clearSlot( $id );

        return redirect()->route('home')->withSuccess('Slot has been cleared successfully');
    }
}
