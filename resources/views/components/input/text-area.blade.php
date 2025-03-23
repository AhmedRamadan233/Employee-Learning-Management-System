<div class="{{ $wrapperClass }}">
    <label for="{{ $id ?: $name }}" class="form-label">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $id ?: $name }}" placeholder="{{ $placeholder }}" class="form-control"
        {{ $required ? 'required' : '' }}>{{ old($name, $value) }}</textarea>
</div>
