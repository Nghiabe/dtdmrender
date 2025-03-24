<table style="width: 100%; border-spacing: 0px">
    <tr>
        <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; width: 153px; padding: 5px;">
            <img src="Asset\images\logo.png" style="width: 153px; height: 153px;" />
        </td>
        <td style="border-top: 1px solid black;border-bottom: 1px solid black;border-right: 1px solid black; text-align: center; vertical-align: middle; padding: 5px;" colspan="3">
            <h1 style="color: red;">Cửa hàng thực phẩm D&N</h1>
        </td>
    </tr>
    <tr>
        <td colspan="4" style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black; padding: 5px;">
            Thông tin đơn hàng {{$orders->id}}
        </td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Tài khoản
            khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{$customer->Name}}</td>

        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Thời gian đặt hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{$orders->order_date}}</td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Email
            khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{$customer->email}}</td>

        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Người nhận:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{$customer->FullName}}</td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Địa chỉ
            khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{$customer->Address}}</td>

        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Địa chỉ người nhận:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{$customer->Address}}</td>
    </tr>
    <tr>
        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Số điện thoại
            khách hàng:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">{{$customer->phone}}</td>

        <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Lời chúc:</th>
        <td style="border-bottom: 1px solid black;border-right: 1px solid black; padding: 5px;">Cảm ơn quý khách đã tin tưởng và sử dụng sản phẩm của chúng tôi. Chúc quý khách một ngày tốt đẹp.</td>
    </tr>

</table>
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liệt kê chi tiết đơn hàng
      </div>

      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th  style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">STT</th>
              <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Tên sản phẩm</th>
              <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Số lượng</th>
              <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Giá</th>
              <th style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Tổng tiền</th>
              <th  style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></th>
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

              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">{{$i}}</td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">{{$order_details->Name}}</td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">{{$order_details->quantity}}</td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">{{number_format($order_details->price,0,',','.')}}đ</td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">{{number_format($subtotal,0,',','.')}}đ</td>
            </tr>

          @endforeach
          <tr>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Phí vận chuyển:</td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></td>

              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">{{number_format($orders->ship,0,',','.')}}đ</td>
          </tr>
          <tr>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Giảm giá:</td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></td>

              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">{{number_format($orders->coupon,0,',','.')}}đ</td>
          </tr>
          <tr>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">Thanh toán:</td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></td>
              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;"></td>

              <td style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;text-align: right; padding: 5px;">{{number_format($total1,0,',','.')}}đ</td>
          </tr>

          </tbody>
        </table>
      </div>

    </div>
  </div>
