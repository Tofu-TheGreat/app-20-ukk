@extends('auth-page.index')

@section('authcontents')
    <form action="/register-admin-action" method="post">
        @csrf
        <div class="container-fluid">
            <div class="container">
                <div class="card border-0 mt-5 shadow-lg mb-5 bg-body-dark rounded-5">
                    <div class="card-body">
                        <div class="registertext mt-5 ms-5">
                            <h1 class="fontbold text-white">Register</h1>
                            <p class="fontlight text-white">Fill all the forms to continue</p>
                        </div>
                        <div class="row mt-3 ms-5">
                            <div class="col inputgroup-reg ">

                                <div class="input-group-reg input-group-lg">
                                    <input type="text" class="form-control-sm inputreg border width-set"
                                        placeholder="Email" aria-label="Sizing example input" name="email"
                                        aria-describedby="inputGroup-sizing-lg">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="input-group-reg input-group-lg mt-4">
                                    <input type="text" class="form-control-sm inputreg border width-set"
                                        placeholder="Username" aria-label="Sizing example input" name="username"
                                        aria-describedby="inputGroup-sizing-lg">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        @if ($errors->has('username'))
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="input-group-reg input-group-lg mt-4">
                                    <input type="password" class="form-control-sm inputreg border width-set"
                                        placeholder="Password" aria-label="Sizing example input" name="password"
                                        aria-describedby="inputGroup-sizing-lg">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="input-group-reg input-group-lg mt-4">
                                    <input type="password" class="form-control-sm inputreg border width-set"
                                        placeholder="Confirm Password" aria-label="Sizing example input"
                                        name="confirm_password" aria-describedby="inputGroup-sizing-lg">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        @if ($errors->has('confirm_password'))
                                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col inputgroup-reg">
                                <div class="input-group-reg input-group-lg">
                                    <input type="text" class="form-control-sm inputreg border width-set"
                                        placeholder="NIK" aria-label="Sizing example input" name="nik"
                                        aria-describedby="inputGroup-sizing-lg">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        @if ($errors->has('nik'))
                                            <span class="text-danger">{{ $errors->first('nik') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="input-group-reg input-group-lg mt-4">
                                    <input type="text" class="form-control-sm inputreg border width-set"
                                        placeholder="Nama Lengkap" aria-label="Sizing example input" name="nama_lengkap"
                                        aria-describedby="inputGroup-sizing-lg">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        @if ($errors->has('nama_lengkap'))
                                            <span class="text-danger">{{ $errors->first('nama_lengkap') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="input-group-reg input-group-lg mt-4">
                                    <select class="form-select-sm inputreg" name="jenis_kelamin"
                                        aria-label="Default select example">
                                        <option selected>Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <div id="defaultFormControlHelp" class="form-text">
                                        @if ($errors->has('jenis_kelamin'))
                                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="input-group-reg input-group-lg mt-4">
                                    <input type="text" class="form-control-sm inputreg border width-set"
                                        placeholder="Nomor Telepon" aria-label="Sizing example input" name="nomor_telepon"
                                        aria-describedby="inputGroup-sizing-lg">
                                    <div id="defaultFormControlHelp" class="form-text">
                                        @if ($errors->has('nomor_telepon'))
                                            <span class="text-danger">{{ $errors->first('nomor_telepon') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col inputgroup-reg">
                                <div class="mb-3">
                                    <textarea class="form-control inputreg" name="alamat" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Alamat"></textarea>
                                    <div id="defaultFormControlHelp" class="form-text">
                                        @if ($errors->has('alamat'))
                                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <p class="text-light mt-3"> Already Have Account? Try <a style="text-decoration: none"
                                    href="/login-page">Login</a></p>
                        </div>
                        <div class="row">
                            <div class="login-func-reg d-flex justify-content-center">

                                <button type="submit" class="btn  buttonlogin">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
