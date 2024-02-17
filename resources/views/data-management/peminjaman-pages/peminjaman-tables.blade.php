@extends('data-management.index')

@section('contents')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="container">
            <div class="card mb-3 border border-1 rounded-5 border-primary">
                <h2 class="text-primary fw-bold d-flex align-items-center mt-3 ms-2"><i style="font-size: 30px;"
                        class='bx bxs-calendar ms-1 me-1'> </i>Peminjaman Table
                </h2>
            </div>
            <div class="card-title btn btn-info">Daftar Peminjaman Tanpa Status</div>
            <div class="card">
                <div class="table-responsive mx-3 mt-4 mb-4">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">JK</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Primary
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><button class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#modal-ubah-status" href="javascript:void(0);">Ubah
                                                    Status</button>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                            <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-md-6">
                    <div class="card-title btn btn-info">Daftar Dipinjam</div>
                    <div class="card">
                        <div class="table-responsive mx-3 mt-4 mb-4">
                            <table class="table" id="myTableDipinjam">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Primary
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><button class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#modal-ubah-status"
                                                            href="javascript:void(0);">Ubah
                                                            Status</button>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item text-danger"
                                                            href="javascript:void(0);">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="card-title btn btn-info">Daftar Dikembalikan</div>
                    <div class="card">
                        <div class="table-responsive mx-3 mt-4 mb-4">
                            <table class="table" id="myTableDikembalikan">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Primary
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><button class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#modal-ubah-status"
                                                            href="javascript:void(0);">Ubah
                                                            Status</button>
                                                    </li>
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                                    <li><a class="dropdown-item text-danger"
                                                            href="javascript:void(0);">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('data-management.peminjaman-pages.peminjaman-modals')
    <div class="content-backdrop fade"></div>
@endsection
