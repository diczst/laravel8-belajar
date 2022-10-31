<!DOCTYPE html>
<html>
<head>
	<title>Eloquent One to One</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h5 class="text-center">Eloquent One To One Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Judul</th>
							<th>ISBN</th>
						</tr>
					</thead>
					<tbody>
						@foreach($bukus as $buku)
						<tr>
							<td>{{ $buku->judul }}</td>
							<td>{{ $buku->isbn->nomor }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
 
</body>
</html>