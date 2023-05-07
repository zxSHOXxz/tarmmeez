@extends('admin.master')
@section('title', 'Jop-' . config('app.name'))
@section('sup-title', 'Create-Jop')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Add Jop') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name Ar:') }}</label>
                        <input type="text" name="nameAr" id="nameAr" class="form-control form-control-solid"
                            placeholder="{{ __('Name Ar:') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Name En:') }}</label>
                        <input type="text" name="nameEn" id="nameEn" class="form-control form-control-solid"
                            placeholder="{{ __('Name En:') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Location :') }}</label>
                        <input type="text" name="location" id="location" class="form-control form-control-solid"
                            placeholder="{{ __('Location :') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Final Date :') }}</label>
                        <input type="date" name="final_date" id="final_date" class="form-control form-control-solid"
                            placeholder="{{ __('Final Date :') }}" />

                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description En') }}</label>
                        <textarea name="descriptionEn" id="descriptionEn" class="form-control form-control-solid"
                            placeholder="{{ __('Description En:') }}"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('DescriptionAr') }}</label>
                        <textarea name="descriptionAr" id="descriptionAr" class="form-control form-control-solid"
                            placeholder="{{ __('Description Ar :') }}"></textarea>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <button type="button" onclick="performStore()" class="btn btn-success mr-2">حفظ</button>
                <a href=""><button type="button" class="btn btn-primary mr-2">الغاء</button></a>
            </div>

    </div>

    </form>



@endsection


@section('scripts')
<script>

    function performStore(){
        let formData = new FormData();
        formData.append('nameEn',document.getElementById('nameEn').value);
        formData.append('nameAr',document.getElementById('nameAr').value);
        formData.append('final_date',document.getElementById('final_date').value);
        formData.append('location',document.getElementById('location').value);
        formData.append('descriptionEn',document.getElementById('descriptionEn').value);
        formData.append('descriptionAr',document.getElementById('descriptionAr').value);

         store('/admin/jops',formData);

    }

</script>

@endsection
