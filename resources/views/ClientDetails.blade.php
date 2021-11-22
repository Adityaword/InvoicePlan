<!DOCTPE html>
<html>
<head>
<title>Clients Details</title>
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
<style> 
.w-5 { display: none}
</style>
</head>
<body>
<table class="table" >
<tr>
<th scope="col">Id</th>
<th scope="col">Client Name</th>
<th scope="col">Gender</th>
<th scope="col">Email</th>
<th scope="col">Contact</th>
<th scope="col">Address</th>
</tr> 

@foreach ($client as $client)
<tr>
<td><?php echo ($client->id) ?></td>
<td>{{$client->name}}</td>
<td><?php echo($client->gender)?></td>
<td>{{$client->email}}</td>
<td>{{$client->contact}}</td>
<td>{{$client->address}}</td>
</tr>
@endforeach
</table>

</body>
</html>