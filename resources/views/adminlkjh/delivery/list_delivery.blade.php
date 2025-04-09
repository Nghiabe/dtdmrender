@extends('index_Admin')
@section('Admin_Content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê phí vận chuyển
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>
      </div>
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
            <th>Tên thành phố</th>
            <th>Tên quận huyện</th>
            <th>Tên xã phường</th>
            <th>Phí ship</th>
          </tr>
        </thead>
        <tbody>

        @foreach($Freeship as $key => $fee)
          <tr>
            <td>{{ $fee->city->name_city }}</td>
            <td>{{ $fee->province->name_quanhuyen }}</td>
            <td>{{ $fee->wards->name_xaphuong }}</td>
            <td>{{ $fee->fee_feeship }}</td>
            <td>
              <a onclick="return confirm('Bạn có chắc là muốn xóa mã này ko?')" href="{{URL::to('/delete-delivery/'.$fee->fee_id)}}" class="active styling-edit" ui-toggle-class="">
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

        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>

      </div>
    </footer>
  </div>
</div>

@endsection
