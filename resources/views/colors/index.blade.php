@extends('layouts.app')

@section('title', __('messages.colors_page_title'))

@section('content')


<div class="container">
    <div class="row justify-content-center">

    <!-- Middle Panel
    ============================================= -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 col-lg-8">{{ __('messages.colors_header') }}</div>
                        <div class="row justify-content-end col-6 col-lg-4 no-gutters">
                            <a href="{{ route('home') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.icon_home_label') }}">
                                <span class="btn-green text-6 mt-1 mb-1 fa-pull-right">
                                    <i class="fas fa-home fa-lg d-none d-sm-block"></i>
                                    <i class="fas fa-home fa-sm d-sm-none"></i>
                                </span>
                            </a>
                            <a href="{{ route('color.create') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.slot_add_icon_label') }}">
                                <span class="btn-green text-6 mt-1 mb-1 fa-pull-right">
                                    <i class="fas fa-plus-square fa-lg d-none d-sm-block"></i>
                                    <i class="fas fa-plus-square fa-sm d-sm-none"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @include('shared.messages')

                    <!-- Slots List
                    ===============================-->
                    <div class="table-responsive-md">
                        <table class="table table-striped table-hover table-sm">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">{{ __('messages.colors_table_color_header') }}</th>
                                    <th scope="col">{{ __('messages.colors_table_title_header') }}</th>
                                    <th scope="col">{{ __('messages.table_action_header') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($colors as $color)
                                    <tr>
                                        <td class="">
                                            <span class="color-box ml-2" style="background-color: {{ $color->color_hex }};">&nbsp;</span>
                                        </td>
                                        <td>{{ $color->title }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('color.edit', ['id' => $color->id]) }}" class="btn-green text-6 ml-1 ml-sm-2" data-toggle="tooltip" data-original-title="{{ __('messages.table_edit_action_label') }}">
                                                <i class="fas fa-pen d-none d-sm-block"></i>
                                                <i class="fas fa-pen fa-sm d-sm-none"></i>
                                            </a>
                                            <form id="form-destroy-slot" method="POST" action="{{ route('color.destroy', array_merge(\Request::query(), ['id' => $color->id])) }}">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a href="{{ route('color.destroy', array_merge(\Request::query(), ['id' => $color->id])) }}" class="btn-green text-6 ml-1 ml-sm-2 submit-previous-form" data-toggle="tooltip" data-original-title="{{ __('messages.table_destroy_action_label') }}">
                                                <i class="fas fa-trash d-none d-sm-block"></i>
                                                <i class="fas fa-trash fa-sm d-sm-none"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6" class="text-center">
                                    <ul class="pagination justify-content-center mt-4 mb-0">
                                        {{ $colors->links() }}
                                    </ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- Slots List End -->
                </div>
                <!-- Middle End -->
            </div>
        </div>

    </div>
</div>

@endsection
