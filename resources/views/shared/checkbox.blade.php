@php
    $class ??= null;
    $name ??= '';
    $label ??= ucfirst($name);
    $value ??= 1; // La valeur cochée par défaut
@endphp

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>{{ $label }}:</strong>
        <div class="form-check form-switch">
            <input type="hidden" value="0" name="{{ $name }}">
            <input @checked(old($name, $value ?? false)) type="checkbox" value="1" name="{{ $name }}" class="form-check-input @error($name) is-invalid @enderror">
            <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
            @error($name)
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
