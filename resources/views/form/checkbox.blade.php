<div class="form-check">
    {{ Form::$type($name, $value, $selected, $args) }}
    <label class="form-check-label" for="{{ $args['id'] }}">
        {{ $label }}
    </label>
</div>
