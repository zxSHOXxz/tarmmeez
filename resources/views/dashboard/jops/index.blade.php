@extends('admin.master')
@section('title' , 'Jops-'.config('app.name'))
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
                            <a href="{{route('admin.jops.create')}}"><button type="button" class="btn btn-lg btn-primary">{{ __("Add Jop") }}   </button></a>
                            <br>
                          </div>

                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                              <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                <thead>
                  <tr class="bg-danger">
                    <th> #</th>
                    <th>  {{ __("Name") }}</th>
                    <th>  {{ __("Location") }}</th>
                    <th> {{ __("final_date") }}</th>
                    <th> {{ __("User") }}</th>
                    <th> {{ __("description") }}</th>
                    <th> {{ __("Setting") }} </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jops as $Jop )
                  <tr>
                    <td>{{$Jop->id}}</td>

                    <td>{{$Jop->trans_name }}</td>
                    <td>{{$Jop->location }}</td>
                    <td>{{$Jop->final_date }}</td>
                    <td>
                      @php $users= App\Models\User::find($Jop->user_id) @endphp
                      {{ $users->name }}
                    </td>
                    <td>{{$Jop->trans_description }}</td>

                    <td>
                      <div class="btn-group">
                        <a href="{{route('admin.jops.edit',$Jop->id)}}" class="btn btn-info" title="Edit">
                          تعديل
                          </a>

                        <a href="#" onclick="performDestroy({{$Jop->id}}, this)" class="btn btn-danger" title="Delete">
                          حذف
                        </a>

                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">

                  {{ $jops->links() }}

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
      let url = '/admin/jops/'+id;
      confirmDestroy(url, reference);
    }
   </script>
@endsection
