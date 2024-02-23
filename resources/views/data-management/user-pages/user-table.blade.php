@extends('data-management.index')

@section('contents')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="container">
            <div class="card mb-3 border border-1 rounded-5 border-primary">
                <h2 class="text-primary fw-bold d-flex align-items-center mt-3 ms-2"><i style="font-size: 30px;"
                        class='bx bxs-user-circle ms-1 me-1'> </i>User Table
                </h2>
            </div>
            <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah</a>
            <a href="/user-export" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                data-bs-title="Export Data User" class="btn btn-success mb-3"><i
                    class='bx bxs-spreadsheet'></i></a>
            <a class="btn btn-warning mb-3" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                Tata cara pengisian
            </a>
            <div class="card">
                <div class="table-responsive mx-3 mt-4 mb-4">
                    <table class="table " id="myTable">
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
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->nik }} </td>
                                    <td> {{ $item->username }}</td>
                                    <td>{{ $item->email }} </td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#modal-detail-"
                                                        href="javascript:void(0);">Detail</button>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('user.edit', $item->id) }}">Edit</a>
                                                </li>
                                                <li><a class="dropdown-item text-danger"
                                                        href="/delete-user-action/{{ $item->id }}">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            @include('data-management.user-pages.user-detail')

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="collapse mt-3" id="collapseExample">
                <div class="card mt-3 card-guide" style="backdrop-filter: blur(5px);">
                    <div class="card-body">
                        <p class="card-text text-warning-emphasis">Perhatikan tata cara pengisian form pada InLivre berikut
                            :</p>
                        <ul>
                            <li><span class="fw-bold">Pilih atau navigasikan ke halaman yang memuat formulir yang ingin Anda
                                    isi</span>. Contohnya Anda
                                mungkin perlu mengklik tombol yang sesuai
                                di menu utama.</li>
                            <li><span class="fw-bold">Mulailah dengan mengisi informasi identitas diri Anda seperti nama
                                    lengkap, alamat email,
                                    nomor telepon, dan alamat (jika diperlukan)</span>. Pastikan untuk memasukkan informasi
                                yang akurat
                                dan up-to-date.</li>
                            <li>
                                Jika formulir memiliki opsi atau pilihan, <span class="fw-bold">pilihlah yang paling sesuai
                                    dengan kebutuhan Anda.
                                    Misalnya, jika Anda diminta memilih jenis kelamin, pilih opsi yang relevan
                                    (Laki-laki/Perempuan)</span>.
                            </li>
                            <li>
                                Jika formulir merupakan pesanan atau permintaan layanan,<span class="fw-bold">masukkan
                                    detail yang diperlukan
                                    dengan jelas</span>. Ini mungkin termasuk deskripsi pesanan, jumlah barang, atau detail
                                spesifik
                                lainnya.
                            </li>
                            <li>
                                Jika formulir meminta Anda untuk mengunggah file seperti gambar, dokumen, atau formulir
                                tambahan, pastikan untuk <span class="fw-bold">melakukannya sesuai dengan petunjuk yang
                                    diberikan</span>.
                            </li>
                            <li>
                                Sebelum mengirimkan formulir, <span class="fw-bold">periksa kembali semua informasi yang
                                    telah Anda isi untuk
                                    memastikan semuanya benar dan lengkap</span>.
                            </li>
                            <li>
                                Setelah yakin semua informasi telah terisi dengan benar, <span class="fw-bold">klik tombol
                                    "Kirim" atau "Submit"
                                    untuk mengirimkan formulir</span>.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


    <div class="content-backdrop fade"></div>
@endsection
