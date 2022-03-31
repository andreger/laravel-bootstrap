@if ($formGroup) <div class="form-group"> @endif
@include('bs::common.label')
<input {!! $attributesStr  !!} class="{{ $classValue }} @error($name) is-invalid @enderror" />
@include('bs::common.error')
@if ($formGroup) </div> @endif
