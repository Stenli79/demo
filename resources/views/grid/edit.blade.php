@extends('layouts.app')

@section('title', __('messages.slots_fill_page_title'))

@section('content')

<div class="container">
    <div class="row justify-content-center">

    <!-- Middle Panel
    ============================================= -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">{{ __('messages.slots_fill_header') }}</div>
                        <div class="row justify-content-end col-2">
                            <a href="{{ route('home') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.icon_home_label') }}">
                                <span class="btn-green text-8 mt-1 mb-1 fa-pull-right">
                                    <i class="fas fa-home"></i>
                                </span>
                            </a>
                            <a href="{{ route('link.index') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.slot_list_back_icon_label') }}">
                                <span class="btn-green text-8 mt-1 mb-1 fa-pull-right">
                                    <i class="fas fa-th-list"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @include('shared.messages')

                    <!-- Slots Edit
                    =============================== -->
                        <div class="card-header">
                            <h5 class="header-green">Select existing slot</h5><hr>
                            <div class="row justify-content-center">
                                <div class="container-fluid col-xs-2 col-lg-8">
                                    <form id="form-update-slot" method="POST" action="{{ route('grid.update', ['id' => $slot_position]) }}">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label for="link">{{ __('messages.slots_form_link_select_label') }}</label>
                                            <div class="input-group">
                                                <select id="link-id" name="link_id" class="form-control">
                                                    <option value="">{{ __('messages.form_select_option') }}</option>
                                                    @foreach( $links as $link )
                                                        <option value="{{ $link->id }}" style="color: {{$link->color}};">
                                                            {{ $link->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <button id="continue-btn" class="btn btn-primary btn-block">{{ __('messages.continue_button') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-header">
                            <h5 class="header-green">Create new slot</h5><hr>
                            <div class="row justify-content-center">
                                <div class="container-fluid col-xs-2 col-lg-8">
                                    <form id="form-create-slot" method="POST" action="{{ route('grid.create', ['id' => $slot_position]) }}">
                                        @csrf
                                        {{ method_field('PUT') }}

                                        <div class="form-group">
                                            <label for="title">{{ __('messages.slots_form_title_label') }}</label>
                                            <div class="input-group">
                                                <input type="text" id="title" name="title" placeholder="{{ __('messages.slots_form_title_placeholder') }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="link">{{ __('messages.slots_form_link_label') }}</label>
                                            <div class="input-group">
                                                <textarea id="link" name="link" placeholder="{{ __('messages.slots_form_link_placeholder') }}" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        @include('shared.color-dropdown', ['colors' => $colors, 'selected' => null])

                                        <hr>
                                        <button id="continue-btn" class="btn btn-primary btn-block">{{ __('messages.continue_button') }}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <!-- Slots Edit End -->
                </div>
                <!-- Middle End -->
            </div>
        </div>

    </div>
</div>

@endsection
