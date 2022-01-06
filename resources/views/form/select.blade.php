@php
    $args = ['class' => "form-select {$class}"];

    $attributes = [
        'disabled' => $disabled,
        'placeholder' => $placeholder,
        'size' => $size,
        'multiple' => $multiple
    ];

    foreach($attributes as $key => $value) {
        $args[$key] = $value;
    }
@endphp

{{ Form::select($name, $options, $selected, $args) }}
