<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <tbody>
       <tr>
            <th width="30%">Parking Spot </th>
            <td>{{$reserved->parking_id }}</td>
       </tr> 
        <tr>
            <th>Spot Type </th>
            <td>{{$reserved->spot_id }}</td>
        </tr>
        <tr>
            <th>Driver </th>
            <td>{{$reserved->driver }}</td>
        </tr>
        <tr>
            <th>Vehicle </th>
            <td>{{$reserved->vehicle }}</td>
        </tr>
        <tr>
            <th>Reserved On </th>
            <td>{{$reserved->reserved_on }}</td>
        </tr>
        <tr>
            <th>Reserved Until </th>
            <td>{{$reserved->reserved_until }}</td>
        </tr>
        <tr>
            <th>Status </th>
            <td>{{$reserved->status == 1? 'Active' : 'Inactive' }}</td>
        </tr>
    </tbody>
</table>
