@extends('admin.master')

@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
<article class="content dashboard-page">
    <section class="section">
        <div class="row sameheight-container">
            <div class="col col-12 col-sm-12 col-md-6 col-xl-5 stat-col">
                <div class="card sameheight-item" data-exclude="xs">
                    <div class="card-header card-header-sm bordered">
                        <div class="header-block">
                            <h3 class="title" style="font-size: 20px;">Tong so sach: 200 cuon</h3>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="form-group ">
                            <div class="row stat-icon">
                                <i class="fa fa-shopping-cart pl-1 pt-1 pr-1"></i>
                                <div class="name">Sach duoc muon</div>
                            </div>
                            <div class="stat">
                                <div class="value">1 cuon</div>
                            </div>
                            <div class="progress stat-progress">
                                <div class="progress-bar"
                                    style="width: 100%;"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row stat-icon">
                                <i class="fa fa-users pl-1 pt-1 pr-1"></i>
                                <div class="name">1</div>
                            </div>
                            <div class="stat">
                                <div class="value"> 1 </div>
                            </div>
                            <div class="progress stat-progress">
                                <div class="progress-bar"
                                    style="width: 10%;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row stat-icon">
                                <i class="fa fa-line-chart pl-1 pt-1 pr-1"></i>
                                <div class="name">1</div>
                            </div>
                            <div class="stat">
                                <div class="value">
                                   1 VNĐ
                                </div>
                            </div>
                            <div class="progress stat-progress">
                                <div class="progress-bar"
                                    style="width: 10%;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row stat-icon">
                                <i class="fa fa-dollar pl-1 pt-1 pr-1"></i>
                                <div class="name">1</div>
                            </div>
                            <div class="stat">
                                <div class="value">
                                   1 VNĐ </div>
                            </div>
                            <div class="progress stat-progress">
                                <div class="progress-bar"
                                    style="width: 10%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-xl-7 history-col">
                <div class="card sameheight-item" data-exclude="xs" id="dashboard-history">
                    <div class="card-header card-header-sm bordered">
                        <div class="header-block">
                            <h3 class="title" style="font-size: 20px;">1</h3>
                        </div>
                    </div>
                    <div class="card-block h-100" id='canvas-container'>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-xl-12">
                <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                    <div class="card-header bordered">
                        <div class="card-block">
                            <h3 class="title" style="font-size: 20px;">{{__('BestSeller')}}</h3>
                        </div>
                    </div>
                    <ul class="item-list striped">
                        <li class="item item-list-header">
                            <div class="item-row">
                                <div class="item-col item-col-th">
                                    <span></span>
                                </div>
                                <div class="item-col item-col-header item-col-title">
                                    <div>
                                        <span>{{__('BookTitles')}}</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-sales">
                                    <div>
                                        <span>{{__('Sales')}}</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-extant">
                                    <div class="no-overflow">
                                        <span>{{__('Extant')}}</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-price">
                                    <div>
                                        <span>{{__('Price')}}</span>
                                    </div>
                                </div>
                                <div class="item-col item-col-header item-col-date">
                                    <div>
                                        <span>{{__('Published')}}</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                       
                        <li class="item">
                            <div class="item-row">
                                <div class="item-col item-col-th">
                                    <div>
                                        <span> 1 </span>
                                    </div>
                                </div>
                                <div class="item-col item-col-title no-overflow">
                                    <div>
                                        <a>
                                            <h4 class="item-title no-wrap"> 1 </h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="item-col item-col-sales">
                                    <div class="item-heading">1</div>
                                    <div> 1</div>
                                </div>
                                <div class="item-col item-col-extant">
                                    <div class="item-heading">1</div>
                                    <div> 1 </div>
                                </div>
                                <div class="item-col item-col-price">
                                    <div class="item-heading">1</div>
                                    <div> 1 VNĐ </div>
                                </div>
                                <div class="item-col item-col-date">
                                    <div class="item-heading">1</div>
                                    <div> 1 </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
</article>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

</script>
@endsection