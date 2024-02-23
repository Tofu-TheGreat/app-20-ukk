<div class="container-fluid con2" id="about">
    <div class="container">
        <div class="row">
            <div class="col-6 herobold">
                <h2 class="text-white font20" id="slide">About <span class="orangefont">InLivre</span></h2>
                <p class="fontregular text-white mt-3">InLivre adalah sebuah aplikasi peminjaman buku
                    yang terintegrasi dengan perpustakaan, InLivre memuat berbagai fitur yang penting dalam melakukan
                    transaksi peminjaman buku. InLivre dibuat berdasarkan kebutuhan para pembaca dan peminjam buku.
                </p>
                <p class="fontregular text-white mt-3">Sebagai aplikasi, InLivre mempunyai fitur-fitur penunjang
                    peminjaman buku, diantaranya adalah koleksi buku,
                    pemesanan buku, bookmark buku, melihat dan memberi ulasan pada buku.
                    InLivre mempunyai koleksi buku lengkap dari berbagai tema untuk kamu para <span class=""
                        style="font-style:italic;">Readers.</span>
                </p>
            </div>
            <div class="col-6">
                <img class="mb-5 mt-5 ms-5" id="static" src="{{ asset('page_image/Group 18.png') }}" alt="">
            </div>
        </div>
    </div>

</div>
<div class="container-fluid con3">
    <div class="container ">
        <div class="row">
            <h2 class="fontbold latestbook mt-5 d-flex justify-content-center">
                Our Latest<span class="fontpurple ms-2">Book</span>!</h2>

            @foreach ($buku as $item)
                <div class="col">
                    <div class="d-flex justify-content-center mt-5">
                        <div class="card shadow border-0 has-bg-img"
                            style="width: 18rem; background-image: url({{ asset('book_cover/' . $item->sampul_buku) }})">
                            <div class="card-body">
                                <div class="card-body-font mt-5">
                                    <h5 class="card-title title-book fontbold text-white">{{ $item->judul_buku }}</h5>
                                    <p class="card-text text-white">{{ $item->sinopsis_buku }}</p>
                                </div>
                                @if (Auth::check())
                                    <a href="{{ route('buku.show', $item->id_buku) }}" class="btn btn-card mt-5">See
                                        More</a>
                                @else
                                    <a href="login-page" class="btn btn-card mt-5">See More</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col">
                <div class="d-flex justify-content-center mt-5 ">
                    <div class="card shadow border-0 has-bg-img cardbook1"
                        style="width: 18rem; background-image: url({{ asset('page_image/canva-brown-rusty-mystery-novel-book-cover-hG1QhA7BiBU.jpg') }})">
                        <div class="card-body">
                            <div class="card-body-font mt-5">
                                <h5 class="card-title title-book fontbold text-white">Book Name</h5>
                                <p class="card-text text-white">Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit.
                                    Modi, alias.</p>
                            </div>
                            <button class="btn btn-card mt-5">See More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="d-flex justify-content-center mt-5">
                    <div class="card shadow border-0 has-bg-img cardbook3"
                        style="width: 18rem; background-image: url({{ asset('page_image/canva-brown-rusty-mystery-novel-book-cover-hG1QhA7BiBU.jpg') }})">
                        <div class="card-body">
                            <div class="card-body-font mt-5">
                                <h5 class="card-title title-book fontbold text-white">Book Name</h5>
                                <p class="card-text text-white">Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit.
                                    Modi, alias.</p>
                            </div>
                            <button class="btn btn-card mt-5">See More</button>

                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="d-flex justify-content-center">
            @if (Auth::check())
                <a href="/buku" class="btn border border-dark mt-5 rounded-5 py-3 morebutton">More</a>
            @else
                <a href="/login-page" class="btn border border-dark mt-5 rounded-5 py-3 morebutton">More</a>
            @endif
        </div>
    </div>
</div>
<div class="container-fluid con4 d-flex align-items-center ">
    <div class="container">
        <div class="d-flex justify-content-center contact-hero">
            <h1 class="fontbold" id="contact">Contact Us</h1>
        </div>
        <div class="fontsizecontact">
            <div class="d-flex justify-content-center">
                <button class="btn border border-dark rounded-5 btn-contact mt-3">Click Here</button>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <div class="d-flex align-items-center mt-1">
                    <p>Powered By</p> <img class="ms-2 logoinconact" src="{{ asset('page_image/logo.svg') }}"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</div>
