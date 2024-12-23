@extends('admin.layout.main')
@section('title', 'Update Setting')
@section('content')
    <div class="p-4">
        <h4>Update Setting</h4>

        <form action="{{ route('settings.update', [$setting->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <p>English Data:</p>
            <x-admin.input name="display_name" label="Display Name" placeholder="Enter Display Name" :oldvalue="$setting->display_name" />
            <div class="mt-4">
                <label for="description" class="form-label">Value</label>
                <textarea name="value" id="value" class="form-control" cols="10">{{ old('value', $setting->value) }} </textarea>
            </div>
            <p class="mt-3">Description</p>
            <textarea class="form-control" name="description" id="description" placeholder="Enter description" rows="15">
                @isset($setting->description)
                {{ old('description', $setting->description) }}
                @endisset
            </textarea>

            <p class="mt-3">नेपाली डाटा:</p>
            <x-admin.input name="nepali_display_name" label="प्रदर्शन नाम" placeholder="प्रदर्शन नाम प्रविष्ट गर्नुहोस्" :oldvalue="$setting->nepali_display_name" />
            <div class="mt-4">
                <label for="nepali_description" class="form-label">डाटा</label>
                <textarea name="nepali_value" id="nepali_value" class="form-control" cols="10">{{ old('value', $setting->nepali_value) }} </textarea>
            </div>
            <p class="mt-3">नेपाली विवरण</p>
            <textarea class="form-control" name="nepali_description" id="nepali_description" placeholder="विवरण प्रविष्ट गर्नुहोस्" rows="15">
    @isset($setting->nepali_description)
                    {{ old('nepali_description', $setting->nepali_description) }}
                @endisset
</textarea>




            <p class="mt-4">Existing Images</p>
            <div class="ms-5 my-3">
                @foreach ($setting->image as $image)
                    <div class="mt-2 row">
                        <div class="col-9">
                            <img src="{{ asset('storage/' . $image->image) }}" height="200px" width="auto" class="px-3"
                                alt="" srcset="">
                        </div>
                        <div class="col-3">
                            @php
                                $modelClassName = get_class($setting);
                            @endphp
                            <a href="{{ route('detach.image', ['model_type' => $modelClassName, 'model_id' => $setting->id, 'image' => $image->id]) }}"
                                class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-3 form-group">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image[]" multiple id="image" class="form-control">
            </div>

            <div class="mt-3">
                <input type="submit" value="Update" class="btn btn-success">
            </div>
        </form>
    </div>

@endsection
