@extends('admin.templates.default', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">R$</sup>
                                25,00
                            </h3>

                            <p>Ticket médio do mês</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>10</h3>

                            <p>Novos clientes cadastrados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>15</h3>

                            <p>Novos assinantes newsletter</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>23</h3>

                            <p>Total de pedidos</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h3>15</h3>

                            <p>Total de pedidos aprovados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <!-- small box -->
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3>8</h3>

                            <p>Total de pedidos aguardando</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="row">
            </div>
            <div class="row">
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>5</h3>

                            <p>Contatos realizados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>15</h3>

                            <p>E-mails de carrinho enviados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>7</h3>

                            <p>Conversões e-mails enviados</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>8</h3>

                            <p>Conversões e-mails não lidos</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Pedidos Totais
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart"
                                    style="position: relative; height: 300px;">
                                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </section>
                <!-- /.Left col -->
            </div>
            <div class="row">
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">R$</sup>
                                5.323,75
                            </h3>
                            <p>Total em vendas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-   -line"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">R$</sup>
                                5.233,75
                            </h3>

                            <p>Total pago</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>

                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>
                                10
                                <sup style="font-size: 20px">%</sup>
                            </h3>

                            <p>Taxa de pagamento</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <sup style="font-size: 20px">R$</sup>
                                252,23
                            </h3>

                            <p>Média de vendas diárias</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>

                        </div>
                        <a href="#" class="small-box-footer">Saiba mais <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
@section('scripts')
<script type="text/javascript">
  // Sales chart
var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
  //$('#revenue-chart').get(0).getContext('2d');

  var salesChartData = {
    labels  : ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho'],
    datasets: [
      {
        label               : 'Pedidos Totais',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [28, 48, 36, 19, 86, 50, 90]
      },
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines : {
          display : false,
        }
      }],
      yAxes: [{
        gridLines : {
          display : false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  var salesChart = new Chart(salesChartCanvas, { 
      type: 'line', 
      data: salesChartData, 
      options: salesChartOptions
    }
  )
// Donut Chart
var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
  var pieData        = {
    labels: [
        'Calças', 
        'Moletons',
        'Bermudas', 
    ],
    datasets: [
      {
        data: [50,12,27],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
      }
    ]
  }
  var pieOptions = {
    legend: {
      display: false
    },
    maintainAspectRatio : false,
    responsive : true,
  }
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  var pieChart = new Chart(pieChartCanvas, {
    type: 'doughnut',
    data: pieData,
    options: pieOptions      
  });
</script>
@endsection