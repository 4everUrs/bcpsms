@props(['name'])

<div class="form-floating">
    <input {!! $attributes->merge(['class' => 'form-control','type'=>'text']) !!}>
</div>