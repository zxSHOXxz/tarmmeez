@extends('admin.master')
@section('title', 'Jop-' . config('app.name'))
@section('sup-title', 'Edit-Jop')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Edit Jop') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name Ar:') }}</label>
                        <input type="text" name="nameAr" id="nameAr" class="form-control form-control-solid"
                            placeholder="{{ __('Name Ar:') }}" value="{{$jops->name_ar }}"/>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Name En:') }}</label>
                        <input type="text" name="nameEn" id="nameEn" class="form-control form-control-solid"
                            placeholder="{{ __('Name En:') }}" value="{{$jops->name_en }}"/>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Location :') }}</label>
                        <input type="text" name="location" id="location" class="form-control form-control-solid"
                            placeholder="{{ __('Location :') }}" value="{{$jops->location }}"/>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Final Date :') }}</label>
                        <input type="date" name="final_date" id="final_date" class="form-control form-control-solid"
                            placeholder="{{ __('Final Date :') }}" value="{{$jops->final_date }}"/>

                    </div>





                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description Ar') }}</label>
                        <textarea name="descriptionAr" id="descriptionAr" class="form-control form-control-solid"
                            placeholder="{{ __('Description Ar:') }}">{{$jops->description_ar }}</textarea>


                    </div>
                    <div class="form-group col-md-12">
                        <label>{{ __('Description En') }}</label>
                        <textarea name="descriptionEn" id="descriptionEn" class="form-control form-control-solid"
                            placeholder="{{ __('Description En:') }}">{{$jops->description_en }}</textarea>


                    </div>
                </div>

            </div>

            <div class="card-footer">

                <button type="button" onclick="performUpdate({{ $jops->id }})" class="btn btn-success mr-2">حفظ</button>
                <a href="{{ route('admin.jops.index') }}"><button type="button" class="btn btn-primary mr-2">الغاء</button></a>

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
        formData.append('final_date',document.getElementById('final_date').value);
        formData.append('location',document.getElementById('location').value);
        formData.append('descriptionAr',document.getElementById('descriptionAr').value);
        formData.append('descriptionEn',document.getElementById('descriptionEn').value);

        storeRoute('/admin/jops/'+id,formData,'/admin/jops');

    }

</script>

@endsection
