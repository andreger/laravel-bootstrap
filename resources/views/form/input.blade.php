@php
    $args = ['class' => "form-control {$class}"];

    $attributes = [
        'disabled' => $disabled,
        'placeholder' => $placeholder,
        'readonly' => $readonly,
    ];

    foreach($attributes as $key => $value) {
        $args[$key] = $value;
    }

    switch ($type) {

        case "password": echo Form::password($name, $args); break;

        case "text": echo Form::text($name, $value, $args); break;
    }

@endphp
