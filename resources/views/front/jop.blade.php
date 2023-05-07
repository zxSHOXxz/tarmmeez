@extends('front.master')

@section('title', 'Jop -' . config('app.name'))
<style>

div#feedback {
  padding: 10px;
}
</style>

@section('content')

    <!-- start section title-page -->
    <section class="title-page">
        <div class="container">
            <div class="row">
                <h2>{{ __("index.Job") }}</h2>
            </div>
        </div>
        <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
        <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
    </section>
    <!-- end section title-page -->

    <section class="job">
        <div class="title">
            <h2>{{ __("index.OUR OPENINGS") }}</h2>
            <div class="paragraph" style="width: 70%; margin: 0;">
                <p class="text-start">{{ __("index.We are looking for talented individuals to join our teams and help bring ideas to life in the digital world.") }}</p>
            </div>
        </div>

        <div class="container d-flex flex-column justify-content-center align-items-center">
            @foreach ($jops as $jop)
                <div class="card ">
                    <h2>{{ $jop->name }}</h2>
                    <p>{{ __("index.Location :") }}<span>{{ $jop->location }}</span></p>
                    <p>{{ __("index.End Date :") }}<span>{{ $jop->final_date }}</span></p>
                    <p>{{ $jop->description }}<a  onclick="showDate({{ $jop->id }})" data-bs-toggle="modal" data-bs-target="#showData">Read More</a></p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo" onclick="getData({{ $jop->id }})">{{ __("index.Apply") }}</button>
                </div>
            @endforeach


        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Apply This job</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="col-form-label">name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <input type="hidden" class="form-control" id="jop_id" name="jop_id">
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="col-form-label">mobile:</label>
                            <input type="number" class="form-control" id="mobile" name="mobile">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="col-form-label">email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="file" class="col-form-label">file:</label>
                            <input type="file" class="form-control" id="file" name="file">

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="performStore()">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="showData" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card ">
          <h2 id="jop_name"></h2>
          <p>Location : <span id="jop_location"></span></p>
          <p>End Date : <span id="jop_final_date"></span></p>
          <p id="jop_description"></p>

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')

<script>
  function getData(id) {
    axios.get('jop/' + id).then(function(response) {
      document.getElementById('jop_id').value = response.data.id

            // console.log(response.data.id);

          })
    }
    function showDate(id) {
        axios.get('jop/' + id).then(function(response) {
            document.getElementById('jop_name').innerText = response.data.name
            document.getElementById('jop_location').innerText = response.data.location
            document.getElementById('jop_final_date').innerText = response.data.final_date
            document.getElementById('jop_description').innerText = response.data.description

          })
        }

        function performStore() {
          let formData = new FormData();
        formData.append('name', document.getElementById('name').value);
        formData.append('email', document.getElementById('email').value);
        formData.append('jop_id', document.getElementById('jop_id').value);
        formData.append('mobile', document.getElementById('mobile').value);
        formData.append('file', document.getElementById('file').files[0]);

        store('employment', formData);

      }
</script>

<script>


</script>
  @endsection
