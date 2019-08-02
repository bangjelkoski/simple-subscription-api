<div class="mb-4 relative">
    <label class="text-xs font-bold mb-1 leading-loose" for="{{ $code ?? $label }}">
        {{ $label }}
    </label>
    <div class="relative">
        <input type="text"
            id="{{ $code ?? $label }}"
            name="{{ $code ?? $label }}"
            value="{{ $value ?? '' }}"
            placeholder="{{ $placeholder }}"
            class="input" />
    </div>
</div>