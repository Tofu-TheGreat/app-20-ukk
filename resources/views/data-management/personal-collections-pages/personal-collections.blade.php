@extends('data-management.index')

@section('contents')
    <div class="container mt-3">
        <div class="card mb-3 border border-1 rounded-5 border-primary">
            <h2 class="text-primary fw-bold d-flex align-items-center mt-3 ms-2"><i style="font-size: 30px;"
                    class='bx bxs-book-reader ms-1 me-1'> </i>Your Personal Collections
            </h2>
        </div>
        <div class="card">
            <div class="row mt-3 mb-3 ms-2">
                <div class="col col-md-3">
                    <div class="card h-100">
                        <img class="card-img h-100"
                            src="{{ asset('page_image/canva-brown-rusty-mystery-novel-book-cover-hG1QhA7BiBU.jpg') }}"
                            alt="Card image cap">

                        <div class="row position-absolute bottom-0 start-0 ms-2 mb-3">
                            <div class="col">
                                <a href="/book-detail-page" class="btn btn-primary">Detail</a>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                        data-bs-title="Remove from personal collections">
                                        <i class='bx bxs-trash-alt'></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

@endsection
