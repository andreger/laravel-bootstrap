@include('bs::form.label')
<select {!! $attributesStr  !!} class="{{ $classValue }} @error($name) is-invalid @enderror">
@foreach($options as $key => $option)
    <option value="{{ $key }}" {{ $key == $value ? 'selected' : '' }}>{{ $option }}</option>
@endforeach
</select>
