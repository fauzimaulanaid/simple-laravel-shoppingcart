<!DOCTYPE html>
<html>
<head>
	<title>Invoice PDF</title>
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
		<h5>Product Receipts</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Product</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			@php $index=1 @endphp
			@foreach($cart_products as $cp)
			<tr>
				<td>{{ $index++ }}</td>
				<td>{{$cp->product->name}}</td>
				<td>{{$cp->product->price}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
