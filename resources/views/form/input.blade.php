@php
    switch ($type) {

        case "password": echo Form::password($name, $args); break;

        case "text": echo Form::text($name, $value, $args); break;
    }

@endphp
