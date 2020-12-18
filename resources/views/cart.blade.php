<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carts</title>
	
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
    @php
        $cart_products = $cart->cart_products;
    @endphp
    @if(count($cart_products) > 0)
    <h1>Your Carts</h1>
    <p>Customer: {{ $cart->user->name }}</p>
    <table border="1" style="width: 100%;">
        <thead>
            <th>No</th>
            <th>Product</th>
            <th>Price</th>
            <th>Sub Total</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($cart_products as $cp)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>
                    {{ $cp->product->name }} (x{{ $cp->qty }}) <br>
                    <img src="{{ $cp->product->photo_url }}" alt="" height="100"><br>
                </td>
                <td>Rp. {{ number_format($cp->product->price) }}</td>
                <td>Rp. {{ number_format($cp->product->price * $cp->qty) }}</td>
                <td>
                    <a href="{{ route('cart_delete', ['id' => $cp->product->id]) }}">Delete</button>
                </td>
            </tr>
            @endforeach
            <tr>
                <th colspan="3" style="text-align: left;">TOTAL</th>
                <td><h3>Rp. {{ number_format($cart->total) }}</h3></td>
                <td><a class="btn btn-primary" target="_blank" href="{{route('invoice', ['id_cart' => $cart->id]) }}">Print Invoice</a><br></td>
            </tr>
        </tbody>
    </table>
    @else
    <div style="text-align: center;">
        <h1>No Cart Data</h1>
        <a href="{{ route('products') }}">Shop a product</a>
    </div>
    @endif
    <br>
    <div style="text-align: center;">
        <a href="{{ route('home') }}">Back to Home</a>
    </div>
</body>
</html>