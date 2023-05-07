@extends('admin.master')
@section('title' , 'Work-'.config('app.name'))
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
                            <a href="{{route('admin.works.create')}}"><button type="button" class="btn btn-lg btn-primary">{{ __("Add Work") }}  </button></a>
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
                    <th>  {{ __("Client") }}</th>
                    <th>  {{ __("Date") }}</th>
                    <th> {{ __("URL") }}</th>
                    <th> {{ __("User") }}</th>
                    <th> {{ __("Service") }}</th>
                    <th> {{ __("Setting") }} </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($works as $Work )
                  <tr>
                    <td>{{$Work->id}}</td>
                    <td>
                      <img class="img-circle img-bordered-sm" src="{{asset('upload/images/work/'.$Work->image)}}" width="60" height="60" alt="User Image">
                    </td>
                    <td>{{$Work->trans_name }}</td>
                    <td>{{$Work->trans_client }}</td>
                    <td>{{$Work->date }}</td>
                    <td>{{$Work->url}}</td>
                    <td>
                        @php $users= App\Models\User::find($Work->user_id) @endphp
                        {{ $users->name }}
                     </td>
                    <td>
                        @php $services= App\Models\Service::find($Work->service_id) @endphp
                        {{ $services->trans_name }}
                     </td>

                    <td>
                      <div class="btn-group">
                        <a href="{{route('admin.works.edit',$Work->id)}}" class="btn btn-info" title="Edit">
                          تعديل
                          </a>

                        <a href="#" onclick="performDestroy({{$Work->id}}, this)" class="btn btn-danger" title="Delete">
                          حذف
                        </a>

                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">

                  {{ $works->links() }}

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
      let url = '/admin/works/'+id;
      confirmDestroy(url, reference);
    }
   </script>
@endsection
