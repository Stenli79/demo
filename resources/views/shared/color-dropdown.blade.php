<div class="form-group">
    <label for="color">{{ __('messages.slots_form_color_label') }}</label>
    <div class="input-group">
        <select id="color" name="color" class="form-control">
            <option value="">{{ __('messages.form_select_option') }}</option>
            @foreach( $colors as $color )
                <option value="{{ $color->color_hex }}" @if( $color->color_hex == $selected ) selected  @endif style="color: {{$color->color_hex}};">
                    {{ $color->title }}
                </option>
            @endforeach
        </select>
        <div class="input-group-prepend"> <span class="input-group-text"></span> </div>
    </div>
</div>
