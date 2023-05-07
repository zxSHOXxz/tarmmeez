@extends('admin.master')
@section('title' , 'Image-'.config('app.name'))
@section('styles')

@endsection


@section('content')



<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">


                        <div class="card-tools">
                            <a href="{{route('admin.images.create')}}"><button type="button" class="btn btn-lg btn-primary">{{ __("Add Image") }}   </button></a>
                            <br>
                          </div>

                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                              <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                <thead>
                  <tr class="bg-danger">
                    <th> #</th>
                    <th>  {{ __("Image") }}</th>
                    <th> {{ __("User") }}</th>
                    <th> {{ __("Work") }}</th>
                    <th> {{ __("Setting") }} </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($images as $Image )
                  <tr>
                    <td>{{$Image->id}}</td>
                    <td>
                      <img class="img-circle img-bordered-sm" src="{{asset('upload/images/Image/'.$Image->image)}}" width="60" height="60" alt="User Image">
                    </td>
                    <td>
                        @php $users= App\Models\User::find($Image->user_id) @endphp
                        {{ $users->name }}
                     </td>
                    <td>
                        @php $works= App\Models\Work::find($Image->work_id) @endphp
                        {{ $works->trans_name }}
                     </td>

                    <td>
                      <div class="btn-group">
                        <a href="{{route('admin.images.edit',$Image->id)}}" class="btn btn-info" title="Edit">
                          تعديل
                          </a>

                        <a href="#" onclick="performDestroy({{$Image->id}}, this)" class="btn btn-danger" title="Delete">
                          حذف
                        </a>

                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">

                  {{ $images->links() }}

              </span>

            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>

  </section>


@endsection


@section('scripts')

<script>
    function performDestroy(id, reference){
      let url = '/admin/images/'+id;
      confirmDestroy(url, reference);
    }
   </script>
@endsection
