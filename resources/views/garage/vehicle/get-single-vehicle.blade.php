<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <th width="30%">Driver </th>
            <td>{{$vehicle->driver_id }}</td>
        </tr> 
        <tr>
            <th>Number Plate </th>
            <td>{{$vehicle->number_plate }}</td>
        </tr>
        <tr>
            <th>Engine No </th>
            <td>{{$vehicle->engine_no }}</td>
        </tr>
        <tr>
            <th>Thesis No </th>
            <td>{{$vehicle->thises_no }}</td>
        </tr>
        <tr>
            <th>Model </th>
            <td>{{$vehicle->model }}</td>
        </tr>
        <tr>
            <th>Color </th>
            <td>{{$vehicle->coler }}</td>
        </tr>
        <tr>
            <th>Status </th>
            <td>{{$vehicle->status == 1? 'Active' : 'Inactive' }}</td>
        </tr>
    </tbody>
</table>
