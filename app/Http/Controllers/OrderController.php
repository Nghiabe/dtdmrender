<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Slider;
use App\Models\OrderDetail;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Coupon;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;


session_start();

class OrderController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function manage_order(){


        $all_order = DB::table('order')
        ->join('customer','order.customer_id','=','customer.id')
        ->select('order.*','customer.FullName')
        ->orderby('order.id','desc')->get();
        $manager_order  = view('admin.manage_order')->with('all_order',$all_order);
        return view('index_Admin')->with('admin.manage_order', $manager_order);
    }
    public function handle_product($id){
        $dataUpdate = array(
            'order_status' => '1'

        );
        $ud= DB::table('order')->where('id',$id)->update($dataUpdate);
        $carts = session()->get('cart');

        $order_details = OrderDetail::where('order_id',$id)->get();
        $orders = Order::where('id',$id)->first();
        $customer = Customer::where('id', $orders->customer_id)->first();
        Mail::send('pages.Product.email', compact('customer', 'carts','orders', 'order_details'), function ($message) use($customer) {
            $message->from('nghiantk.21it@vku.udn.vn', 'Shop D&N');
            $message->to( $customer->email , $customer->email);
            $message->subject('Thông báo đặt hàng');
        });
        // $this->guiEmail($customer,  $email, $carts);
        foreach ($carts as $key => $item ){
            $user = DB::table('products')->where('product_id', $key)->first();
            $quantity = $item['quantity'];
           $quantity1 = $user->quantity - $quantity;
           $dataInsert = array(
            'quantity' => $quantity1

        );
           $ud= DB::table('products')->where('product_id',$key)->update($dataInsert);
        }
        return Redirect::to('manage-order');
    }

    public function view_order($id){

        $order_details = OrderDetail::where('order_id',$id)->get();
        //     $product = $pro->product_id;
        $order = Order::where('id',$id)->get();
        $orders = Order::where('id',$id)->first();
        foreach($order as $key => $ord){
            $customer_id = $ord->customer_id;
            // $shipping_id = $ord->shipping_id;
            $order_status = $ord->order_status;
        }


        $customer = Customer::where('id',$customer_id)->first();
        return view('admin.view_order')->with(compact('order_details','customer','order_details','orders','order_status'));
    }
    public function receipt($id){

        $order_details = OrderDetail::where('order_id',$id)->get();
        //     $product = $pro->product_id;
        $order = Order::where('id',$id)->get();

        $orders = Order::where('id',$id)->first();
        // dd($order_details);
        foreach($order as $key => $ord){
            $customer_id = $ord->customer_id;
            // $shipping_id = $ord->shipping_id;
            $order_status = $ord->order_status;
        }


        $customer = Customer::where('id',$customer_id)->first();
        return view('admin.Receipt')->with(compact('order_details','customer','order_details','orders','order_status'));
    }
}
