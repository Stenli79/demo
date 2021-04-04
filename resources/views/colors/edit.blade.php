@extends('layouts.app')

@section('title', __('messages.color_edit_page_title'))

@section('content')

<div class="container">
    <div class="row justify-content-center">

    <!-- Middle Panel
    ============================================= -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 col-lg-8">{{ __('messages.color_edit_header') }}</div>
                        <div class="row justify-content-end col-6 col-lg-4 no-gutters">
                            <a href="{{ route('home') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.icon_home_label') }}">
                                <span class="btn-green text-6 mt-1 mb-1 fa-pull-right">
                                    <i class="fas fa-home fa-lg d-none d-sm-block"></i>
                                    <i class="fas fa-home fa-sm d-sm-none"></i>
                                </span>
                            </a>
                            <a href="{{ route('color.index') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.color_list_back_icon_label') }}">
                                <span class="btn-green text-6 mt-1 mb-1 fa-pull-right">
                                    <i class="fas fa-th-list fa-lg d-none d-sm-block"></i>
                                    <i class="fas fa-th-list fa-sm d-sm-none"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body container-fluid col-xs-2 col-lg-10">

                    @include('shared.messages')

                    <!-- Links Edit
                    =============================== -->

                        <form id="form-edit-color" method="POST" action="{{ route('color.update', ['color' => $color->id]) }}">
                            @csrf
                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <label for="title">{{ __('messages.form_title_label') }}</label>
                                <div class="input-group">
                                    <input type="text" id="title" name="title" placeholder="{{ __('messages.form_title_placeholder') }}" value="{{ $color->title }}" class="form-control">
                                </div>
                            </div>

                            @include('shared.color-picker', ['value' => $color->color_hex])
                            <hr>
                            <button id="continue-btn" class="btn btn-primary btn-block">{{ __('messages.continue_button') }}</button>
                        </form>

                    <!-- Links Edit End -->
                </div>
    <!-- Middle End -->
            </div>
        </div>

    </div>
</div>

@endsection
