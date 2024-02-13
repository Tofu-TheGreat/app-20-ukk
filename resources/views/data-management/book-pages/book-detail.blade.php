@extends('data-management.index')

@section('contents')
    <form action="" method="post">
        @csrf
        <div class="container-fluid flex-grow-1 container-p-y d-flex align-items-center">
            <div class="container">
                <div class="card mb-3">
                    <div class="card-body d-flex align-items-center mt-3">
                        <h2 class="bold text-dark">Detail Buku</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-md-4"><img class ="img-fluid mt-3"
                                    src="{{ asset('page_image/canva-brown-rusty-mystery-novel-book-cover-hG1QhA7BiBU.jpg') }}"
                                    alt=""></div>
                            <div class="col col-md">
                                <div class="mb-2">
                                    <label for="" class="form-label">Judul Buku</label>
                                    <input readonly type="text" name="judul_buku" class="form-control" name=""
                                        id="" aria-describedby="helpId" placeholder="..." />
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
                                    <input readonly type="text" name="penulis_buku" class="form-control" name=""
                                        id="" aria-describedby="helpId" placeholder="..." />
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Penerbit Buku</label>
                                    <input readonly type="text" name="penerbit_buku" class="form-control" name=""
                                        id="" aria-describedby="helpId" placeholder="..." />
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Tahun Terbit</label>
                                    <input readonly type="date" name="tahun_terbit" class="form-control" name=""
                                        id="" aria-describedby="helpId" placeholder="..." />
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Sinopsis Buku</label>
                                    <textarea readonly class="form-control" name="sinopsis_buku" id="" rows="3"></textarea>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Stok Buku</label>
                                    <input readonly type="number" name="stok_buku" class="form-control" name=""
                                        id="" aria-describedby="helpId" placeholder="..." />
                                </div>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col col-md">
                                <button class="btn btn-primary">Pinjam</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <img class="card" />
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
