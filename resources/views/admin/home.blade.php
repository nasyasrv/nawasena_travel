@extends('admin.layouts.app')
@section('content')
    <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-6 d-flex flex-md-column flex-row gap-3">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <h5 class="card-title">Total Mobil</h5>
                                <p class="card-text">{{$allCar}}</p>
                            </div>
                        </div>
                        <div class="card flex-fill">
                            <div class="card-body">
                                <h5 class="card-title">Total Komentar</h5>
                                <p class="card-text">{{$allReview}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Chart</h5>
                                <div id="chart-container">
                                    <div id="chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var labels = @json($labels);
            var data = @json($data);

            var options = {
                chart: {
                    type: "bar",
                    toolbar: { show: false }
                },
                stroke: {
                    curve: "smooth"
                },
                markers: {
                    size: 2
                },
                tooltip: {
                    shared: false,
                    y: {
                        formatter: function (value, { seriesIndex, dataPointIndex, w }) {
                            let total = w.globals.series.reduce((sum, series) => sum + series[dataPointIndex], 0);
                            return `Value: ${value} <br> Total: ${total}`;
                        }
                    }
                },
                series: [
                    {
                        name: "Total Visits",
                        data: data
                    }
                ],
                xaxis: {
                    categories: labels,
                    tooltip: { enabled: false }
                },
                grid: {
                    xaxis: { lines: { show: false } }
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        });
    </script>
@endsection

