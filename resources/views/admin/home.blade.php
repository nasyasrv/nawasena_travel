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
                                <p class="card-text">64</p>
                            </div>
                        </div>
                        <div class="card flex-fill">
                            <div class="card-body">
                                <h5 class="card-title">Total Komentar</h5>
                                <p class="card-text">14</p>
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
            var options = {
                chart: {
                    type: "line",
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
                    x: {
                        show: false // Menghilangkan label bulan di tooltip saat hover
                    },
                    y: {
                        formatter: function (value, { seriesIndex, dataPointIndex, w }) {
                            let total = w.globals.series.reduce((sum, series) => sum + series[dataPointIndex], 0);
                            return `Value: ${value} <br> Total: ${total}`;
                        }
                    }
                },
                series: [
                    {
                        name: "Product A",
                        data: [10, 20, 30, 40, 50, 50],
                    },
                    {
                        name: "Product B",
                        data: [15, 25, 35, 45, 55, 50]
                    }
                ],
                xaxis: {
                    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                    tooltip: { enabled: false }
                },
                grid: {
                    xaxis: { lines: { show: false } } // Menghilangkan garis vertikal pada hover
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        });
    </script>
@endsection

