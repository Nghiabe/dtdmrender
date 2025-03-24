<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use app\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

session_start();

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function admin(){
        // $user = Auth::guard('auth')->user();
        return view('index_Admin');
    }
    public function show_dashboard(){
        $product = DB::table('products')->count();
        $user = DB::table('user')->count();
        $price = DB::table('order_details')->whereMonth('date', '12')->sum('price');
        $coupon= DB::table('order')->whereMonth('order_date', '12')->sum('coupon');
        $order1 = DB::table('order')->whereMonth('order_date', '01')->count();
        $order2 = DB::table('order')->whereMonth('order_date', '02')->count();
        $order3 = DB::table('order')->whereMonth('order_date', '03')->count();
        $order4 = DB::table('order')->whereMonth('order_date', '04')->count();
        $order5 = DB::table('order')->whereMonth('order_date', '05')->count();
        $order6 = DB::table('order')->whereMonth('order_date', '06')->count();
        $order7 = DB::table('order')->whereMonth('order_date', '07')->count();
        $order8 = DB::table('order')->whereMonth('order_date', '08')->count();
        $order9 = DB::table('order')->whereMonth('order_date', '09')->count();
        $order10 = DB::table('order')->whereMonth('order_date', '10')->count();
        $order11 = DB::table('order')->whereMonth('order_date', '11')->count();
        $order = DB::table('order')->whereMonth('order_date', '12')->count();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date=date("Y-m-d");
        $ct1 = DB::table('order_details')->where('Category_id', '1')->whereMonth('date', '12')->count();
        $ct2 = DB::table('order_details')->where('Category_id', '2')->whereMonth('date', '12')->count();
        $ct3 = DB::table('order_details')->where('Category_id', '3')->whereMonth('date', '12')->count();
        $ct4 = DB::table('order_details')->where('Category_id', '4')->whereMonth('date', '12')->count();
        $coupon_date= DB::table('order')->where('order_date',$date )->sum('coupon');
        $price_date = DB::table('order_details')->where('date',$date )->sum('price');
        $order_date = DB::table('order')->where('order_date',$date )->count();
        $date_1 = date('Y-m-d', strtotime("-1 days"));
        $date_2 = date('Y-m-d', strtotime("-2 days"));
        $date_3 = date('Y-m-d', strtotime("-3 days"));
        $date_4 = date('Y-m-d', strtotime("-4 days"));
        $date_s=date("d");
        $order_date_1 = DB::table('order')->where('order_date',$date_1 )->count();
        $order_date_2 = DB::table('order')->where('order_date',$date_2 )->count();
        $order_date_3 = DB::table('order')->where('order_date',$date_3 )->count();
        $order_date_4 = DB::table('order')->where('order_date',$date_4 )->count();
    //    $db=DB::table('order')
    //            ->whereMonth('created_at', '12')
    //            ->count();
    //            dd($db);
        return view('Admin.dashboard', compact('product', 'user', 'price', 'order1','order2','order3','order4','order5','order6','order7','order8','order9','order10','order11','order', 'order_date', 'date', 'price_date', 'coupon', 'coupon_date', 'date', 'date_s', 'order_date_1', 'order_date_2', 'order_date_3', 'order_date_4','ct1', 'ct2', 'ct3', 'ct4'));
        // $this->AuthLogin();
    }

    public function logout(){
        // $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
