@extends('admin.master')
@section('title', 'Blog-' . config('app.name'))
@section('sup-title', 'Edit-Blog')
@section('styles')

@endsection


@section('content')

    <div class="card card-custom">

        <div class="card-header">

            <h3 class="card-title">

                {{ __('Edit Blog') }}

            </h3>



        </div>

        <form class="form" method="post" id="create_form">

            @csrf

            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>{{ __('Name :') }}</label>
                        <input type="text" name="name" id="name" class="form-control form-control-solid"
                            placeholder="{{ __('Name :') }}" value="{{$blogs->name }}"/>

                    </div>
                    
                    <div class="form-group col-md-6">
                        <label>{{ __('Image :') }}</label>
                        <input type="file" name="image" id="image" class="form-control form-control-solid"
                             />

                    </div>



                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>{{ __('Description') }}</label>
                        <textarea name="description" id="description" class="form-control form-control-solid"
                            placeholder="{{ __('Description :') }}">{{$blogs->description }}</textarea>


                    </div>
                </div>

            </div>

            <div class="card-footer">

                <button type="button" onclick="performUpdate({{ $blogs->id }})" class="btn btn-success mr-2">حفظ</button>
                <a href="{{ route('admin.blogs.index') }}"><button type="button" class="btn btn-primary mr-2">الغاء</button></a>

            </div>

    </div>

    </form>



@endsection


@section('scripts')
<script>

    function performUpdate(id) {
        let formData = new FormData();
        formData.append("_method", "PUT")
        formData.append('name',document.getElementById('name').value);
        formData.append('description',document.getElementById('description').value);
        formData.append('image',document.getElementById('image').files[0]);

        storeRoute('/admin/blogs/'+id,formData,'/admin/blogs');

    }

</script>

@endsection
