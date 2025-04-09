<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use app\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function getcategory()
    {
        $blog = DB::table('blog')->get();
        $hot = DB::table('products') -> where('hot','1') ->get();
        return view('pages.sanpham', compact('hot', 'blog' )) ;


    }
    function add_category_product(){

        return view('admin.add_category_product');
    }
    function all_category_product(){

        $all_category_product = DB::table('category')->paginate(5);
        $manage_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
        return view('index_Admin')->with('admin.all_category_product',$manage_category_product);
    }

    function edit_category_product($category_product_id){

        $edit_category_product = DB::table('category')->where('category_id',$category_product_id)->get();
        $manage_category_product = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
        return view('index_Admin')->with('admin.edit_category_product',$manage_category_product);
    }

    function save_category_product(Request $request){

        // $data =array();
        // $data[category_name]=$request->category_product_name;
        // $data[category_desc]=$request->category_product_desc;
        // $data[category_status]=$request->category_product_status;
        $allRequest  = $request->all();
        $category_name  = $allRequest['category_product_name'];
        $category_id  = $allRequest['category_product_id'];
        $category_desc = $allRequest['category_product_desc'];
        $category_status = $allRequest['category_product_status'];

        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'Category_ID'  => $category_id,
            'Name'  => $category_name,
            'desc' => $category_desc,
            'status' => $category_status,

        );

        DB::table('category')->insert($dataInsertToDatabase);
        return Redirect::to('add-category-product');
    }

    function update_category_product(Request $request,$category_product_id){

        $allRequest  = $request->all();
        $category_name  = $allRequest['category_product_name'];
        $category_desc = $allRequest['category_product_desc'];
        $data = array(
            'Name'  => $category_name,
            'desc' => $category_desc,
        );
        DB::table('category')->where('Category_ID',$category_product_id)->update($data);
        // Session::put('message','Cập nhập danh mục thành công');
        return Redirect::to('all-category-product');

    }

    function delete_category_product($category_product_id){

        DB::table('category')->where('Category_ID',$category_product_id)->delete();
        // Session::put('message','Xóa danh mục thành công');
        return Redirect::to('all-category-product');

    }
}
