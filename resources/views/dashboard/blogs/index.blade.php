@extends('admin.master')
@section('title' , 'Blog-'.config('app.name'))
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
                            <a href="{{route('admin.blogs.create')}}"><button type="button" class="btn btn-lg btn-primary">انشاء خدمة  </button></a>
                            <br>
                          </div>

                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                              <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                <thead>
                  <tr class="bg-danger">
                    <th> #</th>
                    <th>  {{ __("Image") }}</th>
                    <th>  {{ __("Name") }}</th>
                    <th> {{ __("User") }}</th>
                    <th> {{ __("description") }}</th>
                    <th> {{ __("Setting") }} </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($blogs as $Blog )
                  <tr>
                    <td>{{$Blog->id}}</td>
                    <td>
                      <img class="img-circle img-bordered-sm" src="{{asset('upload/images/Blog/'.$Blog->image)}}" width="60" height="60" alt="User Image">
                    </td>
                    <td>{{$Blog->trans_name }}</td>
                    <td>
                      @php $users= App\Models\User::find($Blog->user_id) @endphp
                      {{ $users->name }}
                    </td>
                    <td>{{$Blog->trans_description }}</td>

                    <td>
                      <div class="btn-group">
                        <a href="{{route('admin.blogs.edit',$Blog->id)}}" class="btn btn-info" title="Edit">
                          تعديل
                          </a>

                        <a href="#" onclick="performDestroy({{$Blog->id}}, this)" class="btn btn-danger" title="Delete">
                          حذف
                        </a>

                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">

                  {{ $blogs->links() }}

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
      let url = '/admin/blogs/'+id;
      confirmDestroy(url, reference);
    }
   </script>
@endsection
