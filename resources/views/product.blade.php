<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
	<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		  background-color: #4CAF50;
		  color: white;
		}
		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
    <h1>Badminton Racket Products</h1>
    <table border="1" style="width: 100%;">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($products as $p)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $p->name }}</td>
                <td><img src="{{ $p->photo_url }}" alt="" height="100"></td>
                <td>{{ number_format($p->price) }}</td>
                <td style="max-width: 300px;">{{ $p->description }}</td>
                <td>
                    <form action="{{ route('add_to_cart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_product" value="{{ $p->id }}">
                        <input type="hidden" name="qty" value="1">
                        <button type="submit">Add to cart</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <div style="text-align: center;">
        <a href="{{ route('home') }}">Back to Home</a>
    </div>
</body>
</html>