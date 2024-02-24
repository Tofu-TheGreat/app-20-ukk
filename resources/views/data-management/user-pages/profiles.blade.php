@extends('data-management.index')

@section('contents')
    <form action="profile-update/{{ Auth::user()->id }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="id" value="{{ Auth::user()->id }}" hidden id="">
        <div class="container-fluid flex-grow-1 container-p-y d-flex align-items-center">
            <div class="container">
                <div class="card mb-3">
                    <div class="card-body d-flex align-items-center mt-3">
                        <h2 class="bold text-dark">Form Users Edit</h2>
                    </div>
                </div>
                <div class="card">
                    @if ($errors->any())
                        <span class="text-danger">{{ $errors }}</span>
                    @endif
                    <div class="card-body">
                        <div class="row">
                            <div class="col col-md-6">
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">NIK</label>
                                    <input type="text" name="nik" class="form-control" id="defaultFormControlInput"
                                        placeholder="Ex : 8472000...." value="{{ Auth::user()->nik }}"
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Nik harus berjumlah 16 digit
                                    </div>
                                    @if ($errors->has('nik'))
                                        <span class="text-danger">{{ $errors->first('nik') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Username</label>
                                    <input type="text" name="username" value="{{ Auth::user()->username }}"
                                        class="form-control" id="defaultFormControlInput" placeholder="Ex :John2"
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Pilih Username yang Unik
                                    </div>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ Auth::user()->email }}"
                                        class="form-control" id="defaultFormControlInput" placeholder="Ex : Email@gmail.com"
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Masukkan Email
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="defaultFormControlInput"
                                        placeholder="******" aria-describedby="defaultFormControlHelp">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Konfirmasi Password</label>
                                    <input type="password" name="confirm_password" class="form-control"
                                        id="defaultFormControlInput" placeholder="******"
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
                                    <input type="text" name="nama_lengkap" value="{{ Auth::user()->nama_lengkap }}"
                                        class="form-control" id="defaultFormControlInput" placeholder="Ex : John Doe"
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
                                    <select id="defaultSelect" name="jenis_kelamin" class="form-select">
                                        <option>Jenis Kelamin</option>
                                        <option value="L"{{ Auth::user()->jenis_kelamin == 'L' ? 'selected' : '' }}>
                                            Laki-Laki
                                        </option>
                                        <option value="P" {{ Auth::user()->jenis_kelamin == 'P' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Pilih Jenis Kelamin
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Nomor Telepon</label>
                                    <input type="text" value="{{ Auth::user()->nomor_telepon }}" name="nomor_telepon"
                                        class="form-control" id="defaultFormControlInput" placeholder="Ex : 0877..."
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Tulis Nomor Telepon dengan Benar
                                    </div>
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control mb-3" id="exampleFormControlTextarea1" name="alamat" rows="5"
                                        placeholder ="Ex : Jalan.....">{{ Auth::user()->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-2">
                                    <select id="defaultSelect" name="role" class="form-select" required>
                                        <option>Role</option>
                                        <option value="admin" {{ Auth::user()->role == 'admin' ? 'selected' : '' }}>Admin
                                        </option>
                                        <option value="staff" {{ Auth::user()->role == 'staff' ? 'selected' : '' }}>Staff
                                        </option>
                                        <option value="user" {{ Auth::user()->role == 'user' ? 'selected' : '' }}>User
                                        </option>
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



    <div class="content-backdrop fade"></div>
@endsection
