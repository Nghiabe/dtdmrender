<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<style>

    body {
  background-color: #eee;
}

.fs-12 {
  font-size: 12px;
}

.fs-15 {
  font-size: 15px;
}

.name {
  margin-bottom: -2px;
}

.product-details {
  margin-top: 13px;
}
</style>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">

            <div class="receipt bg-white p-3 rounded"><a class="navbar-brand" href="index.html"width="120">D&N</a>
                <h4 class="mt-2 mb-3"></h4>
                <div class="row">
                    <div class="col-md-6">
                <b class="name">Cửa hàng:</b><span class="">Cửa hàng cung cấp thực phẩm D&N</span>
                <br>
                <b class="name">Địa chỉ:</b><span class="">470 Trần Đại Nghĩa, Ngũ Hành Sơn, Đà Nẵng</span>
                <br>
                <b class="name">SDT:</b><span class="">470 Trần Đại Nghĩa, Ngũ Hành Sơn, Đà Nẵng</span>
                <hr>
            </div>
            <div class="col-md-6">
                <b class="name">Tên người nhận:</b><span class="">{{$customer->FullName}}</span>
                <br>
                <b class="name">Địa chỉ:</b><span class="">{{$customer->Address}}</span>
                <br>
                <b class="name">SDT:</b><span class="">{{$customer->phone}}</span>
                <hr>
            </div>

            </div>
                <div class="d-flex flex-row justify-content-between align-items-center order-details">
                    <div><span class="d-block fs-12">Ngày đặt hàng</span><span class="font-weight-bold">{{$orders->order_date}}</span></div>
                    <div><span class="d-block fs-12">Mã đơn hàng</span><span class="font-weight-bold">{{$orders->id}}</span></div>
                    <div><span class="d-block fs-12">Phương thức thanh toán</span><span class="font-weight-bold">Thanh toán khi nhận hàng</span><img class="ml-1 mb-1" src="https://i.imgur.com/ZZr3Yqj.png" width="20"></div>

                </div>
                <hr style="font-size: 30px">
                <h3>Thông tin sản phẩm</h3>
                @php
          $i=0;
          $subtotal=0;
          $total1=0;
          $total=0;
          @endphp
                @foreach($order_details as $key => $order_details)

        @php


        $i++;
        $subtotal = $order_details->price * $order_details->quantity;
        $total+= $subtotal;
        $total1 = $total+$orders->ship-$orders->coupon;

        @endphp
                <div class="d-flex justify-content-between align-items-center product-details" >
                    <p>{{$i}}</p>
                    <div class="d-flex flex-row product-name-image" style="margin-left:-500px;">
                        <div class="d-flex flex-column justify-content-between ml-0">
                            <div><span class="d-block font-weight-bold p-name">{{$order_details->Name}}</span></div><span class="fs-12">Số lượng: {{$order_details->quantity}}</span></div>
                    </div>
                    <div class="product-price">
                        <h5>{{number_format($order_details->price,0,',','.')}}đ</h5>
                    </div>
                </div>
                {{-- <hr style="width: 50%;
                margin-left: 25%;" > --}}
@endforeach
                <div class="mt-5 amount row">
                    <div class="d-flex justify-content-center col-md-6"><img src="https://i.imgur.com/AXdWCWr.gif" width="250" height="100"></div>
                    <div class="col-md-6">
                        <div class="billing">
                            <div class="d-flex justify-content-between"><span>Tổng tiền sản phẩm:</span><span class="font-weight-bold">{{number_format($subtotal,0,',','.')}}đ</span></div>
                            <div class="d-flex justify-content-between mt-2"><span>Phí vận chuyển</span><span class="font-weight-bold">{{$orders->ship}}</span></div>
                            <div class="d-flex justify-content-between mt-2"><span class="text-success">Giảm giá</span><span class="font-weight-bold text-success">{{$orders->coupon}}</span></div>
                            <hr>
                            <div class="d-flex justify-content-between mt-1"><span class="font-weight-bold">Tổng đơn hàng</span><span class="font-weight-bold text-success">{{number_format($total1,0,',','.')}}đ</span></div>
                        </div>
                    </div>

                <hr>
                <div class="d-flex justify-content-between align-items-center footer">
                    <div class="thanks"><span class="d-block font-weight-bold">Cảm ơn vì đã tin tưởng</span><span>D&N</span></div>
                    <div class="d-flex flex-column justify-content-end align-items-end"><span class="d-block font-weight-bold">Cần giúp đỡ?</span><span>Gọi - (84).236.3667117
                    </span></div>

                </div>

                <br> <br>  <br>
                <a href="{{ route('manage-order') }}" class="btnRegister"  style="color: #0d0d0d; ">In hóa đơn</a>
                <a href="{{ route('manage-order') }}" class="btnRegister"  style="color: #0d0d0d; ">Quay lại</a>

            </div>
        </div>
    </div>
</div>
