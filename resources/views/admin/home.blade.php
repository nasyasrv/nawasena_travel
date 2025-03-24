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
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-lg-6 ">
                                <div class="card">
                                    <div class="card-body py-4 px-4">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl">
                                                <img src="{{asset('admin/assets/images/faces/2.jpg')}}" alt="Face 1">
                                            </div>
                                            <div class="ms-3 name">
                                                <h5 class="font-bold">Admin</h5>
                                                <h6 class="font-bold">@Admin_Nawasena</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6 ms-auto">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon purple mb-2">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="font-extrabold">Visitors</h6>
                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                <div class="stats-icon blue mb-2">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                <h6 class="font-extrabold">Komentar</h6>
                                                @if($review_count === 0)
                                                <h6 class="font-extrabold mb-0">0</h6>
                                                @else
                                                <h6 class="font-extrabold mb-0">{{$review_count}}</h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Profile Visit</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Latest Comments</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-lg">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Comment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($review as $row )
                                                <tr>
                                                    <td class="col-3">
                                                        <div class="d-flex align-items-center">
                                                            <p class="font-bold ms-3 mb-0">{{$row->name}}</p>
                                                        </div>
                                                    </td>
                                                    <td class="col-auto">
                                                        <p class=" mb-0">{{$row->comment}}</p>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                   <p>tidak ada komentar</p>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2025 &copy; Nawasena</p>
                </div>
            </div>
        </footer>
    </div>
    {{-- @dd($labels) --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var labels = @json($labels);
            var data = @json($data);

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
