@extends('admin.master')
@section('title', 'Service-' . config('app.name'))
@section('sup-title', 'Create-Service')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Add Service') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name Ar :') }}</label>
                        <input type="text" name="nameAr" id="nameAr" class="form-control form-control-solid"
                            placeholder="{{ __('Name Ar:') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Name En :') }}</label>
                        <input type="text" name="nameEn" id="nameEn" class="form-control form-control-solid"
                            placeholder="{{ __('Name En:') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('URL :') }}</label>
                        <input type="text" name="url" id="url" class="form-control form-control-solid"
                            value="https//" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Image :') }}</label>
                        <input type="file" name="image" id="image" class="form-control form-control-solid"
                             />

                    </div>



                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description En') }}</label>
                        <textarea name="descriptionEn" id="descriptionEn" class="form-control form-control-solid"
                            placeholder="{{ __('Description En :') }}"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description Ar') }}</label>
                        <textarea name="descriptionAr" id="descriptionAr" class="form-control form-control-solid"
                            placeholder="{{ __('Description Ar :') }}"></textarea>
                    </div>
                </div>

            </div>

            <div class="card-footer">

                <button type="button" onclick="performStore()" class="mr-2 btn btn-success">حفظ</button>
                <a href=""><button type="button" class="mr-2 btn btn-primary">الغاء</button></a>

            </div>

    </div>

    </form>



@endsection


@section('scripts')
<script>

    function performStore(){
        let formData = new FormData();
        formData.append('nameAr',document.getElementById('nameAr').value);
        formData.append('nameEn',document.getElementById('nameEn').value);
        formData.append('url',document.getElementById('url').value);
        formData.append('descriptionEn',document.getElementById('descriptionEn').value);
        formData.append('descriptionAr',document.getElementById('descriptionAr').value);
        formData.append('image',document.getElementById('image').files[0]);

         store('/admin/services',formData);

    }

</script>

@endsection
