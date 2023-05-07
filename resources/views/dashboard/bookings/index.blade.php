@extends('admin.master')
@section('title' , 'Booking-'.config('app.name'))
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
                            {{-- <a href="{{ route('admin.bookings.create') }}"><button type="button" class="btn btn-lg btn-primary">{{ __('Add Booking') }}   </button></a> --}}
                            <br>
                          </div>
  
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                              <table class="table table-hover table-bordered table-striped text-nowrap text-center">
                <thead>
                  <tr class="bg-danger">
                    <th> #</th>
                    <th>  {{ __("Name") }}</th>
                    <th> {{ __("mobile") }}</th>
                    <th> {{ __("Service") }}</th>
                    <th> {{ __("message") }}</th>
                    <th> {{ __("Setting") }} </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bookings as $Booking )
                  <tr>
                    <td>{{$Booking->id}}</td>
                    
                    <td>{{$Booking->name }}</td>
                    <td>{{$Booking->mobile }}</td>
                    <td>
                      @php $services= App\Models\Service::find($Booking->service_id) @endphp
                        {{ $services->name }}
                    </td>
                    <td>{{$Booking->message }}</td>
  
                    <td>
                      <div class="btn-group">
                        
                        
                        <a href="#" onclick="performDestroy({{$Booking->id}}, this)" class="btn btn-danger" title="Delete">
                          حذف
                        </a>
  
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="span text-center" style="margin-top: 20px; margin-bottom:10px">
  
                  {{ $bookings->links() }}
  
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
      let url = '/admin/bookings/'+id;
      confirmDestroy(url, reference);
    }
   </script>
@endsection
