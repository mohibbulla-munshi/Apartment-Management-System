@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Parking Spot</th>
                    <th>Spot Type</th>
                    <th>Driver</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reserveds as $reserved)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$reserved->parking_id}}</td>
                    <td>{{$reserved->spot_id}}</td>
                    <td>{{$reserved->driver}}</td>
                    <td>
                        <div style="width:65%" class="row">
                             <div class="col-md-4">
                                <a  onclick="get_reserved_modal(<?php echo $reserved->id; ?>);" class="btn btn-info rounded-0"  data-coreui-toggle="modal" data-coreui-target="#exampleModalScrollable"> View </a>
                             </div>
                             <div class="col-md-4">
                                <a href="{{ url('garage/reserved/'.$reserved->id.'/edit') }}"
                                    class="btn btn btn-success rounded-0" type="submit">Edit</a>
                            </div>
                            <div class="col-md-4">
                                <form action="{{ route('reserved.destroy',  $reserved->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn btn-danger rounded-0" onclick="return confirm ('Are you sure?')" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#SL</th>
                    <th>Parking Spot</th>
                    <th>Spot Type</th>
                    <th>Driver</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

    
<div class="tab-content rounded-bottom">
  <div class="tab-pane p-3 active preview" role="tabpanel">
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Information</h5>
            <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body" id="fn_select_reserved">
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>


<script type="text/javascript">

 function get_reserved_modal(reserved_id){

    $('#fn_select_reserved').html('');
    $.ajax({       
        url: "{{url('garage/reserved/show')}}",
        type: "POST",
       data: {
            reserved_id: reserved_id,
            _token: '{{csrf_token()}}'
        },  
       success: function(response){                                                   
          if(response)
          {
             $('#fn_select_reserved').html(response);
          }
       }
    });
 }
 
</script>
