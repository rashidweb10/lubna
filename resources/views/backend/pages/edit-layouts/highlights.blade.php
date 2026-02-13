@php
    $banner_images = $pageData->meta->where('meta_key', 'banner_images')->first()->meta_value ?? '';
    $media_images = $pageData->meta->where('meta_key', 'media_images')->first()->meta_value ?? '';
    $workshop_images = $pageData->meta->where('meta_key', 'workshop_images')->first()->meta_value ?? '';
@endphp

<div class="row">
    <div class="col-md-12">
        <hr>
        <h4 class="text-primary">Media Coverage Section</h4>
    </div>      
    <div class="col-md-12">
        <label for="name" class="form-label">Images <span class="text-danger">*</span></label>
        <div class="form-group mb-2">
            <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ __('Browse') }}</div>
                </div>
                <div class="form-control file-amount">{{ __('Choose File') }}</div>
                <input value="{{$media_images}}" type="hidden" name="meta[media_images]" class="selected-files" required>
            </div>
            <div class="file-preview box sm"></div>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-md-12">
        <hr>
        <h4 class="text-primary">Workshop Section</h4>
    </div>      
    <div class="col-md-12">
        <label for="name" class="form-label">Images <span class="text-danger">*</span></label>
        <div class="form-group mb-2">
            <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ __('Browse') }}</div>
                </div>
                <div class="form-control file-amount">{{ __('Choose File') }}</div>
                <input value="{{$workshop_images}}" type="hidden" name="meta[workshop_images]" class="selected-files" required>
            </div>
            <div class="file-preview box sm"></div>
        </div>
    </div>    
</div>