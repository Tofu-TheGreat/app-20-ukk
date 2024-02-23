@extends('data-management.index')

@section('contents')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="container">
            <div class="card mb-3 border border-1 rounded-5 border-primary">
                <h2 class="text-primary fw-bold d-flex align-items-center mt-3 ms-2"><i style="font-size: 30px;"
                        class='bx bxs-calendar ms-1 me-1'> </i>Peminjaman {{ Auth::user()->role == 'user' ? '' : 'Table' }}
                </h2>
            </div>
            @if (Auth::user()->role == 'admin' || Auth::user()->role == 'staff')
                <div class="card-title btn btn-info">Daftar Peminjaman Tanpa Status</div>
                <a href="/export-peminjaman-no-status" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-custom-class="custom-tooltip" data-bs-title="Export Data Peminjaman No Status"
                    class="btn btn-success mb-3"><i class='bx bxs-spreadsheet'></i></a>
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
                                    <?php
                                    $jml = App\Models\DetailPeminjaman::select('jumlah_pinjam')
                                        ->where('id_peminjaman', $item1->id_peminjaman)
                                        ->first();
                                    $buku = App\Models\DetailPeminjaman::where('id_peminjaman', $item1->id_peminjaman)
                                        ->with('buku')
                                        ->get();

                                    ?>
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $item1->user->nama_lengkap }}</td>
                                        <td>{{ $item1->tanggal_peminjaman }}</td>
                                        <td>{{ $item1->tanggal_pengembalian }}</td>
                                        <td>
                                            @foreach ($buku as $buku)
                                                {{ $buku = $buku->buku->judul_buku }} ,
                                            @endforeach
                                        </td>
                                        <td>{{ $jml->jumlah_pinjam ?? 'Jumlah Dikembalikan' }}</td>
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
                    <div class="col">
                        <div class="card-title btn btn-info">Daftar Dipinjam</div>
                        <a href="/export-peminjaman-dipinjam" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Export Data Peminjaman Status Dipinjam"
                            class="btn btn-success mb-3"><i class='bx bxs-spreadsheet'></i></a>
                        <div class="card">
                            <div class="table-responsive mx-3 mt-4 mb-4">
                                <table class="table" id="myTableDipinjam">
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
                                        @foreach ($peminjaman_dipinjam as $item2)
                                            <?php
                                            $jml = App\Models\DetailPeminjaman::select('jumlah_pinjam')
                                                ->where('id_peminjaman', $item2->id_peminjaman)
                                                ->first();
                                            $buku = App\Models\DetailPeminjaman::where('id_peminjaman', $item2->id_peminjaman)
                                                ->with('buku')
                                                ->get();

                                            ?>
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item2->user->nama_lengkap }}</td>
                                                <td>{{ $item2->tanggal_peminjaman }}</td>
                                                <td>{{ $item2->tanggal_pengembalian }}</td>
                                                <td>
                                                    @foreach ($buku as $buku)
                                                        {{ $buku = $buku->buku->judul_buku }} ,
                                                    @endforeach
                                                </td>
                                                <td>{{ $jml->jumlah_pinjam ?? 'Jumlah Dikembalikan' }}</td>
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
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="card-title btn btn-info">Daftar Dikembalikan</div>
                        <a href="/export-peminjaman-dikembalikan" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Export Data Peminjaman Status Dikembalikan"
                            class="btn btn-success mb-3"><i class='bx bxs-spreadsheet'></i></a>
                        <div class="card">
                            <div class="table-responsive mx-3 mt-4 mb-4">
                                <table class="table" id="myTableDikembalikan">
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
                                        @foreach ($peminjaman_dikembalikan as $item3)
                                            <?php
                                            $jml = App\Models\DetailPeminjaman::select('jumlah_pinjam')
                                                ->where('id_peminjaman', $item3->id_peminjaman)
                                                ->first();
                                            $buku = App\Models\DetailPeminjaman::where('id_peminjaman', $item3->id_peminjaman)
                                                ->with('buku')
                                                ->get();

                                            ?>
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item3->user->nama_lengkap }}</td>
                                                <td>{{ $item3->tanggal_peminjaman }}</td>
                                                <td>{{ $item3->tanggal_pengembalian }}</td>
                                                <td>
                                                    @foreach ($buku as $buku)
                                                        {{ $buku = $buku->buku->judul_buku }} ,
                                                    @endforeach
                                                </td>
                                                <td>{{ $jml->jumlah_pinjam ?? 'Jumlah Dikembalikan' }}</td>
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


                <div class="row mt-3">
                    <div class="col">
                        <div class="card-title btn btn-info ">Semua Peminjaman</div>
                        <a href="/export-peminjaman-all" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip" data-bs-title="Export Data Semua Peminjaman"
                            class="btn btn-success mb-3"><i class='bx bxs-spreadsheet'></i></a>
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
                                            <th scope="col">Buku</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Cetak Struk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        ?>
                                        @foreach ($peminjaman as $item5)
                                            <?php
                                            $jml = App\Models\DetailPeminjaman::select('jumlah_pinjam')
                                                ->where('id_peminjaman', $item5->id_peminjaman)
                                                ->first();
                                            $buku = App\Models\DetailPeminjaman::where('id_peminjaman', $item5->id_peminjaman)
                                                ->with('buku')
                                                ->get();

                                            ?>
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item5->user->nama_lengkap }}</td>
                                                <td>{{ $item5->tanggal_peminjaman }}</td>
                                                <td>{{ $item5->tanggal_pengembalian }}</td>
                                                <td>{{ $item5->status_peminjaman == null ? 'Menunggu' : $item5->status_peminjaman }}
                                                </td>
                                                <td>
                                                    @foreach ($buku as $buku)
                                                        {{ $buku = $buku->buku->judul_buku }} ,
                                                    @endforeach
                                                </td>
                                                <td>{{ $jml->jumlah_pinjam ?? 'Jumlah Dikembalikan' }}</td>
                                                <td><button class="btn btn-primary"><i
                                                            class='bx bxs-printer'></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if (Auth::user()->role == 'user')
                <div class="row">
                    <div class="col">
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
                                            <th scope="col">Buku</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        ?>
                                        @foreach ($peminjaman_user as $item4)
                                            <?php
                                            $jml = App\Models\DetailPeminjaman::select('jumlah_pinjam')
                                                ->where('id_peminjaman', $item4->id_peminjaman)
                                                ->first();
                                            $buku = App\Models\DetailPeminjaman::where('id_peminjaman', $item4->id_peminjaman)
                                                ->with('buku')
                                                ->get();

                                            ?>
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item4->user->nama_lengkap }}</td>
                                                <td>{{ $item4->tanggal_peminjaman }}</td>
                                                <td>{{ $item4->tanggal_pengembalian }}</td>
                                                <td>{{ $item4->status_peminjaman == null ? 'Menunggu' : $item4->status_peminjaman }}
                                                </td>
                                                <td>
                                                    @foreach ($buku as $buku)
                                                        {{ $buku = $buku->buku->judul_buku }} ,
                                                    @endforeach
                                                </td>
                                                <td>{{ $jml->jumlah_pinjam ?? 'Jumlah Dikembalikan' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @include('data-management.peminjaman-pages.peminjaman-modals')
    <div class="content-backdrop fade"></div>
@endsection
