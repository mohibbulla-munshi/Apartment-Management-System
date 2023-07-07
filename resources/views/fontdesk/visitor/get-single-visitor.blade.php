<table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <th width="30%">Name </th>
            <td>{{$visitor->name }}</td>
        </tr> 
        <tr>
            <th>Phone </th>
            <td>{{$visitor->phone }}</td>
        </tr>
        <tr>
            <th>user Name </th>
            <td>{{$visitor->user_type }}</td>
        </tr>
        <tr>
            <th>Visitor Purpose </th>
            <td>{{$visitor->visitor_id }}</td>
        </tr>
        <tr>
            <th>Reference </th>
            <td>{{$visitor->reference }}</td>
        </tr>
        <tr>
            <th>Check In </th>
            <td>{{$visitor->check_in }}</td>
        </tr>
        <tr>
            <th>Check Out </th>
            <td>{{$visitor->check_out }}</td>
        </tr>
        <tr>
            <th>Note </th>
            <td>{{$visitor->note }}</td>
        </tr>
        <tr>
            <th>Status </th>
            <td>{{$visitor->status == 1? 'Active' : 'Inactive' }}</td>
        </tr>
    </tbody>
</table>
