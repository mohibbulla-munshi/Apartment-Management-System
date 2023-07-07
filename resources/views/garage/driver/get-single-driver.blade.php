<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <th width="30%">Name </th>
            <td>{{$driver->name }}</td>
        </tr> 
        <tr>
            <th>Licence </th>
            <td>{{$driver->licence }}</td>
        </tr>
        <tr>
            <th>Phone </th>
            <td>{{$driver->phone }}</td>
        </tr>
        <tr>
            <th>Vehicle </th>
            <td>{{$driver->vehicle }}</td>
        </tr>
        <tr>
            <th>Status </th>
            <td>{{$driver->status == 1? 'Active' : 'Inactive' }}</td>
        </tr>
    </tbody>
</table>
