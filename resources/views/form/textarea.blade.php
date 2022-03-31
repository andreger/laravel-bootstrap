@include('bs::common.label')
<textarea {!! $attributesStr !!} class="{{ $classValue }} @error($name) is-invalid @enderror">{!! $value !!}</textarea>
@include('bs::common.error')
