@extends('data-management.index')

@section('contents')
    <form action="" method="post">
        @csrf
        <div class="container-fluid flex-grow-1 container-p-y d-flex align-items-center">
            <div class="container">
                <div class="card mb-3 border border-1 rounded-5 border-primary">
                    <h2 class="text-primary fw-bold d-flex align-items-center mt-3 ms-2"><i style="font-size: 30px;"
                            class='bx bxs-book-open ms-1 me-1'> </i>Detail Buku
                    </h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-md-4"><img class ="img-fluid mt-3"
                                    src="{{ asset('book_cover/' . $buku->sampul_buku) }}" alt="">
                                <div class="d-flex justify-content-center mt-3">
                                    <i class='bx bxs-up-arrow-circle fs-3 arrowup_colored '>
                                        <span class="fs-4">47</span>
                                    </i>
                                    <i class='bx bxs-down-arrow-circle fs-3 arrowdown_colored ms-4'> <span
                                            class="fs-4">2</span></i>
                                </div>
                            </div>
                            <div class="col col-md">
                                <div class="mb-2">
                                    <label for="" class="form-label">Judul Buku</label>
                                    <input readonly type="text" value="{{ $buku->judul_buku }}" name="judul_buku"
                                        class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="..." />
                                </div>
                                <div class="mb-3">
                                    <label for="defaultSelect" class="form-label">Kategori Buku</label>
                                    <select disabled id="defaultSelect" name="id_kategori[]" multiple="multiple"
                                        class="form-select">
                                        <option value="L">Laki-Laki</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Penulis Buku</label>
                                    <input readonly type="text" value="{{ $buku->penulis_buku }}" name="penulis_buku"
                                        class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="..." />
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Penerbit Buku</label>
                                    <input readonly type="text" value="{{ $buku->penerbit }}" name="penerbit_buku"
                                        class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="..." />
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Tahun Terbit</label>
                                    <input readonly type="text" value="{{ $buku->tahun_terbit }}" name="tahun_terbit"
                                        class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="..." />
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Sinopsis Buku</label>
                                    <textarea readonly class="form-control" name="sinopsis_buku" id="" rows="3">{{ $buku->sinopsis_buku }}</textarea>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Stok Buku</label>
                                    <input readonly type="number" name="stok_buku" value="{{ $buku->stok_buku }}"
                                        class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="..." />
                                </div>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col col-md">
                                <button type="button" data-bs-target="#modalPinjam" data-bs-toggle="modal"
                                    class="btn btn-primary">Pinjam</button>

                                <button type="button" data-bs-toggle="modal"
                                    data-bs-target="#modalEdit{{ $buku->id_buku }}" class="btn btn-primary">Edit</button>
                            </div>

                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary mt-3 ms-1 mb-2" data-bs-toggle="modal"
                    data-bs-target="#modalId" aria-pressed="false" autocomplete="off">
                    Ulas Buku
                </button>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ulasan</h4>
                        <hr>
                        <div class="row mt-3">
                            <div class="col col-md-10">
                                <div>Username</div>
                                <div class="mb-3">Tanggal</div>
                                <div>Ulasannya</div>
                            </div>
                            <div class="col col-md-2">
                                <h1 class='bx bx-up-arrow-alt text-dark bg-success rounded-circle '></h1>
                                <h1 class='bx bx-down-arrow-alt text-dark bg-danger rounded-circle '></h1>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <!-- / Content -->

    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Tulis Ulasanmu
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">

                            <textarea class="form-control" name="" id="summernote" rows="10" placeholder="Tulis"></textarea>
                        </div>

                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input rating-input-pos" style="outline:none" type="radio"
                                    name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1"><i
                                        class='bx bxs-up-arrow-circle fs-3 arrowup'></i> This Book is Good</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input rating-input-neg" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2"><i
                                        class='bx bxs-down-arrow-circle fs-3 arrowdown'></i>This Book is Not Good</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalPinjam" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Formulir Peminjaman
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/peminjaman-steptwo" method="post">
                    <div class="modal-body">

                        @csrf
                        <input type="text" name="id_buku" id="" value="{{ $buku->id_buku }}" hidden>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Peminjam</label>
                            <input type="text" disabled value="{{ Auth::user()->nama_lengkap }}" class="form-control"
                                name="" id="" aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tgl. Peminjaman</label>
                            <input type="date" id="tgl_peminjaman" class="form-control" name="tanggal_peminjaman"
                                id="" aria-describedby="helpId" placeholder="" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(
            document.getElementById("modalId"),
            options,
        );
    </script>
    @include('data-management.book-pages.book-edit')
    <script>
        document.getElementById('tgl_peminjaman').valueAsDate = new Date();
    </script>


    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
        <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©
                <script>
                    document.write(
                        new Date().getFullYear()
                    );
                </script>
                2024 , made with ❤️ by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
            </div>
            <div>
                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank" class="footer-link me-4">Documentation</a>

                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                    class="footer-link me-4">Support</a>
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
@endsection
