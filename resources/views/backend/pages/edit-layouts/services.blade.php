
@php
$banner_images = $pageData->meta->where('meta_key', 'banner_images')->first()->meta_value ?? '';

$services = json_decode($pageData->meta->where('meta_key', 'services')->first()->meta_value ?? '[]', true);

@endphp

<div class="row">
    <div class="col-md-12">
        <hr>
        <h4 class="text-primary">Breadcrumb Section</h4>
    </div>      
    <div class="col-md-12">
        <label for="name" class="form-label">Breadcrumb <span class="text-danger">*</span></label>
        <div class="form-group mb-2">
            <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="false">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ __('Browse') }}</div>
                </div>
                <div class="form-control file-amount">{{ __('Choose File') }}</div>
                <input value="{{$banner_images}}" type="hidden" name="meta[banner_images]" class="selected-files" required>
            </div>
            <div class="file-preview box sm"></div>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-md-12">
        <hr>
        <h4 class="text-primary">services</h4>
    </div>    
    <div class="quicklinks-target">
        @if(isset($services['itration']) && is_array($services['itration']))
            @foreach($services['itration'] as $index => $itration)
                <div class="row remove-parent">
                    <div class="col-md-12">
                        <label for="name" class="form-label">services <span class="text-danger">*</span></label>
                        <input value="{{ $index }}" name="meta[services][itration][]" type="hidden" required>
                    </div> 
                    <div class="col-md">
                        <div class="form-group mb-2">
                            <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="false">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ __('Browse') }}</div>
                                </div>
                                <div class="form-control file-amount">{{ __('Choose File') }}</div>
                                <input type="hidden" 
                                    name="meta[services][image][]" 
                                    class="selected-files" 
                                    value="{{ $services['image'][$index] ?? '' }}" 
                                    required>
                            </div>
                            <div class="file-preview box sm"></div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group mb-2">
                            <input value="{{ $services['name'][$index] ?? '' }}" 
                                name="meta[services][name][]" 
                                type="text" 
                                class="form-control" 
                                minlength="3" 
                                maxlength="200" 
                                placeholder="Enter name" 
                                required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group mb-2">
                            <textarea  
                                name="meta[services][description][]" 
                                class="form-control text-editor" 
                                rows="1" 
                                required>{{ $services['description'][$index] ?? '' }}</textarea>
                        </div>
                    </div>                                       
                    <div class="col-md-auto">
                        <button type="button" class="btn btn-icon btn-circle btn-soft-danger" data-toggle="remove-parent" data-parent=".remove-parent">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <button
        type="button"
        class="mt-1 btn btn-soft-success btn-icon w-100"
        data-toggle="add-more"
        data-content='
            <div class="row remove-parent">
                <div class="col-md-12">
                    <label for="name" class="form-label">services <span class="text-danger">*</span></label>
                    <input value="data" name="meta[services][itration][]" type="hidden" required>
                </div> 
                <div class="col-md">
                    <div class="form-group mb-2">
                        <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="false">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">{{ __('Browse') }}</div>
                            </div>
                            <div class="form-control file-amount">{{ __('Choose File') }}</div>
                            <input type="hidden" name="meta[services][image][]" class="selected-files" required>
                        </div>
                        <div class="file-preview box sm"></div>
                    </div>
                </div> 
                <div class="col-md">
                    <div class="form-group mb-2">
                        <input value="" name="meta[services][name][]" type="text" class="form-control" minlength="3" maxlength="200" placeholder="Enter name" required>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group mb-2">
                        <textarea value="" name="meta[services][description][]" class="form-control text-editor" rows="1" placeholder="Enter description" required></textarea>
                    </div>
                </div>                              
                <div class="col-md-auto">
                    <button type="button" class="btn btn-icon btn-circle btn-soft-danger" data-toggle="remove-parent" data-parent=".remove-parent">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
            </div>   
        '
        data-target=".quicklinks-target">
        <i class="ti ti-plus"></i>
        <span class="ml-2">Add More</span>
    </button>     
</div>  