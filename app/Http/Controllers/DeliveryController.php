<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Province;
use App\Models\Wards;
use App\Models\Freeship;

use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class DeliveryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function update_delivery(Request $request){
        $data = $request->all();
        $fee_ship = Freeship::find($data['Freeship_id']);
        $fee_value = rtrim($data['fee_value'],'.');
        $fee_ship->fee_Freeship = $fee_value;
        $fee_ship->save();
    }
    public function list_delivery(){
        $Freeship = Freeship::orderby('fee_id','DESC')->get();
        return view('admin.delivery.list_delivery')->with(compact('Freeship'));

    }
    public function delete_delivery($fee_id){
        $freeship = Freeship::find($fee_id);
        $freeship->delete();
        return Redirect::to('list-delivery');
    }
    public function insert_delivery(Request $request){
        $data = $request->all();
        $fee_ship = new Freeship();
        $fee_ship->fee_matp = $data['city'];
        $fee_ship->fee_maqh = $data['province'];
        $fee_ship->fee_xaid = $data['wards'];
        $fee_ship->fee_feeship = $data['fee_ship'];
        $fee_ship->save();

        return Redirect::to('delivery');

    }
    public function delivery(Request $request){

        $city = City::orderby('matp','ASC')->get();
        $province = Province::orderby('maqh','ASC')->get();
        $wards = Wards::orderby('xaid','ASC')->get();

        return view('admin.delivery.add_delivery')->with(compact('city'))->with(compact('province'))->with(compact('wards'));
    }
    public function select_delivery(Request $request){
        $data = $request->all();
        if($data['action']){
            $output = '';
            if($data['action']=="city"){
                $select_province = Province::where('matp',$data['matp'])->orderby('maqh','ASC')->get();
                    $output.='<option>---Chọn quận huyện---</option>';
                foreach($select_province as $key => $province){
                    $output.='<option value="'.$province->maqh.'">'.$province->name_quanhuyen.'</option>';
                }

            }else{

                $select_wards = Wards::where('maqh',$data['matp'])->orderby('xaid','ASC')->get();
                $output.='<option>---Chọn xã phường---</option>';
                foreach($select_wards as $key => $ward){
                    $output.='<option value="'.$ward->xaid.'">'.$ward->name_xaphuong.'</option>';
                }
            }
            echo $output;
        }

    }
}
