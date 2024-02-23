@extends('data-management.index')

@section('contents')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="container">
            <div class="card mb-3 border border-1 rounded-5 border-primary">
                <h2 class="text-primary fw-bold d-flex align-items-center mt-3 ms-2"><i style="font-size: 30px;"
                        class='bx bxs-calendar ms-1 me-1'> </i>Peminjaman {{ Auth::user()->role == 'user' ? '' : 'Table' }}
                </h2>
            </div>
            <div class="card-title btn btn-info">Daftar Peminjaman Tanpa Status</div>
            <div class="card">
                <div class="table-responsive mx-3 mt-4 mb-4">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Tgl. Peminjaman</th>
                                <th scope="col">Tgl. Pengembalian</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($peminjaman_nostatus as $item1)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $item1->user->nama_lengkap }}</td>
                                    <td>{{ $item1->tanggal_peminjaman }}</td>
                                    <td>{{ $item1->tanggal_pengembalian }}</td>
                                    <td>Buku 1, Buku 2</td>
                                    <td>{{ $item1->jumlah_pinjam }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#modal-ubah-no-status{{ $item1->id_peminjaman }}">Ubah
                                                        Status</button>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        data-bs-target="#edit-peminjaman-nostatus{{ $item1->id_peminjaman }}"
                                                        data-bs-toggle="modal">Edit</a>
                                                </li>
                                                <li><a class="dropdown-item text-danger"
                                                        href="/delete-peminjaman/{{ $item1->id_peminjaman }}">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

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
                                        <th scope="col">Nama Peminjam</th>
                                        <th scope="col">Tgl. Peminjaman</th>
                                        <th scope="col">Tgl. Pengembalian</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach ($peminjaman_dipinjam as $item2)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $item2->user->nama_lengkap }}</td>
                                            <td>{{ $item2->tanggal_peminjaman }}</td>
                                            <td>{{ $item2->tanggal_pengembalian }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><button class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#modal-ubah-status-dipinjam{{ $item2->id_peminjaman }}">Ubah
                                                                Status</button>
                                                        </li>
                                                        <li>
                                                            <form action="/hapus-status/{{ $item2->id_peminjaman }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-danger d-block dropdown-item">Hapus
                                                                    Status</button>
                                                            </form>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                data-bs-target="#edit-peminjaman-dipinjam{{ $item2->id_peminjaman }}"
                                                                data-bs-toggle="modal">Edit</a>
                                                        </li>
                                                        <li><a class="dropdown-item text-danger"
                                                                href="/delete-peminjaman/{{ $item2->id_peminjaman }}">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
                                        <th scope="col">Nama Peminjam</th>
                                        <th scope="col">Tgl. Peminjaman</th>
                                        <th scope="col">Tgl. Pengembalian</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach ($peminjaman_dikembalikan as $item3)
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>{{ $item3->user->nama_lengkap }}</td>
                                            <td>{{ $item3->tanggal_peminjaman }}</td>
                                            <td>{{ $item3->tanggal_pengembalian }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><button class="dropdown-item" data-bs-toggle="modal"
                                                                data-bs-target="#modal-ubah-status-dikembalikan{{ $item3->id_peminjaman }}">Ubah
                                                                Status</button>
                                                        </li>
                                                        <li>
                                                            <form action="/hapus-status/{{ $item3->id_peminjaman }}"
                                                                method="post">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-danger d-block dropdown-item">Hapus
                                                                    Status</button>
                                                            </form>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                data-bs-target="#edit-peminjaman-dikembalikan{{ $item3->id_peminjaman }}"
                                                                data-bs-toggle="modal">Edit</a>
                                                        </li>
                                                        <li><a class="dropdown-item text-danger"
                                                                href="/delete-peminjaman/{{ $item3->id_peminjaman }}">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="card-title btn btn-info mt-3">Peminjamanmu!</div>
                <div class="card">
                    <div class="table-responsive mx-3 mt-4 mb-4">
                        <table class="table" id="myTableDikembalikan">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Peminjam</th>
                                    <th scope="col">Tgl. Peminjaman</th>
                                    <th scope="col">Tgl. Pengembalian</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                ?>
                                @foreach ($peminjaman_user as $item4)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $item4->peminjaman->user->nama_lengkap }}</td>
                                        <td>{{ $item4->peminjaman->tanggal_peminjaman }}</td>
                                        <td>{{ $item4->peminjaman->tanggal_pengembalian }}</td>
                                        <td>{{ $item4->peminjaman->status_peminjaman == null ? 'Menunggu' : $item4->peminjaman->status_peminjaman }}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><button class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#modal-ubah-status-dikembalikan{{ $item4->id_peminjaman }}">Ubah
                                                            Status</button>
                                                    </li>
                                                    <li>
                                                        <form action="/hapus-status/{{ $item4->id_peminjaman }}"
                                                            method="post">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-danger d-block dropdown-item">Hapus
                                                                Status</button>
                                                        </form>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            data-bs-target="#edit-peminjaman-dikembalikan{{ $item4->id_peminjaman }}"
                                                            data-bs-toggle="modal">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item text-danger"
                                                            href="/delete-peminjaman/{{ $item4->id_peminjaman }}">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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
