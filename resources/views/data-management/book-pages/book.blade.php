@extends('data-management.index')

@section('contents')
    <div class="container mt-3">
        <h1>So, Which Book Do You Want to Read ?</h1>
        <p>Check out our books collections! :)</p>
        <button class="btn btn-primary rounded-circle py-3 px-4 position-fixed bottom-0 end-0 me-5 mb-5"
            data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fab fa-plus"></i></button>
        <div class="row mt-2">
            <div class="col col-md-3">
                <div class="card h-100">
                    <img class="card-img h-100"
                        src="{{ asset('page_image/canva-brown-rusty-mystery-novel-book-cover-hG1QhA7BiBU.jpg') }}"
                        alt="Card image cap">

                    <div class="row position-absolute bottom-0 start-0 ms-2 mb-3">
                        <div class="col">
                            <a href="/book-detail-page" class="btn btn-primary">Detail</a>
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    More
                                </button>
                                <div class="dropdown-menu" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit">Edit</a>
                                    <a class="dropdown-item" href="#">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('data-management.book-pages.book-add')
    @include('data-management.book-pages.book-edit')
@endsection
