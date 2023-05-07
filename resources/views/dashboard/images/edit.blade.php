@extends('admin.master')
@section('title', 'Image-' . config('app.name'))
@section('sup-title', 'Edit-Image')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Edit Image') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Services :') }}</label>
                        <select name="work_id" id="work_id" class="form-control form-control-solid">
                            @foreach ($works as $work )
                                <option value="{{ $work->id }}">{{ $work->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group col-md-6">
                        <label>{{ __('Image :') }}</label>
                        <input type="file" name="image" id="image" class="form-control form-control-solid"
                             />

                    </div>



                </div>
            </div>

            <div class="card-footer">

                <button type="button" onclick="performUpdate({{ $images->id }})" class="btn btn-success mr-2">حفظ</button>
                <a href="{{ route('admin.images.index') }}"><button type="button" class="btn btn-primary mr-2">الغاء</button></a>

            </div>

    </div>

    </form>



@endsection


@section('scripts')
<script>

    function performUpdate(id) {
        let formData = new FormData();
        formData.append("_method", "PUT")
        formData.append('work_id',document.getElementById('work_id').value);
        formData.append('image',document.getElementById('image').files[0]);

        storeRoute('/admin/images/'+id,formData,'/admin/images');

    }

</script>

@endsection
