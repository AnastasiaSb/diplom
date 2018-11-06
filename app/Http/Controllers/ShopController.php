<?php

namespace App\Http\Controllers;

use App\Shop\Comments\Comment;
use Illuminate\Http\Request;
use App\Shop\Categories\Category;
use App\Shop\Products\Product;
use App\Shop\Carts\Cart;
use App\Shop\Orders\Order;
use App\Shop\Orders\OrderItem;
class ShopController extends Controller
{
    public function product($slug)
    {
    	$product = Product::where('slug', '=', $slug)->first();
    	$comments= Comment::where('product_id', '=', $product->id)->get();
    	return view('shop.product', compact('product','comments'));
    }
    public function addProduct(Request $request) // 102 - мы сюда отправили данные с ajax
    {
    	$product = Product::find($request->product_id); // получаем все данные по этому товару
    	Cart::add($product, $request->qty); // получаем кол-во выбранного товара 
    	return view('shop.cart');
    }
    public function removeProduct(Request $request) // 108 - мы сюда отправили данные с ajax
    {
    	 Cart::remove($request->id); // получаем кол-во выбранного товара 
    	return view('shop.cart');
    }
    public function clearCart() // 109 - мы сюда отправили данные с ajax
    {
    	Cart::clear(); // очищаем
    	return view('shop.cart');
    }    
    public function productChange(Request $request) // 110 - мы сюда отправили данные с ajax
    {
    	Cart::change($request->id, $request->count); 
    	return view('shop.cart');
    }   
    public function checkout()
    {
    	return view('shop.checkout');
    }
    public function checkoutEnd(Request $request) // 112
    {
        
    	// в БД добавить заказ
        $order = new Order;
        $order->totalSum = session('totalSum');
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->phone = $request->phone;
        $order->adress = $request->adress;
        $order->save(); // теперь после ввода данных покупателя данные попадают в таблицу orders

    	foreach (session('cart') as $product) {
            $item = new OrderItem;
            $item->order_id = $order->id;
            $item->product_name = $product['name'];
            $item->product_price = $product['price'];
            $item->product_qty = $product['qty'];
            $item->product_imgPath = $product['imgPath'];
            $item->save(); // проверитьь orders и order_item таблицы

        }

        // Выслать письма админу и заказщику
        
        
    	
    	// переадресация страницы
        \Mail::send('mail.newOrderAdmin', ['order'=>$order], function($message){ // 117 метод который будет отправлять письмо админу, 1й путь к виду письма, 2-что отправляем, 3й 
            $message->from('saface89@gmail.com');
            $message->to('saface89@gmail.com')->subject('Новый заказ');
        }); 

        \Mail::send('mail.newOrderUser', ['order'=>$order], function($message) use($order) { // 118 отправку письма заказчику 
            $message->from('saface89@gmail.com');
            $message->to($order->email)->subject('Ваш заказ');
        }); 
          // Очистить корзину
        Cart::clear(); // 119
        return redirect('/')->with('success', 'Ваш заказ поступил в обработку');

        }
        public function category($slug){ // 123
            $categories = Category::where('slug', '=', $slug)->first();
            $products = Product::where('category_id', '=', $categories->id)->get();// get получит все товар
            return view('shop.category', compact('category', 'products'));
        }
}
