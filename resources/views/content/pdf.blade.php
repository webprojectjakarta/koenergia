<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pemakaian</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<img src="{{'asset/images/logo.png'}}" alt="Logo" width="50%">
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>title</th>
				<th>content</th>
				<th>image</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$data1}}</td>
				<td>{{$data}}</td>
				<td>{{$data}}</td>
			</tr>
		</tbody>
	</table>

</body>
</html>