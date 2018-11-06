@if(session('cart'))
	<!-- {{var_dump(session('cart'))}} -->
	<table class="table"> <!-- 105 -->
		<thead>
			<tr>
				<th>Изображение</th>
				<th>Название</th>
				<th>Количество</th>
				<th>Цена</th>
				<th>Стоимость</th>
				<th>Удаление</th>
			</tr>
		</thead>
		<tbody>
			@foreach(session('cart') as $product)
			<tr>
				<td><img src="{{ $product['imgPath'] }}" style="width:
				80px"></td>
				<td>{{ $product['name'] }}</td>
				<!-- <td>{{ $product['qty'] }}</td> -->
				<td>
					<input type="number" value="{{ $product['qty'] }}" data-id="{{$product['id']}}" class="product-change"> <!-- 110 -->
				</td> 
				<td>{{ $product['price'] }} грн</td>
				<td>{{ $product['price'] * $product['qty'] }} грн</td>
				<td><button class="btn btn-danger remove-product" data-id="{{$product['id']}}">Удалить</button></td> <!-- 108 записывает data-id что бы удалять ajax запросом -->
			</tr>
			@endforeach
		</tbody>
		<tfoot>
			<tr>
				<td colspan="4" class="text-right">Total:</td> <!-- 107 -->
				<td colspan="2">{{session('totalSum')}} грн</td> <!-- 107 -->
			</tr>
		</tfoot>
	</table>
@else
	Your cart is empty
@endif		