@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Visitor entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Setting Apartment</h3>
      </div>
        
      <div class="card-body">
        <form method="POST" action="{{ url('/setting') }}" class="row g-3 needs-validation"
          novalidate>
          @csrf
          
        <div class="col-md-12">
            
            <div class="col-md-6">
                <label for="name" class="form-label"> <span style="color:red;">*</span> Name :</label>
                <input @if($setting) value = "{{$setting->name}}" @endif name="name" type="text"  class="form-control" id="name" >
                <div class="invalid-feedback">
                </div>
                @error('name')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
          
            <div class="col-md-6">
                <label for="email" class="form-label">Email :</label>
                <input @if($setting) value = "{{$setting->email}}" @endif name="email" type="text"  class="form-control" id="email">
                <div class="invalid-feedback">
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="phone" class="form-label"><span style="color:red;">*</span> Phone :</label>
                <input @if($setting) value = "{{$setting->phone}}" @endif name="phone" type="text"  class="form-control" id="phone">
                <div class="invalid-feedback">
                </div>
                @error('phone')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-6">
                <label for="skype" class="form-label">Skype :</label>
                <input @if($setting) value = "{{$setting->skype}}" @endif name="skype" type="text"  class="form-control" id="skype">
                <div class="invalid-feedback">
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="fax" class="form-label">Fax :</label>
                <input  @if($setting) value = "{{$setting->fax}}" @endif name="fax" type="text"  class="form-control" id="fax">
                <div class="invalid-feedback">
              </div>
            </div>
            
            <div class="col-md-6">
                <label for="opening_day" class="form-label">Opening Day :</label>
                <input @if($setting) value = "{{$setting->opening_day}}" @endif name="opening_day" type="text"  class="form-control" id="opening_day">
                <div class="invalid-feedback">
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="opening_time" class="form-label">Opening Time :</label>
                <input  @if($setting) value = "{{$setting->opening_time}}" @endif name="opening_time" type="text"  class="form-control" id="opening_time">
                <div class="invalid-feedback">
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="address" class="form-label"><span style="color:red;">*</span> Address :</label>
                <input  @if($setting) value = "{{$setting->address}}" @endif name="address" type="text"  class="form-control" id="address">
                <div class="invalid-feedback">
                </div>
                @error('address')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
          
            <div class="col-md-6">
                <label for="facebook" class="form-label">Facebook :</label>
                <input @if($setting) value = "{{$setting->facebook}}" @endif name="facebook" type="text"  class="form-control" id="facebook">
                <div class="invalid-feedback">
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="twitter" class="form-label">Twitter :</label>
                <input @if($setting) value = "{{$setting->twitter}}" @endif name="twitter" type="text"  class="form-control" id="twitter" >
                <div class="invalid-feedback">
              </div>
            </div>
            
            <div class="col-md-6">
                <label for="linked_in" class="form-label">Linked In :</label>
                <input @if($setting) value = "{{$setting->linked_in}}" @endif name="linked_in" type="text"  class="form-control" id="linked_in" >
                <div class="invalid-feedback">
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="youtube" class="form-label">Youtube :</label>
                <input @if($setting) value = "{{$setting->youtube}}" @endif name="youtube" type="text"  class="form-control" id="youtube">
                <div class="invalid-feedback">
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="copy_right" class="form-label">Copy Right :</label>
                <input  @if($setting) value = "{{$setting->copy_right}}" @endif name="copy_right" type="text"  class="form-control" id="copy_right">
                <div class="invalid-feedback">
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="key_note">Key Note :</label>
                <textarea  name="key_note" class="form-control" placeholder="key_note" id="description"> @if($setting) {{$setting->key_note}} @endif </textarea>
                <div class="valid-feedback">
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