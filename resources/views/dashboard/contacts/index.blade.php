@extends('admin.master')
@section('title' , 'Contact-'.config('app.name'))
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
                            {{-- <a href="{{ route('admin.contacts.create') }}"><button type="button" class="btn btn-lg btn-primary">{{ __('Add Contact') }}   </button></a> --}}
                            <br>
                          </div>
  
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                              <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                <thead>
                  <tr class="bg-danger">
                    <th> #</th>
                    <th>  {{ __("Name") }}</th>
                    <th> {{ __("Phone") }}</th>
                    <th> {{ __("Email") }}</th>
                    <th> {{ __("Company Name") }}</th>
                    <th> {{ __("Inquire About") }}</th>
                    <th> {{ __("Project Summary") }}</th>
                    <th> {{ __("Setting") }} </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($contacts as $Contact )
                  <tr>
                    <td>{{$Contact->id}}</td>
                    
                    <td>{{$Contact->name }}</td>
                    <td>{{$Contact->phone }}</td>
                    <td>{{$Contact->email }}</td>
                    
                    <td>{{$Contact->company_name }}</td>
                    <td>{{$Contact->inquire_about }}</td>
                    <td>{{$Contact->project_summary }}</td>
  
                    <td>
                      <div class="btn-group">
                        
                        
                        <a href="#" onclick="performDestroy({{$Contact->id}}, this)" class="btn btn-danger" title="Delete">
                          حذف
                        </a>
  
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">
  
                  {{ $contacts->links() }}
  
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
      let url = '/admin/contacts/'+id;
      confirmDestroy(url, reference);
    }
   </script>
@endsection
