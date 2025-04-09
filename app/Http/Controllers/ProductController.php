<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Slider;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

   function add_product(){

        $cate_product = DB::table('category')->orderby('category_id','desc')->get();
        return view('admin.add_product')->with('cate_product', $cate_product);
    }
     function save_product(Request $request){

        $allRequest  = $request->all();
        $product_id  = $allRequest['product_id'];
        $product_name  = $allRequest['product_name'];
        $product_price = $allRequest['product_price'];
        $product_desc = $allRequest['product_desc'];
        $product_content  = $allRequest['product_content'];
        $category_id = $allRequest['product_cate'];
        $product_status = $allRequest['product_status'];
        $product_image = $allRequest['product_image'];
        $product_discout = $allRequest['product_discout'];
        $product_quantity = $allRequest['product_quantity'];
        $hot = $allRequest['hot'];

        $sale = $allRequest['sale'];

        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'product_id'  => $product_id,
            'Title'  => $product_name,
            'Price' => $product_price,
            'Discount' => $product_discout,
            'quantity' => $product_quantity,
            'product_desc' => $product_desc,
            'product_content'  => $product_content,
            'Category_ID' => $category_id,
            'product_status' => $product_status,
            'Thumbnail' =>   $product_image,
            'hot' =>   $hot,
            'sale' =>   $sale,
        );

        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('Asset\images',$new_image);
            $dataInsertToDatabase['Thumbnail'] = $new_image;
            DB::table('products')->insert($dataInsertToDatabase);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('add-product');
        }
        $data['product_image'] = '';

        DB::table('products')->insert($dataInsertToDatabase);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-product');
    }
    function all_product(){

        $all_product = DB::table('products')->join('category','category.Category_ID','=','products.Category_ID')->orderby('products.product_id','desc')->paginate(5);;
        $manage_product = view('admin.all_product')->with('all_product',$all_product);
        return view('index_Admin')->with('admin.all_product',$manage_product);
    }
     public function edit_product($product_id){

        $cate_product = DB::table('category')->orderby('Category_ID','desc')->get();

        $edit_product = DB::table('products')->where('product_id',$product_id)->get();

        $manager_product  = view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product);

        return view('index_Admin')->with('admin.edit_product', $manager_product);
    }
    public function update_product(Request $request,$product_id){

        $allRequest  = $request->all();
        $product_name  = $allRequest['product_name'];
        $product_price = $allRequest['product_price'];
        $product_discount = $allRequest['product_price'];
        $product_desc = $allRequest['product_desc'];
        $product_content  = $allRequest['product_content'];
        $category_id = $allRequest['product_cate'];
        $product_status = $allRequest['product_status'];
        // $product_image = $allRequest['product_image'];
        $hot = $allRequest['hot'];
        $new = $allRequest['new'];
        $sale = $allRequest['sale'];

        //Gán giá trị vào array
        $dataInsertToDatabase = array(

            'Title'  => $product_name,
            'Price' => $product_price,
            'Discount' => $product_discount,
            'product_desc' => $product_desc,
            'product_content'  => $product_content,
            'Category_ID' => $category_id,
            'product_status' => $product_status,
            // 'Thumbnail' =>   $product_image,
            'hot' =>   $hot,
            'new' =>   $new,
            'sale' =>   $sale,
        );

        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('Asset\images',$new_image);
            $dataInsertToDatabase['Thumbnail'] = $new_image;
            DB::table('products')->where('product_id',$product_id)->update($dataInsertToDatabase);
            return Redirect::to('all-product');
        }

        DB::table('products')->where('product_id',$product_id)->update($dataInsertToDatabase);
        return Redirect::to('all-product');
    }
    public function delete_product($product_id){

        DB::table('products')->where('product_id',$product_id)->delete();
        return Redirect::to('all-product');
    }
}
