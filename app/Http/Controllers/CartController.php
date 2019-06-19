<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Mail;

class CartController extends Controller
{
    public function add($id)
    {  
      $product= Product::find($id);
      Cart::add([
        ['id' => $product->id, 'name' =>  $product->name, 'qty' => 1, 'price' =>  $product->price,'weight'=>'0','options' => ['img' =>$product->image]]    
      ]);

      return back();
    }
 
    public function show()
    {
      
        $categories = Category::all();
        $product_data =  Cart::content();
        $total_price = Cart::total();
        return view('shop.cart',compact('product_data','total_price','categories'));
    }

    public function detele($id)
    {
        if($id=='all'){
          Cart::destroy();
        }
        else{
          Cart::remove($id);
        }
      return back();
    }

    public function payment(Request $request)
    {
      $product_data =  Cart::content();
        $paymentData['info'] = $request->all();

      $total_price = Cart::total();
      $email = $request->email;
      Mail::send('shop.payment', $paymentData,function ($message) use ($email) {
          $message->from('thienht1997ttt@gmail.com', 'Flat Shop');
          $message->to($email, $email);
          $message->subject('Xác nhận hóa đơn mua hàng');
      });
      return redirect()->back();
    }
}

