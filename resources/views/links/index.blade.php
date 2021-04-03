@extends('layouts.app')

@section('title', __('messages.slots_page_title'))

@section('content')


<div class="container">
    <div class="row justify-content-center">

    <!-- Middle Panel
    ============================================= -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 col-lg-8">{{ __('messages.slots_header') }}</div>
                        <div class="row justify-content-end col-6 col-lg-4 no-gutters">
                            <a href="{{ route('home') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.icon_home_label') }}">
                                <span class="btn-green text-6 mt-1 mb-1 fa-pull-right">
                                    <i class="fas fa-home fa-lg d-none d-sm-block"></i>
                                    <i class="fas fa-home fa-sm d-sm-none"></i>
                                </span>
                            </a>
                            <a href="{{ route('link.create') }}" class="col-1 ml-3" data-toggle="tooltip" data-original-title="{{ __('messages.slot_add_icon_label') }}">
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
                                    <th scope="col">{{ __('messages.slot_table_color_header') }}</th>
                                    <th scope="col">{{ __('messages.slot_table_title_header') }}</th>
                                    <th scope="col">{{ __('messages.slot_table_href_header') }}</th>
                                    <th scope="col" class="d-none d-sm-table-cell">{{ __('messages.slot_table_sequence_header') }}</th>
                                    <th scope="col">{{ __('messages.slot_table_action_header') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($links as $link)
                                    <tr>
                                        <td class="">
                                            <span class="color-box ml-2" style="background-color: {{ $link->color }};">&nbsp;</span>
                                        </td>
                                        <td>{{ $link->title }}</td>
                                        <td>{{ $link->link }}</td>
                                        <td class="d-none d-sm-table-cell">{{ $link->sequence }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('link.up', ['id' => $link->id]) }}" class="btn-green text-6 ml-1 ml-sm-2" data-toggle="tooltip" data-original-title="{{ __('messages.slot_table_moveup_action') }}">
                                                <i class="fas fa-arrow-circle-up d-none d-sm-block"></i>
                                                <i class="fas fa-arrow-circle-up fa-sm d-sm-none"></i>
                                            </a>
                                            <a href="{{ route('link.down', ['id' => $link->id]) }}" class="btn-green text-6 ml-1 ml-sm-2" data-toggle="tooltip" data-original-title="{{ __('messages.slot_table_movedown_action') }}">
                                                <i class="fas fa-arrow-circle-down d-none d-sm-block"></i>
                                                <i class="fas fa-arrow-circle-down fa-sm d-sm-none"></i>
                                            </a>
                                            <a href="{{ route('link.edit', ['id' => $link->id]) }}" class="btn-green text-6 ml-1 ml-sm-2" data-toggle="tooltip" data-original-title="{{ __('messages.slot_table_edit_action') }}">
                                                <i class="fas fa-pen d-none d-sm-block"></i>
                                                <i class="fas fa-pen fa-sm d-sm-none"></i>
                                            </a>
                                            <form id="form-destroy-slot" method="POST" action="{{ route('link.destroy', ['id' => $link->id]) }}">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a href="{{ route('link.destroy', ['id' => $link->id]) }}" class="btn-green text-6 ml-1 ml-sm-2 submit-previous-form" data-toggle="tooltip" data-original-title="{{ __('messages.slot_table_destroy_action') }}">
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
                                        {{ $links->links() }}
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
