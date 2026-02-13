
@php
$banner_images = $pageData->meta->where('meta_key', 'banner_images')->first()->meta_value ?? '';

$about_title = $pageData->meta->where('meta_key', 'about_title')->first()->meta_value ?? '';
$about_description = $pageData->meta->where('meta_key', 'about_description')->first()->meta_value ?? '';
$about_image = $pageData->meta->where('meta_key', 'about_image')->first()->meta_value ?? '';

$about_title2 = $pageData->meta->where('meta_key', 'about_title2')->first()->meta_value ?? '';
$about_description2 = $pageData->meta->where('meta_key', 'about_description2')->first()->meta_value ?? '';
$about_image2 = $pageData->meta->where('meta_key', 'about_image2')->first()->meta_value ?? '';

@endphp

<div class="row">
    <div class="col-md-12">
        <hr>
        <h4 class="text-primary">About Section</h4>
    </div>        
    <div class="col-md-6 form-group mb-2">
        <label for="name" class="form-label">Title<span class="text-danger">*</span></label>
        <input class="form-control" value="{{$about_title}}" name="meta[about_title]" type="text" required>
    </div>   
    <div class="col-md-6">
        <label for="name" class="form-label">Image<span class="text-danger">*</span></label>
        <div class="form-group mb-2">
            <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="false">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ __('Browse') }}</div>
                </div>
                <div class="form-control file-amount">{{ __('Choose File') }}</div>
                <input value="{{$about_image}}" type="hidden" name="meta[about_image]" class="selected-files" required>
            </div>
            <div class="file-preview box sm"></div>
        </div>
    </div>     
    <div class="col-md-12 form-group mb-2">
        <label for="content" class="form-label">Description <span class="text-danger">*</span></label>
        <textarea name="meta[about_description]" class="form-control text-editor" rows="4" required>{{$about_description}}</textarea>
    </div>     
</div>

<div class="row">
    <div class="col-md-12">
        <hr>
        <h4 class="text-primary">Secondary Section</h4>
    </div>        
    <div class="col-md-6 form-group mb-2">
        <label for="name" class="form-label">Title<span class="text-danger">*</span></label>
        <input class="form-control" value="{{$about_title2}}" name="meta[about_title2]" type="text" required>
    </div>   
    <div class="col-md-6">
        <label for="name" class="form-label">Image<span class="text-danger">*</span></label>
        <div class="form-group mb-2">
            <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="false">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ __('Browse') }}</div>
                </div>
                <div class="form-control file-amount">{{ __('Choose File') }}</div>
                <input value="{{$about_image2}}" type="hidden" name="meta[about_image2]" class="selected-files" required>
            </div>
            <div class="file-preview box sm"></div>
        </div>
    </div>     
    <div class="col-md-12 form-group mb-2">
        <label for="content" class="form-label">Description <span class="text-danger">*</span></label>
        <textarea name="meta[about_description2]" class="form-control text-editor" rows="4" required>{{$about_description2}}</textarea>
    </div>     
</div>