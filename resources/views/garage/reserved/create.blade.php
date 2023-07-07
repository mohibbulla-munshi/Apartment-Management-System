@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Reservation Spot entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Add New Reservation</h3>
      </div>
        
    <div class="card-body">
        <form method="POST" action="{{ route('reserved.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf

            <div class="col-md-6">
                <label for="billMonth" class="form-label">Parking Spot :</label>
                <select name="parking_id" class="form-select" id="parking_id" required>
                    <option value="0">--Select--</option>
                    @php foreach($parkingspots as $value){ @endphp
                      <option value="@php echo $value->type; @endphp"> @php echo $value->type; @endphp</option>
                    @php } @endphp
                </select>
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="col-md-6">
                <label for="billMonth" class="form-label"> Spot Type:</label>
                <select name="spot_id" class="form-select" id="spot_id" required>
                    <option value="0">--Select--</option>
                    @php foreach($spottypes as $value){ @endphp
                        <option value="@php echo $value->type; @endphp"> @php echo $value->type; @endphp</option>
                    @php } @endphp
                </select>
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="col-md-6">
                <label for="date" class="form-label">Driver :</label>
                <input type="text" name = "driver" class="form-control" id="driver" placeholder ="Driver" required>
                <div class="invalid-feedback">
                </div>
            </div>
          
            <div class="col-md-6">
               <label for="date" class="form-label">Vehicle :</label>
               <input type="text" name = "vehicle" class="form-control" id="vehicle" placeholder ="Vehicle">
               <div class="invalid-feedback">
               </div>
            </div>
           
            <div class="col-md-6">
                <label for="date" class="form-label">Reserved On :</label>
                <input type="text" name = "reserved_on" class="form-control" id="reserved_on" placeholder ="Reserved On">
                <div class="invalid-feedback">
                </div>
            </div>
       
            <div class="col-md-6">
                <label for="date" class="form-label">Reserved Untill :</label>
                <input type="text" name = "reserved_until" class="form-control" id="reserved_until" placeholder ="Reserved Untill">
               <div class="invalid-feedback">
               </div>
            </div>
          
          </div>
   
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>

<!-- ===date picker== -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script type="text/javascript">
    $('#reserved_on').datepicker();
    $('#reserved_until').datepicker();
</script>

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