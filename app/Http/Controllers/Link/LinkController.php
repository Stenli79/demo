<?php

namespace App\Http\Controllers\Link;

use App\Http\Controllers\Controller;
use App\Http\Requests\LinkActionRequest;
use App\Http\Requests\LinkStoreRequest;
use App\Http\Requests\LinkUpdateRequest;
use App\Models\Link;
use App\Models\Color;

class LinkController extends Controller
{
    /**
     * @var int LINKS_PEAR_PAGE
     */
    private const LINKS_PEAR_PAGE = 20;

    /**
     * @var Link $linkModel
     */
    private $linkModel;

    public function __construct( Link $linkModel )
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->linkModel = $linkModel;
    }

    /**
     * Display a listing of the links.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $links  = $this->linkModel->orderBy('sequence')->paginate( self::LINKS_PEAR_PAGE );

        return view('links.index', ['links' => $links]);
    }

    /**
     * Display create form
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $colors = Color::all();
        $sequence = $this->linkModel::getNextSequence();

        return view('links.create', ['colors' => $colors, 'sequence' => $sequence ]);
    }

    /**
     * Create new link
     *
     * @param LinkStoreRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store( LinkStoreRequest $request )
    {
        $this->linkModel->firstOrCreate($request->validated());

        return redirect()->route('link.index')->withSuccess('Record has been created successfully');
    }

    /**
     * Display edit form for given link
     *
     * @param LinkActionRequest $request
     *
     * @return \Illuminate\View\View
     */
    public function edit( LinkActionRequest $request )
    {
        $validated = $request->validated();

        $colors = Color::all();
        $link = $this->linkModel->getLinkById( $validated['id'] );

        return view('links.edit', ['link' => $link, 'colors' => $colors]);
    }

    /**
     * Update data for given link
     *
     * @param int $id
     * @param LinkUpdateRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(int $id, LinkUpdateRequest $request )
    {
        $this->linkModel->updateLink( $id, $request->validated() );

        return redirect()->route('link.edit', ['id'=>$id])->withSuccess('Record has been updated successfully');
    }

    /**
     * Delete link
     *
     * @param LinkActionRequest $request
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy( LinkActionRequest $request )
    {
        $validated = $request->validated();

        $this->linkModel->getLinkById( $validated['id'] )->delete();

        return redirect()->route('link.index', ['page'=> $request->page])->withSuccess('Record has been removed successfully');
    }

    /**
     * Move link one position up
     *
     * @param LinkActionRequest $requests
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function moveUp( LinkActionRequest $request )
    {
        $validated = $request->validated();

        $this->linkModel->moveUp( $validated['id'] );

        return redirect()->route('link.index', ['page'=> $request->page])->withSuccess('Item is moved up');
    }

    /**
     * Move link one position down
     *
     * @param LinkActionRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function moveDown( LinkActionRequest $request )
    {
        $validated = $request->validated();

        $this->linkModel->moveDown( $validated['id'] );

        return redirect()->route('link.index', ['page'=> $request->page])->withSuccess('Item is moved down');
    }
}
