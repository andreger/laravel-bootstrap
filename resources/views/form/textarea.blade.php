@include('bs::form.label')
<textarea {!! $attributesStr !!} class="{{ $classValue }} @error($name) is-invalid @enderror">{!! $value !!}</textarea>
