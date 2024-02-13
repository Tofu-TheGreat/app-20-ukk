@extends('data-management.index')

@section('contents')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="container">
            <div class="card-title btn btn-info">Daftar Peminjaman Tanpa Status</div>
            <div class="card">
                <table class="table">
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
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Primary
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><button class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#modal-ubah-status" href="javascript:void(0);">Ubah
                                                Status</button>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Edit</a></li>
                                        <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row mt-3">
                <div class="col col-md-6">
                    <div class="card-title btn btn-info">Daftar Dipinjam</div>
                    <div class="card">
                        <table class="table">
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
                                                        data-bs-target="#modal-ubah-status" href="javascript:void(0);">Ubah
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
                <div class="col col-md-6">
                    <div class="card-title btn btn-info">Daftar Dikembalikan</div>
                    <div class="card">
                        <table class="table">
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
                                                        data-bs-target="#modal-ubah-status" href="javascript:void(0);">Ubah
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

    @include('data-management.peminjaman-pages.peminjaman-modals')
    <div class="content-backdrop fade"></div>
@endsection
