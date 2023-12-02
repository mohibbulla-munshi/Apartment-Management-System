@extends('user_dashboard.layout.master')

@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('utilityBillSetup') }}
    </span>
    <!-- Bill entry form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      <div class="card-body">

        <form method="POST" action="{{ route('utility_bill_setup.store') }}" class="row g-3 needs-validation"
          novalidate>
          @csrf

          {{-- Gas Bill Input --}}
          <div class="col-md-6">
            <label for="gas_bill_per_flat" class="form-label">Gas Bill Per Flat :</label>
            <input name="gas_bill_per_flat" type="number" class="form-control" id="gas_bill_per_flat" value="" required>
          </div>

          {{-- Security Bill Input --}}
          <div class="col-md-6">
            <label for="security_bill_per_flat" class="form-label">Security Bill Per Flat :</label>
            <input name="security_bill_per_flat" type="number" class="form-control" id="security_bill_per_flat" value=""
              required>
          </div>

          {{-- Display Errors --}}
          @if ($errors->any())
          <div class="col-12">
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          </div>
          @endif

          {{-- Submit Button --}}
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>


<!-- Showing Employee Salary List -->
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span class="text-center">
      {{ Breadcrumbs::render('utilityBillSetupList') }}
    </span>
    <!-- Employee Salary List -->
    <table class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
      <thead>
        <tr>
          <th>Gas Bill Per Flat</th>
          <th>Security Bill Per Flat</th>
          <th class="float-end">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($utilityBills as $utilityBill)
        <tr>
          <td>{{ $utilityBill->gas_bill_per_flat }}</td>
          <td>{{ $utilityBill->security_bill_per_flat }}</td>
          <td>
            <a href="{{ url('utilityBill/'.$utilityBill->id.'/edit') }}" class="btn btn btn-success rounded-0 float-end"
              type="submit">Edit</a>

            <form method="POST" action="{{ url('utilityBill/'.$utilityBill->id) }}" class="float-end">
              @csrf
              @method('DELETE')
              <button class="btn btn btn-danger rounded-0" type="submit"><i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
      </tfoot>
    </table>
  </div>
</div>


@endsection