@extends('layouts.app')

@section('title', __('messages.slots_create_page_title'))

@section('content')

<div class="container">
    <div class="row justify-content-center">

    <!-- Middle Panel
    ============================================= -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 col-lg-8">{{ __('messages.slots_create_header') }}</div>
                        <div class="row justify-content-end col-6 col-lg-4 no-gutters">
                            <a href="{{ route('home') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.icon_home_label') }}">
                                <span class="btn-green text-6 mt-1 mb-1 fa-pull-right">
                                    <i class="fas fa-home fa-lg d-none d-sm-block"></i>
                                    <i class="fas fa-home fa-sm d-sm-none"></i>
                                </span>
                            </a>
                            <a href="{{ route('link.index') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.slot_list_back_icon_label') }}">
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

                    <!-- Link Create
                    =============================== -->

                        <form id="form-create-slot" method="POST" action="{{ route('link.store') }}">
                            @csrf

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

                            <div class="form-group">
                                <label for="sequence">{{ __('messages.slots_form_sequence_label') }}</label>
                                <div class="input-group">
                                    <input type="number" id="sequence" name="sequence" placeholder="{{ __('messages.slots_form_sequence_placeholder') }}" value="{{$sequence}}" class="form-control" min="1">
                                </div>
                            </div>

                            <hr>

                            <button id="continue-btn" class="btn btn-primary btn-block">{{ __('messages.continue_button') }}</button>
                        </form>

                    <!-- Link Create End -->
                </div>
                <!-- Middle End -->
            </div>
        </div>

    </div>
</div>

@endsection
