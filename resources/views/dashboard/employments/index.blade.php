@extends('admin.master')
@section('title' , 'Employment-'.config('app.name'))
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
                            {{-- <a href="{{ route('admin.employments.create') }}"><button type="button" class="btn btn-lg btn-primary">{{ __('Add Employment') }}   </button></a> --}}
                            <br>
                          </div>
  
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                              <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                <thead>
                  <tr class="bg-danger">
                    <th> #</th>
                    <th>  {{ __("Name") }}</th>
                    <th> {{ __("Email") }}</th>
                    <th> {{ __("Mobile") }}</th>
                    <th> {{ __("Jop") }}</th>
                    <th> {{ __("Type") }}</th>
                    <th> {{ __("Setting") }} </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($employments as $Employment )
                  <tr>
                    <td>{{$Employment->id}}</td>
                    
                    <td>{{$Employment->name }}</td>
                    <td>{{$Employment->email }}</td>
                    <td>{{$Employment->mobile }}</td>
                    <td>
                      @php $jops= App\Models\Jop::find($Employment->jop_id) @endphp
                      {{ $jops->name }}
                   </td>
                    <td>{{$Employment->type }}</td>
                    
  
                    <td>
                      <div class="btn-group">
                        
                        
                        <a href="#" onclick="performDestroy({{$Employment->id}}, this)" class="btn btn-danger" title="Delete">
                          حذف
                        </a>
  
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">
  
                  {{ $employments->links() }}
  
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
      let url = '/admin/employments/'+id;
      confirmDestroy(url, reference);
    }
   </script>
@endsection
