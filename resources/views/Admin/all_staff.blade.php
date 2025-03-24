@extends('index_Admin')
@section('Admin_Content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý nhân viên
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Họ và nhân viên</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Chức vụ</th>

          </tr>
        </thead>
        <tbody>
          @foreach($staff as $key => $cou)
          <tr>

            <td>{{ $cou->staff_name }}</td>
            <td>{{ $cou->staff_phone }}</td>
            <td>{{ $cou->staff_address }}</td>
            <td>{{ $cou->staff_position	 }}</td>


            <td>

              <a onclick="return confirm('Bạn có chắc là muốn xóa mã này ko?')" href="{{URL::to('/delete-coupon/'.$cou->coupon_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">


        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
             {!!$staff->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection
