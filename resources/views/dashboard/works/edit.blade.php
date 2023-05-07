@extends('admin.master')
@section('title', 'Work-' . config('app.name'))
@section('sup-title', 'Edit-Work')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Edit Work') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name Ar:') }}</label>
                        <input type="text" name="nameAr" id="nameAr" class="form-control form-control-solid"
                            placeholder="{{ __('Name Ar:') }}" value="{{ $works->name_ar }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Name En:') }}</label>
                        <input type="text" name="nameEn" id="nameEn" class="form-control form-control-solid"
                            placeholder="{{ __('Name En:') }}" value="{{ $works->name_en }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('URL :') }}</label>
                        <input type="text" name="url" id="url" class="form-control form-control-solid"
                            value="{{ $works->url }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Date :') }}</label>
                        <input type="date" name="date" id="date" class="form-control form-control-solid"
                            placeholder="{{ __('Date :') }}" value="{{ $works->date }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Client Ar:') }}</label>
                        <input type="text" name="clientAr" id="clientAr" class="form-control form-control-solid"
                            placeholder="{{ __('Client :') }}" value="{{ $works->client_ar }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Client En:') }}</label>
                        <input type="text" name="clientEn" id="clientEn" class="form-control form-control-solid"
                            placeholder="{{ __('Client En:') }}" value="{{ $works->client_en }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Image :') }}</label>
                        <input type="file" name="image" id="image" class="form-control form-control-solid"
                            placeholder="{{ __('Image :') }}" />

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Services :') }}</label>
                        <select name="service_id" id="service_id" class="form-control form-control-solid">
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->trans_name }}</option>
                            @endforeach
                        </select>

                    </div>




                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description En') }}</label>
                        <textarea name="description En" id="descriptionEn" class="form-control form-control-solid"
                            placeholder="{{ __('Description En:') }}">{{ $works->description_en }}</textarea>


                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description Ar') }}</label>
                        <textarea name="description Ar" id="descriptionAr" class="form-control form-control-solid"
                            placeholder="{{ __('Description Ar:') }}">{{ $works->description_ar }}</textarea>


                    </div>
                </div>

            </div>

            <div class="card-footer">

                <button type="button" onclick="performUpdate({{ $works->id }})"
                    class="btn btn-success mr-2">حفظ</button>
                <a href="{{ route('admin.works.index') }}"><button type="button"
                        class="btn btn-primary mr-2">الغاء</button></a>

            </div>

    </div>

    </form>



@endsection


@section('scripts')
    <script>
        function performUpdate(id) {
            let formData = new FormData();
            formData.append("_method", "PUT")
            formData.append('nameEn', document.getElementById('nameEn').value);
            formData.append('nameAr', document.getElementById('nameAr').value);
            formData.append('url', document.getElementById('url').value);
            formData.append('descriptionEn', document.getElementById('descriptionEn').value);
            formData.append('descriptionAr', document.getElementById('descriptionAr').value);
            formData.append('clientAr', document.getElementById('clientAr').value);
            formData.append('clientEn', document.getElementById('clientEn').value);
            formData.append('date', document.getElementById('date').value);
            formData.append('service_id', document.getElementById('service_id').value);
            formData.append('image', document.getElementById('image').files[0]);

            storeRoute('/admin/works/' + id, formData, '/admin/works');

        }
    </script>

@endsection
