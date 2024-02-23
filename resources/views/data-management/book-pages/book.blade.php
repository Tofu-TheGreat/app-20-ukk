@extends('data-management.index')

@section('contents')
    <div class="container mt-3">
        <div class="card mb-3 border border-1 rounded-5 border-primary">
            <h2 class="text-primary fw-bold d-flex align-items-center mt-3 ms-2"><i style="font-size: 30px;"
                    class='bx bxs-book-reader ms-1 me-1'> </i>Book Collections
            </h2>
        </div>

        <a class="btn btn-warning mb-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            Tata cara pengisian
        </a>
        <div class="card">
            <div class="row mt-3 mb-3 ms-2">
                @foreach ($buku as $item)
                    <div class="col col-md-3 me-3">
                        <div class="card h-100">
                            <img class="card-img h-100" src="{{ asset('book_cover/' . $item->sampul_buku) }}"
                                alt="Card image cap">
                            <div class="row position-absolute top-0 start-0 mb-3">
                                <i class='bx bxs-up-arrow-circle fs-3 arrowup_colored text-card mt-2 mb-2'>
                                    <span class="fs-4">{{ $positive->where('id_buku', $item->id_buku)->count() }}</span>
                                </i>
                                <i class='bx bxs-down-arrow-circle fs-3 arrowdown_colored text-card'> <span
                                        class="fs-4">{{ $negative->where('id_buku', $item->id_buku)->count() }}</span></i>
                            </div>
                            <div class="row position-absolute bottom-0 start-0 ms-2 mb-3">
                                <div class="col-3 col-md-3 col-sm-auto  col-lg-3">
                                    <a href="{{ route('buku.show', $item->id_buku) }}" class="btn btn-primary">Detail</a>
                                </div>
                                <div class="col-5 col-md-4 col-sm-auto col-lg-4">
                                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'staff')
                                        <a href="/delete-buku/{{ $item->id_buku }}" class="btn btn-danger ms-2">Hapus</a>
                                    @endif
                                </div>
                                <?php
                                $koleksi = App\Models\KoleksiBuku::where('id_buku', $item->id_buku)
                                    ->where('id_user', Auth::user()->id)
                                    ->first();
                                ?>
                                @if (!$koleksi)
                                    <div class="col-6 col-md-5 col-sm-auto col-lg-5">
                                        <form action="{{ route('koleksi.store') }}" method="post">
                                            @csrf
                                            <input type="text" name="id_user" value="{{ Auth::user()->id }}" hidden
                                                id="">
                                            <input type="text" name="id_buku" value="{{ $item->id_buku }}" hidden
                                                id="">
                                            <button type="submit" class="btn btn-info" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Add to personal collections">
                                                <i class='bx bxs-star'></i>
                                            </button>
                                        </form>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach

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
        @if (Auth::user()->role != 'user')
            <button class="btn btn-primary rounded-circle py-3 px-4 position-fixed bottom-0 end-0 me-5 mb-5"
                data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fab fa-plus"></i></button>
        @endif
    </div>
    @include('data-management.book-pages.book-add')
@endsection
