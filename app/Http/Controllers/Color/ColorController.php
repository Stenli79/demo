<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorStoreRequest;
use App\Http\Requests\ColorUpdateRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * @var int COLORS_PEAR_PAGE
     */
    private const COLORS_PEAR_PAGE = 20;

    /**
     * @var Color $colorModel
     */
    private $colorModel;

    public function __construct( Color $colorModel )
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->colorModel = $colorModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $colors  = $this->colorModel->paginate( self::COLORS_PEAR_PAGE );

        return view('colors.index', ['colors' => $colors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ColorStoreRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store( ColorStoreRequest $request )
    {
        $this->colorModel->firstOrCreate($request->validated());

        return redirect()->route('color.index', ['page'=> $request->page])->withSuccess('Record has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show( int $id )
    {
        return redirect()->route('color.edit', ['color'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit( int $id )
    {
        $color  = $this->colorModel->findOrFail($id);

        return view('colors.edit', ['color' => $color]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  \App\Http\Requests\ColorUpdateRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update( $id, ColorUpdateRequest $request )
    {
        $this->colorModel->findOrFail($id)->update($request->validated());

        return redirect()->route('color.edit', ['color'=>$id])->withSuccess('Record has been created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy( int $id, Request $request )
    {
        $this->colorModel->findOrFail( $id )->delete();

        return redirect()->route('color.index', ['page'=> $request->page])->withSuccess('Record has been removed successfully');
    }
}
