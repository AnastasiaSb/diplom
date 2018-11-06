<?php

namespace App\Models;
use Session; //103
// use Illuminate\Database\Eloquent\Model;

class Cart // extends Model удалили потому что будем работать только с сессияими
{
    public static function add($product, $qty) // 103
    {
    	
    	if( Session::get('cart.prod_' . $product->id) ) // узнаем есть ли уже товары в корзине. Есть ли елемент массива. ::get - считывает
    	{
    		$oldCount = Session::get('cart.prod_' . $product->id .'.qty'); // считали старое кол-во
    		Session::put('cart.prod_' . $product->id .'.qty', $qty+$oldCount); // перезаписали кол-во кот сейчас находиться в корзине
    	}
    	else {
    	// ['cart']['prod_12']['id']=12    =    Session::put('cart.prod_12.id', 12) // создаем ассцоаитивный массив для записи в сессию
    	Session::put('cart.prod_' . $product->id .'.id', $product->id);
    	Session::put('cart.prod_' . $product->id .'.name', $product->name);
    	Session::put('cart.prod_' . $product->id .'.price', $product->price);
    	Session::put('cart.prod_' . $product->id .'.imgPath', $product->imgPath);
    	Session::put('cart.prod_' . $product->id .'.qty', $qty);
    	}

    	self::totalSum(); // для счета общей суммы товаров 106
    }
    public static function totalSum() // 106
    {
    	$sum = 0;
    	foreach( Session::get('cart') as $product)
    	{
    		$sum+= $product['price'] * $product['qty'];		
    	}
    	Session::put('totalSum', $sum); // появилась новая сессия для подсчета суммы
    }
    public static function remove($id) // 108
    {
    	Session::forget('cart.prod_'.$id);
    	self::totalSum(); // пересчитывает сумму после удаления
    }
    public static function clear() // 109
    {
    	Session::forget('cart');
    	Session::forget('totalSum');
    }    
    public static function change($id, $count) // 110
    {
    	Session::put('cart.prod_'.$id.'.qty', $count);
    	self::totalSum();
    } 
}
