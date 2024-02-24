@extends('data-management.index')

@section('contents')
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="id" value="{{ $user->id }}" hidden id="">
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
                                        placeholder="Ex : 8472000...." value="{{ $user->nik }}"
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Nik harus berjumlah 16 digit
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Username</label>
                                    <input type="text" name="username" value="{{ $user->username }}" class="form-control"
                                        id="defaultFormControlInput" placeholder="Ex :John2"
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Pilih Username yang Unik
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                                        id="defaultFormControlInput" placeholder="Ex : Email@gmail.com"
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Masukkan Email
                                    </div>
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control mb-3" id="exampleFormControlTextarea1" name="alamat" rows="5"
                                        placeholder ="Ex : Jalan.....">{{ $user->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" value="{{ $user->nama_lengkap }}"
                                        class="form-control" id="defaultFormControlInput" placeholder="Ex : John Doe"
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Tulis nama lengkap
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="defaultSelect" class="form-label">Jenis kelamin</label>
                                    <select id="defaultSelect" name="jenis_kelamin" class="form-select">
                                        <option>Jenis Kelamin</option>
                                        <option value="L"{{ $user->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-Laki
                                        </option>
                                        <option value="P" {{ $user->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                                        </option>
                                    </select>
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Pilih Jenis Kelamin
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Nomor Telepon</label>
                                    <input type="text" value="{{ $user->nomor_telepon }}" name="nomor_telepon"
                                        class="form-control" id="defaultFormControlInput" placeholder="Ex : 0877..."
                                        aria-describedby="defaultFormControlHelp">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        Harap Tulis Nomor Telepon dengan Benar
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col col-md-2">
                                    <select id="defaultSelect" name="role" class="form-select">
                                        <option>Role</option>
                                        <option value="admin"{{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="staff"{{ $user->role == 'staff' ? 'selected' : '' }}>Staff</option>
                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
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
