@extends('index_Admin')
@section('Admin_Content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý liên hệ
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
            <th>Họ và tên khách hàng</th>
            <th>Email</th>
            <th>Tiêu đề </th>
            <th>Tin nhắn</th>

          </tr>
        </thead>
        <tbody>
          @foreach($con as $key => $cou)
          <tr>

            <td>{{ $cou->name_contact }}</td>
            <td>{{ $cou->email_contact}}</td>
            <td>{{ $cou->title_contact}}</td>
            <td>{{ $cou->content_contact}}</td>



          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">


        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
             {!!$con->links()!!}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection
