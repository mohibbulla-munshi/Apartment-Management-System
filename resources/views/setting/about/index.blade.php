@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Visitor entry form -->
    <div class="card">
      <div class="card-header">
        <h3>About Apartment</h3>
      </div>
        
      <div class="card-body">
        <form method="POST" action="{{ url('/about') }}" class="row g-3 needs-validation"
          novalidate enctype="multipart/form-data">
          @csrf
          
        <div class="col-md-12">
            
            <div class="col-md-6">
                <label for="name" class="form-label"><span style="color:red;">*</span> Name :</label>
                <input @if($about) value = "{{$about->name}}" @endif name="name" type="text"  class="form-control" id="name" >
                <div class="invalid-feedback">
                </div>
                @error('name')
                    <div style="color: red;">{{ $message }}</div>
                @enderror      
            </div>
          
            <div class="col-md-6">
                <label for="video" class="form-label">Video :</label>
                <input @if($about) value = "{{$about->video}}" @endif name="video" type="text"  class="form-control" id="video">
                <div class="invalid-feedback">
                </div>
            </div>
          
            <div class="col-md-6">
                <label for="description">Description :</label>
                <textarea  name="description" class="form-control" placeholder="Description" id="description">@if($about) {{$about->name}} @endif</textarea>
                <div class="valid-feedback">
                </div>
            </div>

            <div class="col-md-6">
                <label for="image" class="form-label">Image :</label>
                <input name="image" type="file"  class="form-control" id="image" ><br>
                <img  @if($about) src="{{asset($about->image)}}" @endif width="70%" height="70%">
                <div class="invalid-feedback">
                </div>
            </div>
             
        </div>
          
            <div class="col-12">
              <input name="id" type="hidden" class="form-control" id="id" value = "1">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>

@endsection