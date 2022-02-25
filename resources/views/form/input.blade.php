@php
    switch ($type) {
        case "password": $input = Form::password($name, $args); break;
        case "text": $input = Form::text($name, $value, $args); break;
        case "textarea": $input = Form::textarea($name, $value, $args); break;
    }
@endphp

@include('bs::common.label')
{{ $input }}
