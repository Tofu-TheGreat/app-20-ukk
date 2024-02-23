<div class="hero" id="home">
    <div class="container">
        <div class="row mt-5">
            <div class="col herobold">
                <h1>Grow Your</h1>
                <h1><span class="animate-charcter">Knowledge</span></h1>
                <h2>With Ease From <span class="animate-charcter">Us</span></h2>
                <div class="d-flex align-items-center ">
                    @if (Auth::check())
                        <a href="/buku" class="btn btn-hero mt-4 d-flex align-items-center justify-content-center ">Get
                            Started</a>
                        <a href="/buku"
                            class="btn btn-sm btn-outline-dark border border-4 border-dark rounded-circle mt-4 ms-3"><i
                                class='bx bx-right-arrow-alt bx-md'></i></a>
                    @else
                        <a href="/login-page    "
                            class="btn btn-hero mt-4 d-flex align-items-center justify-content-center ">Get
                            Started</a>
                        <a href="/login-page"
                            class="btn btn-sm btn-outline-dark border border-4 border-dark rounded-circle mt-4 ms-3"><i
                                class='bx bx-right-arrow-alt bx-md'></i></a>
                    @endif
                </div>
            </div>
            <div class="col">
                <img class="mb-5 imagehero position-absolute top-0 mt-5"
                    src="{{ asset('page_image/Book lover-bro 1.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
