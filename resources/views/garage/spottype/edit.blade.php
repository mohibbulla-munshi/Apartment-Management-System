@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Spot Type entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Update Spot Type</h3>
      </div>
        
      <div class="card-body">
        <form method="POST" action="{{ route('spottype.update', ['spottype' => $spottype->id]) }}"
          class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')
        
        <div class="col-md-12">  
            
            <div class="col-md-6">
                <label for="date" class="form-label">Spot Type :</label>
                <input name="type" type="text" class="form-control" id="type" value="{{ $spottype->type }}" placeholder = "Spot Type">
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="col-md-6">
                <label for="billMonth" class="form-label">Parking Spot :</label>
                <select name="parking_id" class="form-select" id="parking_id" required>
                    @php foreach($parkingspots as $key=>$value){ @endphp
                    <option value="@php echo $key; @endphp" @php if($spottype->parking_id == $key){ echo 'selected="selected"';} @endphp > @php echo $value->type; @endphp</option>
                    @php } @endphp
                </select>
               <div class="invalid-feedback">
               </div>
            </div>
            
        </div> 
          
            <div class="col-md-6">
                <label for="status" class="form-label">Status :</label>
                <select name="status" class="form-select" id="status" >
                    <option value="1" {{ $spottype->status == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $spottype->status == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                <div class="invalid-feedback">
                </div>
            </div>
          
          </div>
          <div class="col-12">
          <input name="id" type="hidden"  id="id" value="{{ $spottype->id }}" >
            <button class="btn btn-primary" type="submit">Update</button>
          </div>
        </form>
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
