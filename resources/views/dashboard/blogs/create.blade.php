@extends('admin.master')
@section('title', 'Blog-' . config('app.name'))
@section('sup-title', 'Create-Blog')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Add Blog') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name En:') }}</label>
                        <input type="text" name="name En" id="nameEn" class="form-control form-control-solid"
                            placeholder="{{ __('Name En:') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Name Ar:') }}</label>
                        <input type="text" name="nameAr" id="nameAr" class="form-control form-control-solid"
                            placeholder="{{ __('Name Ar:') }}" />

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
                    <div class="form-group col-md-12">
                        <label>{{ __('Description Ar') }}</label>
                        <textarea name="descriptionAr" id="descriptionAr" class="form-control form-control-solid"
                            placeholder="{{ __('Description Ar:') }}"></textarea>


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
        formData.append('nameAr',document.getElementById('nameAr').value);
        formData.append('nameEn',document.getElementById('nameEn').value);
        formData.append('descriptionAr',document.getElementById('descriptionAr').value);
        formData.append('descriptionEn',document.getElementById('descriptionEn').value);
        formData.append('image',document.getElementById('image').files[0]);

         store('/admin/blogs',formData);

    }

</script>

@endsection
