@extends('data-management.index')

@section('contents')
    <form action="{{ route('peminjaman.store') }}" method="post">
        @csrf
        <input type="text" name="id_user" value="{{ Auth::user()->id }}" id="" hidden>
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
                            <div class="col col-md">
                                <div class="mb-2">
                                    <label for="" class="form-label">Nama Peminjam</label>
                                    <input type="text" readonly value="{{ Auth::user()->nama_lengkap }}"
                                        class="form-control" name="" id="" aria-describedby="helpId"
                                        placeholder="..." />
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Tgl. Peminjaman</label>
                                    <input type="text" readonly value="{{ $data['tanggal_peminjaman'] }}"
                                        class="form-control" name="tanggal_peminjaman" id=""
                                        aria-describedby="helpId" placeholder="..." />
                                </div>
                                <div class="mb-3">
                                    <label for="defaultSelect" class="form-label">Buku yang ingin dipinjam</label>
                                    <select id="defaultSelect" name="id_buku[]" multiple="multiple" class="form-select">
                                        @foreach ($buku as $item)
                                            <option value="{{ $item->id_buku }}"
                                                {{ $item->id_buku == $data['id_buku'] ? 'selected' : '' }}>
                                                {{ $item->judul_buku }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Tgl. Pengembalian</label>
                                    <input type="date" class="form-control"
                                        name="tanggal_pengembalian" id="" aria-describedby="helpId"
                                        placeholder="..." />
                                </div>
                                <div class="mb-2">
                                    <label for="" class="form-label">Jumlah Pinjam (tiap buku)</label>
                                    <input type="number" value="" name="jumlah_pinjam" class="form-control"
                                       id="" aria-describedby="helpId" placeholder="..." />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col col-md">
                                <button type="submit" data-bs-target="#modalPinjam" data-bs-toggle="modal"
                                    class="btn btn-primary">Kirim</button>
                            </div>
                            <small id="helpId" class="form-text text-muted mt-3">*Setelah mengirim, harap menunggu
                                konfirmasi dari staff inlivre</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <!-- / Content -->


    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(
            document.getElementById("modalId"),
            options,
        );
    </script>
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

                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
                    class="footer-link me-4">Documentation</a>

                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                    class="footer-link me-4">Support</a>
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
@endsection
