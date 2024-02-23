@extends('data-management.index')

@section('contents')
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="container-fluid flex-grow-1 container-p-y d-flex align-items-center">
            <div class="container">
                <div class="card mb-3 border border-1 rounded-5 border-primary">
                    <h2 class="text-primary fw-bold d-flex align-items-center mt-3 ms-2"><i style="font-size: 30px;"
                            class='bx bxs-user-plus ms-1 me-1 '> </i>Form add User
                    </h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-md-6">
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">NIK</label>
                                    <input type="text" name="nik" class="form-control" id="defaultFormControlInput"
                                        placeholder="Ex : 8472000...." required aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Nik harus berjumlah 16 digit
                                    </div>
                                    @if ($errors->has('nik'))
                                        <span class="text-danger">{{ $errors->first('nik') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Username</label>
                                    <input type="text" name="username" required class="form-control" id="defaultFormControlInput"
                                        placeholder="Ex :John2" aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Pilih Username yang Unik
                                    </div>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Email</label>
                                    <input type="email" required name="email" class="form-control" id="defaultFormControlInput"
                                        placeholder="Ex : Email@gmail.com" aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Masukkan Email
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Password</label>
                                    <input type="password" required name="password" class="form-control" id="defaultFormControlInput"
                                        placeholder="John Doe" aria-describedby="defaultFormControlHelp">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Konfirmasi Password</label>
                                    <input type="password" required name="confirm_password" class="form-control"
                                        id="defaultFormControlInput" placeholder="John Doe"
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Masukkan Kembali Password
                                    </div>
                                    @if ($errors->has('confirm_password'))
                                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Nama Lengkap</label>
                                    <input type="text" required name="nama_lengkap" class="form-control"
                                        id="defaultFormControlInput" placeholder="Ex : John Doe"
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Tulis nama lengkap
                                    </div>
                                    @if ($errors->has('nama_lengkap'))
                                        <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultSelect" class="form-label">Jenis kelamin</label>
                                    <select id="defaultSelect" required name="jenis_kelamin" class="form-select">
                                        <option>Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Pilih Jenis Kelamin
                                    </div>
                                    @if ($errors->has('jenis_kelamin'))
                                        <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Nomor Telepon</label>
                                    <input type="text" required name="nomor_telepon" class="form-control"
                                        id="defaultFormControlInput" placeholder="Ex : 0877..."
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Tulis Nomor Telepon dengan Benar
                                    </div>
                                    @if ($errors->has('nomor_telepon'))
                                        <span class="text-danger">{{ $errors->first('nomor_telepon') }}</span>
                                    @endif
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" required name="alamat" rows="5"
                                        placeholder ="Ex : Jalan....."></textarea>
                                    @if ($errors->has('alamat'))
                                        <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-2">
                                    <select id="defaultSelect" name="role" class="form-select" required>
                                        <option>Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="staff">Staff</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                <div class="col col-md-10">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
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
