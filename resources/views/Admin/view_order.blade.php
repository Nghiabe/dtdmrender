@extends('index_Admin')
@section('Admin_Content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin khách hàng
    </div>

    <div class="table-responsive">
      <table  class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>{{$customer->Name}}</td>
            <td>{{$customer->email}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<br><br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông tin vận chuyển
    </div>

    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Họ và tên người nhận</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Ghi chú</th>
            <th>Hình thức thanh toán</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>{{$customer->FullName}}</td>
            <td>{{$customer->Address}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->note}}</td>
            <td>


              {{-- {{$shipping->shipping_mehtod}}</td> --}}
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<br><br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê chi tiết đơn hàng
    </div>

    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Tổng tiền</th>
            <th style="width:30px;"></th>
          </tr>

        </thead>
        <tbody>
        @php
          $i=0;
          $total=0;
          @endphp
        @foreach($order_details as $key => $order_details)

        @php
        $i++;
        $subtotal = $order_details->price * $order_details->quantity;
        $total+= $subtotal;
        $total1 = $total+$orders->ship-$orders->coupon;

        @endphp
          <tr>

            <td>{{$i}}</td>
            <td>{{$order_details->Name}}</td>
            <td>{{$order_details->quantity}}</td>
            <td>{{number_format($order_details->price,0,',','.')}}đ</td>
            <td>{{number_format($subtotal,0,',','.')}}đ</td>
          </tr>

        @endforeach
        <tr>
            <td>Phí vận chuyển:</td>
            <td></td>
            <td></td>
            <td></td>

            <td>{{number_format($orders->ship,0,',','.')}}đ</td>
        </tr>
        <tr>
            <td>Giảm giá:</td>
            <td></td>
            <td></td>
            <td></td>

            <td>{{number_format($orders->coupon,0,',','.')}}đ</td>
        </tr>
        <tr>
            <td>Thanh toán:</td>
            <td></td>
            <td></td>
            <td></td>

            <td>{{number_format($total1,0,',','.')}}đ</td>
        </tr>

        </tbody>
      </table>
    </div>

  </div>
</div>

@endsection
