@extends('auth-page.index')

@section('authcontents')
    <form action="" method="post">
        @csrf
        <div class="container-fluid">
            <div class="container">
                <div class="card border-0 mt-5 shadow-lg mb-5 bg-body-dark rounded-5" style="--bs-bg-opacity: .5;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('page_image/Group 19.png') }}" alt="">
                            </div>

                            <div class="col inputgroup mt-5">
                                <h1 class="fontbold text-white">Log In</h1>
                                <p class="fontlight text-white">Input your Email and Password</p>
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control border rounded-4 width-set"
                                        placeholder="Email" aria-label="Sizing example input" name="email"
                                        aria-describedby="inputGroup-sizing-lg">
                                </div>
                                <div class="input-group input-group-lg mt-4">
                                    <input type="password" class="form-control border rounded-4 width-set"
                                        placeholder="Password" aria-label="Sizing example input" name="password"
                                        aria-describedby="inputGroup-sizing-lg">
                                </div>
                                <p class="text-light mt-3"> Don't Have Account? Try <a style="text-decoration: none"
                                        href="/register-page">Register</a></p>
                                <div class="login-func d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn mt-2 buttonlogin">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
