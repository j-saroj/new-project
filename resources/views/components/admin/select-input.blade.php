@props(['name', 'label', 'values', 'displayColumn' => 'name', 'data' => null, 'multiple' => false])
<div {{ $attributes->merge(['class' => 'form-group mt-3']) }}>
    <label for="{{ $name }}">{{ $label }}</label>
    <select name="{{ $multiple ? $name . '[]' : $name }}" id="{{ $name }}"
        @if ($multiple) multiple @endif class="form-control">
        @if ($data != null)
            <option value="{{ $data->id }}" selected>{{ $data->$displayColumn ?? $data->title }}</option>
        @else
            <option value="" selected>Select...</option>
        @endif
        {{ $slot }}
        @foreach ($values as $value)
            <option value="{{ $value->id }}"
                @if ($multiple && in_array($value->id, (array) old($name, $data))) selected @elseif (!$multiple && $value->id == old($name, $data)) selected @endif>
                {{ $value->$displayColumn ?? $value->title }}
            </option>
        @endforeach

    </select>
    {{--    @if ($errors->has($name)) --}}
    {{--        <div class="form-text text-danger"> --}}
    {{--            {{ $errors->first($name) }} --}}
    {{--        </div> --}}
    {{--    @endif --}}
</div>
