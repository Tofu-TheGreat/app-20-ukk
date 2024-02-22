@extends('data-management.index')

@section('contents')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Layout Demo -->
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Welcome {{ Auth::user()->nama_lengkap }}!</h5>
                        <p class="mb-4">
                            Ready to do some action today?
                        </p>
                        <button class="btn btn-outline-primary ">Get Started</button>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{ asset('undraw_reading_book_re_kqpk.svg') }}" height="180" alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class="uil uil-books fs-2 text-success"></i>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Total Buku</span>
                        <h3 class="card-title mb-2">628 <span class="text-primary">Koleksi</span></h3>
                    </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class="uil uil-user-circle fs-2 text-success "></i>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Total User</span>
                        <h3 class="card-title mb-2">81 <span class="text-primary">User</span></h3>
                    </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class="uil uil-apps fs-2 text-success "></i>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Total Kategori</span>
                        <h3 class="card-title mb-2">50 <span class="text-primary">Kategori</span></h3>
                    </div>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <i class="uil uil-exchange fs-2 text-success "></i>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Total Peminjaman (today)</span>
                        <h3 class="card-title mb-2">15 <span class="text-primary">Peminjaman</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-5 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Buku Terbaru</h5>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                <a class="dropdown-item" href="javascript:void(0);">Go to Book Collections</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img class="card-img h-100"
                                        src="{{ asset('page_image/canva-brown-rusty-mystery-novel-book-cover-hG1QhA7BiBU.jpg') }}"
                                        alt="Card image cap">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Alfiansyah Bustomi</small>
                                        <h6 class="mb-0">The Uhuy Book</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">12</h6>
                                        <span class="text-muted">Stok</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img class="card-img h-100"
                                        src="{{ asset('page_image/canva-brown-rusty-mystery-novel-book-cover-hG1QhA7BiBU.jpg') }}"
                                        alt="Card image cap">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <small class="text-muted d-block mb-1">Haji Bolot</small>
                                        <h6 class="mb-0">The Gak Denger Book</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-1">
                                        <h6 class="mb-0">9</h6>
                                        <span class="text-muted">Stok</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                            style="position: relative;">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                <div class="card-title">
                                    <h5 class="text-nowrap mb-2">Peminjaman Report</h5>
                                    <span class="badge bg-label-warning rounded-pill">17 Jan 2024</span>
                                </div>
                                <div class="mt-sm-auto">
                                    <small class="text-success text-nowrap fw-semibold">Total Peminjaman</small>
                                    <h3 class="mb-0">15</h3>
                                </div>
                            </div>
                            <div id="profileReportChart" style="min-height: 80px;">
                                <div id="apexchartsr46e9p0y"
                                    class="apexcharts-canvas apexchartsr46e9p0y apexcharts-theme-light"
                                    style="width: 254px; height: 80px;"><svg id="SvgjsSvg2171" width="254"
                                        height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG2173" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 0)">
                                            <defs id="SvgjsDefs2172">
                                                <clipPath id="gridRectMaskr46e9p0y">
                                                    <rect id="SvgjsRect2178" width="255" height="85" x="-4.5"
                                                        y="-2.5" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskr46e9p0y"></clipPath>
                                                <clipPath id="nonForecastMaskr46e9p0y"></clipPath>
                                                <clipPath id="gridRectMarkerMaskr46e9p0y">
                                                    <rect id="SvgjsRect2179" width="250" height="84" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <filter id="SvgjsFilter2185" filterUnits="userSpaceOnUse" width="200%"
                                                    height="200%" x="-50%" y="-50%">
                                                    <feFlood id="SvgjsFeFlood2186" flood-color="#ffab00"
                                                        flood-opacity="0.15" result="SvgjsFeFlood2186Out"
                                                        in="SourceGraphic"></feFlood>
                                                    <feComposite id="SvgjsFeComposite2187" in="SvgjsFeFlood2186Out"
                                                        in2="SourceAlpha" operator="in"
                                                        result="SvgjsFeComposite2187Out"></feComposite>
                                                    <feOffset id="SvgjsFeOffset2188" dx="5" dy="10"
                                                        result="SvgjsFeOffset2188Out" in="SvgjsFeComposite2187Out">
                                                    </feOffset>
                                                    <feGaussianBlur id="SvgjsFeGaussianBlur2189" stdDeviation="3 "
                                                        result="SvgjsFeGaussianBlur2189Out" in="SvgjsFeOffset2188Out">
                                                    </feGaussianBlur>
                                                    <feMerge id="SvgjsFeMerge2190" result="SvgjsFeMerge2190Out"
                                                        in="SourceGraphic">
                                                        <feMergeNode id="SvgjsFeMergeNode2191"
                                                            in="SvgjsFeGaussianBlur2189Out"></feMergeNode>
                                                        <feMergeNode id="SvgjsFeMergeNode2192" in="[object Arguments]">
                                                        </feMergeNode>
                                                    </feMerge>
                                                    <feBlend id="SvgjsFeBlend2193" in="SourceGraphic"
                                                        in2="SvgjsFeMerge2190Out" mode="normal"
                                                        result="SvgjsFeBlend2193Out"></feBlend>
                                                </filter>
                                            </defs>
                                            <line id="SvgjsLine2177" x1="0" y1="0" x2="0"
                                                y2="80" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="80" fill="#b1b9c4" filter="none"
                                                fill-opacity="0.9" stroke-width="1"></line>
                                            <g id="SvgjsG2194" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG2195" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG2203" class="apexcharts-grid">
                                                <g id="SvgjsG2204" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine2206" x1="0" y1="0"
                                                        x2="246" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2207" x1="0" y1="20"
                                                        x2="246" y2="20" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2208" x1="0" y1="40"
                                                        x2="246" y2="40" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2209" x1="0" y1="60"
                                                        x2="246" y2="60" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine2210" x1="0" y1="80"
                                                        x2="246" y2="80" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG2205" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine2212" x1="0" y1="80" x2="246"
                                                    y2="80" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                                <line id="SvgjsLine2211" x1="0" y1="1" x2="0"
                                                    y2="80" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG2180" class="apexcharts-line-series apexcharts-plot-series">
                                                <g id="SvgjsG2181" class="apexcharts-series" seriesName="seriesx1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2184"
                                                        d="M 0 76C 17.22 76 31.980000000000004 12 49.2 12C 66.42 12 81.18 62 98.4 62C 115.62 62 130.38 22 147.6 22C 164.82 22 179.58 38 196.8 38C 214.02 38 228.78 6 246 6"
                                                        fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                        stroke-dasharray="0" class="apexcharts-line" index="0"
                                                        clip-path="url(#gridRectMaskr46e9p0y)"
                                                        filter="url(#SvgjsFilter2185)"
                                                        pathTo="M 0 76C 17.22 76 31.980000000000004 12 49.2 12C 66.42 12 81.18 62 98.4 62C 115.62 62 130.38 22 147.6 22C 164.82 22 179.58 38 196.8 38C 214.02 38 228.78 6 246 6"
                                                        pathFrom="M -1 120L -1 120L 49.2 120L 98.4 120L 147.6 120L 196.8 120L 246 120">
                                                    </path>
                                                    <g id="SvgjsG2182" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle2218" r="0" cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wq770qzm9 no-pointer-events"
                                                                stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2183" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine2213" x1="0" y1="0" x2="246"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine2214" x1="0" y1="0" x2="246"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG2215" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG2216" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG2217" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect2176" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG2202" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-18, 0)"></g>
                                        <g id="SvgjsG2174" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(255, 171, 0);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 392px; height: 117px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Layout Demo -->
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
@endsection
