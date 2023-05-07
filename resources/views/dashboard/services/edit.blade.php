@extends('admin.master')
@section('title', 'Service-' . config('app.name'))
@section('sup-title', 'Edit-Service')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Edit Service') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name Ar:') }}</label>
                        <input type="text" name="nameAr" id="nameAr" class="form-control form-control-solid"
                            placeholder="{{ __('Name Ar:') }}" value="{{$services->name_ar }}"/>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Name En:') }}</label>
                        <input type="text" name="nameEn" id="nameEn" class="form-control form-control-solid"
                            placeholder="{{ __('Name En:') }}" value="{{$services->name_en }}"/>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('URL :') }}</label>
                        <input type="text" name="url" id="url" class="form-control form-control-solid"
                            value="{{$services->url }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Image :') }}</label>
                        <input type="file" name="image" id="image" class="form-control form-control-solid"/>
                    </div>



                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('DescriptionAr') }}</label>
                        <textarea name="descriptionAr" id="descriptionAr" class="form-control form-control-solid"
                            placeholder="{{ __('Description Ar:') }}">{{$services->description_en }}</textarea>


                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('DescriptionEn') }}</label>
                        <textarea name="descriptionEn" id="descriptionEn" class="form-control form-control-solid"
                            placeholder="{{ __('Description En:') }}">{{$services->description_ar }}</textarea>


                    </div>
                </div>

            </div>

            <div class="card-footer">

                <button type="button" onclick="performUpdate({{ $services->id }})" class="btn btn-success mr-2">حفظ</button>
                <a href="{{ route('admin.services.index') }}"><button type="button" class="btn btn-primary mr-2">الغاء</button></a>

            </div>

    </div>

    </form>



@endsection


@section('scripts')
<script>

    function performUpdate(id) {
        let formData = new FormData();
        formData.append("_method", "PUT")
        formData.append('nameAr',document.getElementById('nameAr').value);
        formData.append('nameEn',document.getElementById('nameEn').value);
        formData.append('url',document.getElementById('url').value);
        formData.append('descriptionAr',document.getElementById('descriptionAr').value);
        formData.append('descriptionEn',document.getElementById('descriptionEn').value);
        formData.append('image',document.getElementById('image').files[0]);

        storeRoute('/admin/services/'+id,formData,'/admin/services');

    }

</script>

@endsection
