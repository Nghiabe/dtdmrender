@extends('index_Admin')
@section('Admin_Content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm vận chuyển
                        </header>

                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/insert-delivery')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn thành phố</label>
                                      <select name="city" id="city" class="form-control input-sm m-bot15 choose add_delivery">

                                            <option value="">--Chọn tỉnh thành phố--</option>
                                        @foreach($city as $key => $ci)
                                            <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn quận huyện</label>
                                      <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                            <option value="">--Chọn quận huyện--</option>
                                        @foreach($province as $key => $pro)
                                            <option value="{{$pro->maqh}}">{{$pro->name_quanhuyen}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn xã phường</label>
                                      <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                            <option value="">--Chọn xã phường--</option>
                                        @foreach($wards as $key => $wards)
                                            <option value="{{$wards->xaid}}">{{$wards->name_xaphuong}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phí vận chuyển</label>
                                    <input type="text" name="fee_ship" class="form-control fee_ship" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>

                                <button type="submit" name="add_delivery" class="btn btn-info add_delivery">Thêm phí vận chuyển</button>
                                </form>
                            </div>

                            <div id="load_delivery">

                            </div>

                        </div>
                    </section>

            </div>
            <script>
               $(document).ready(function(){
                $('.add_delivery').on('change',function(){
                   var city = $('.city').val();
                   var province = $('.province').val();
                   var wards  = $('.wards').val();


                });
                $('.choose').change(function(){
                    var action = $(this).attr('id');
                    var matp = $(this).val();
                    var _token = $('input[name = "_token"]').val();
                    var result = '';
                    if(action= 'city'){
                        result = 'province';
                    }else{
                        result='wards';
                    }
                    $.ajax({
                        url:{{('/select-delivery')}}
                        method:'POST',
                        data:{action:action,matp:matp, _token:_token},
                        success:function(data){
                            $'#'+result.html(data);
                        }
                    })
                });

               })


            </script>

@endsection
