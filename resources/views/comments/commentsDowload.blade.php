
	<table id="datatable-responsive"  class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Email</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody> 
      	@foreach($users as $user)
      		<tr>
      		<td>{{$user->name}}</td>
      		<td>{{$user->phone}}</td>
      		<td>{{$user->address}}</td>
      		<td>{{$user->email}}</td>
      		<td>{{$user->comments}}</td>
      		</tr>
      	@endforeach
      </tbody>
    </table>