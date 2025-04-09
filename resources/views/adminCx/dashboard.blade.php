@extends('index_Admin')
@section('Admin_Content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/gionkunz/chartist-js/master/dist/chartist.min.css">
    <link rel="stylesheet" href="https://rawgit.com/gionkunz/chartist-js/master/dist/chartist.min.css">
    <script src="https://rawgit.com/gionkunz/chartist-js/master/dist/chartist.min.js"></script>
    <title></title>
    <style>/* Card */
        .card {
          margin-bottom: 30px;
          border: none;
          border-radius: 5px;
          box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
        }

        .card-header,
        .card-footer {
          border-color: #ebeef4;
          background-color: #fff;
          color: #798eb3;
          padding: 15px;
        }

        .card-title {
          padding: 20px 0 15px 0;
          font-size: 18px;
          font-weight: 500;
          color: #012970;
          font-family: "Poppins", sans-serif;
        }

        .card-title span {
          color: #899bbd;
          font-size: 14px;
          font-weight: 400;
        }

        .card-body {
          padding: 0 20px 20px 20px;
        }

        .card-img-overlay {
          background-color: rgba(255, 255, 255, 0.6);
        }

        /* Alerts */
        .alert-heading {
          font-weight: 500;
          font-family: "Poppins", sans-serif;
          font-size: 20px;
        }

        /* Close Button */
        .btn-close {
          background-size: 25%;
        }

        .btn-close:focus {
          outline: 0;
          box-shadow: none;
        }</style>
</head>
<body>
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shop" style="font-size: 50px;
                        color: white;"> </i>
                    </div>
                     <div class="col-md-8 market-update-left">
                     <h4>Sản phẩm</h4>
                    <h3>{{$product}}</h3>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users" ></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                    <h4>Người dùng</h4>
                        <h3>{{$user}}</h3>

                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Doanh thu</h4>
                        @php
                        $total=0;
                        $total= $price- $coupon;
                        @endphp
                        <h3>{{number_format($total,0,',','.')}}</h3>

                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Đơn hàng</h4>
                        <h3>{{$order}}</h3>

                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
           <div class="clearfix"> </div>
        </div>
        <!-- //market-->


        <div class="market-updates">


            <div class="col-md-6 market-update-gd">
                <div class="market-update-block clr-block-5">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Doanh thu hôm nay </h4>

                         @php
                        $total=0;
                        $total_date= $price_date- $coupon_date;

                        @endphp


                        <h3>{{number_format($total_date,0,',','.')}} </h3>

                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-6 market-update-gd">
                <div class="market-update-block clr-block-6">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Đơn hàng hôm nay</h4>
                        <h3>{{$order_date}}</h3>

                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
           <div class="clearfix"> </div>
        </div>


        <div id="chart" style="height: 250px;"></div>


        <script>
            Morris.Bar({
              element: 'chart',
              @php
                    $date_1= $date_s -1;
                    $date_2= $date_s -2;
                    $date_3= $date_s -3;
                    $date_4= $date_s -4;
                @endphp
              data: [
                { date: {{$date_4}}, value: {{$order_date_4}} },
                { date: {{$date_3}}, value: {{$order_date_3}} },
                { date: {{$date_2}}, value: {{$order_date_2}} },
                { date: {{$date_1}}, value:{{$order_date_1}}},
                { date: {{$date_s}}, value: {{$order_date}} }
              ],
              xkey: 'date',
              ykeys: ['value'],
              labels: ['Đơn hàng']
            });
        </script>

        <div class="card">
            <div class="card-body">
              <h3 class="card-title" style="text-align: center; color:aliceblue">Biểu đồ cột giữa các ngày gần đây</h3>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                        label: 'Bar Chart',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->
              <div class="col-md-12">
              <script>
                $(document).ready(function() {
                    data = {
                        'labels': [01, 02, 03, 04,05, 06, 07, 08, 09, 10, 11, 12],
                        'series': [
                            [{{$order1}}, {{$order2}}, {{$order3}}, {{$order4}},{{$order5}}, {{$order6}}, {{$order7}},{{$order8}},{{$order9}},{{$order10}}, {{$order11}}, {{$order}}]
                        ]
                    };
                    new Chartist.Line('.ct-chart', data, {
                        showPoint: true,
                    }, );
                });
            </script>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row">
                        <div class="container-fluid d-flex justify-content-center">
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-header">Biểu đồ đường đơn hàng của các tháng</div>
                                    <div class="card-body" style="height: 420px">
                                        <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                            </div>
                                        </div>
                                        <div class=" ct-chart ct-square chartjs-render-monitor" style="display: block; width: 550px; height: 400px;"></div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script>$(document).ready(function(){

                                google.charts.load('current', {'packages':['corechart']});
                                   google.charts.setOnLoadCallback(drawChart);

                                   function drawChart() {

                                     var data = google.visualization.arrayToDataTable([
                                       ['Task', 'Hours per Day'],
                                       ['Rau củ',{{$ct1}}],
                                       ['Trái cây', {{$ct2}}],
                                       ['Thịt, cá', {{$ct3}}],
                                       ['Đồ khô', {{$ct4}}],
                                     ]);

                                     var options = {
                                       title: 'Biểu đồ tròn về danh mục sản phẩm trong tháng 12'
                                     };

                                     var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                     chart.draw(data, options);
                                   }


                             });</script>



                            <div class="col-md-5">

                    <div id="piechart" style="width: 700px; height: 500px;"></div>



                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


              <div class="agil-info-calendar">
                <!-- calendar -->
                <div class="col-md-6 agile-calendar">
                    <div class="calendar-widget">
                        <div class="panel-heading ui-sortable-handle">
                            <span class="panel-icon">
                              <i class="fa fa-calendar-o"></i>
                            </span>
                            <span class="panel-title"> Calendar Widget</span>
                        </div>
                        <!-- grids -->
                            <div class="agile-calendar-grid">
                                <div class="page">

                                    <div class="w3l-calendar-left">
                                        <div class="calendar-heading">

                                        </div>
                                        <div class="monthly" id="mycalendar"></div>
                                    </div>

                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                    </div>
                </div>


                <!-- //calendar -->
                <div class="col-md-6 w3agile-notifications">
                    <div class="notifications">
                        <!--notification start-->

                            <header class="panel-heading">
                                Notification
                            </header>
                            <div class="notify-w3ls">
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                            <li class="pull-right notification-time">1 min ago</li>
                                        </ul>
                                        <p>
                                            Urgent meeting for next proposal
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-danger">
                                    <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                                            <li class="pull-right notification-time">7 Hours Ago</li>
                                        </ul>
                                        <p>
                                            Very cool photo jack
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-success ">
                                    <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender">You have 5 message unread</li>
                                            <li class="pull-right notification-time">1 min ago</li>
                                        </ul>
                                        <p>
                                            <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-warning ">
                                    <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                                            <li class="pull-right notification-time">5 Days Ago</li>
                                        </ul>
                                        <p>
                                            Next 5 July Thursday is the last day
                                        </p>
                                    </div>
                                </div>
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                                            <li class="pull-right notification-time">1 min ago</li>
                                        </ul>
                                        <p>
                                            Urgent meeting for next proposal
                                        </p>
                                    </div>
                                </div>

                            </div>
                            {{-- dsgg --}}

                        <!--notification end-->
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
          </div>




</section>
</body>
</html>

@endsection
