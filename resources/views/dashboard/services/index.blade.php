@extends('admin.master')
@section('title' , 'Service-'.config('app.name'))
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
                            <a href="{{route('admin.services.create')}}"><button type="button" class="btn btn-lg btn-primary">انشاء خدمة  </button></a>
                            <br>
                          </div>

                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                              <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                <thead>
                  <tr class="bg-danger">
                    <th> رقم الخدمة </th>
                    <th>  اسم الخدمة </th>
                    <th>الصورة </th>
                    <th> URl</th>
                    <th> المستخدم</th>
                    <th> الاعدادات </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($services as $service )
                  <tr>
                    <td>{{$service->id}}</td>
                    <td>{{$service->trans_name }}</td>
                    <td>
                      <img class="img-circle img-bordered-sm" src="{{asset('upload/images/service/'.$service->image)}}" width="60" height="60" alt="User Image">
                    </td>
                    <td>{{$service->url}}</td>
                    <td>
                        @php $users= App\Models\User::find($service->user_id) @endphp
                        {{ $users->name }}
                     </td>

                    <td>
                      <div class="btn-group">
                        <a href="{{route('admin.services.edit',$service->id)}}" class="btn btn-info" title="Edit">
                          تعديل
                          </a>

                        <a href="#" onclick="performDestroy({{$service->id}}, this)" class="btn btn-danger" title="Delete">
                          حذف
                        </a>

                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">

                  {{ $services->links() }}

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
      let url = '/admin/services/'+id;
      confirmDestroy(url, reference);
    }
   </script>
@endsection
