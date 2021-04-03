@extends('layouts.app')

@section('title', __('messages.dashboard_page_title'))

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-11">{{ __('messages.dashboard_header') }}</div>
                    </div>
                </div>
                <div class="card-body">

                    @include('shared.messages')

                    <!-- Dashboard Slots
                    =============================== -->

                    <div class="products-list row">
                        @foreach($grid_items as $item)
                            <div class="col-sm-4 col-xs-6 mb-4 mb-md-5">
                                <div class="border rounded-lg p-3 text-center">

                                    @if( empty($item->links and $item->links->link) )
                                        <div class="contener text-right">
                                            <a href="{{ route('grid.edit', ['id' => $item->id]) }}" class="btn-green text-4 p-1" data-toggle="tooltip" data-original-title="{{ __('messages.icon_link_label') }}">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                        <p class="mb-2">&nbsp;</p>
                                        <button
                                            class="btn btn-secondary btn-block link-btn"
                                            data-href="{{ route('grid.edit', ['id' => $item->id]) }}"
                                            data-blank="false"
                                        >{{ __('messages.add_button') }}</button>
                                    @else
                                        <div class="contener text-right">
                                            <a href="{{ route('grid.clear', ['id' => $item->id]) }}" class="btn-green text-4 p-1" data-toggle="tooltip" data-original-title="{{ __('messages.icon_unlink_label') }}">
                                                <i class="fas fa-unlink"></i>
                                            </a>
                                        </div>
                                        <p class="mb-2">{{ $item->links->title }}&nbsp;</p>
                                        <button
                                            class="btn btn-secondary btn-block link-btn"
                                            style="background-color: {{ $item->links->color }}; border-color: {{ $item->links->color }};"
                                            data-href="{{ $item->links->link }}"
                                            data-blank="true"
                                        >{{ __('messages.link_button') }}</button>
                                    @endif

                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Dashboard Slots End -->
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
