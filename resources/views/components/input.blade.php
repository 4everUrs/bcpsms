@props(['name'])

<input {!! $attributes->merge(['class' => 'form-control','type'=>'text']) !!}>

@error($name) <span class="text-danger">{{ $message }}<br></span> @enderror
