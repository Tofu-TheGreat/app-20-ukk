<div class="modal fade" id="modal-tambah" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Detail Peminjaman
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" id="defaultFormControlInput"
                            placeholder="John Doe" aria-describedby="defaultFormControlHelp">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

@foreach ($peminjaman_nostatus as $item)
    <form action="/ubah-status/{{ $item->id_peminjaman }}" method="post">
        @csrf
        <div class="modal fade" id="modal-ubah-no-status{{ $item->id_peminjaman }}" tabindex="-1"
            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Ubah Status Peminjaman
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Ubah Status</label>
                                <select class="form-select form-select-lg" name="status_peminjaman" id="">
                                    <option>Select one</option>
                                    <option value="dipinjam"
                                        {{ $item->status_peminjaman == 'dipinjam' ? 'selected' : '' }}>Dipinjam
                                    </option>
                                    <option value="dikembalikan"
                                        {{ $item->status_peminjaman == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <form action="/hapus-status/{{ $item->id_peminjaman }}" method="post">
                                    @csrf
                                    <label for="" class="form-label d-block">Atau Hapus Status</label>
                                    <button type="submit" class="btn btn-danger d-block">Hapus Status</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
@foreach ($peminjaman_dipinjam as $item2)
    <form action="/ubah-status/{{ $item2->id_peminjaman }}" method="post">
        @csrf
        <div class="modal fade" id="modal-ubah-status-dipinjam{{ $item2->id_peminjaman }}" tabindex="-1"
            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Ubah Status Peminjaman
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Ubah Status</label>
                                <select class="form-select form-select-lg" name="status_peminjaman" id="">
                                    <option>Select one</option>
                                    <option value="dipinjam"
                                        {{ $item2->status_peminjaman == 'dipinjam' ? 'selected' : '' }}>Dipinjam
                                    </option>
                                    <option value="dikembalikan"
                                        {{ $item2->status_peminjaman == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <form action="/hapus-status/{{ $item2->id_peminjaman }}" method="post">
                                    @csrf
                                    <label for="" class="form-label d-block">Atau Hapus Status</label>
                                    <button type="submit" class="btn btn-danger d-block">Hapus Status</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
@foreach ($peminjaman_dikembalikan as $item3)
    <form action="/ubah-status/{{ $item3->id_peminjaman }}" method="post">
        @csrf
        <div class="modal fade" id="modal-ubah-status-dikembalikan{{ $item3->id_peminjaman }}" tabindex="-1"
            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Ubah Status Peminjaman
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Ubah Status</label>
                                <select class="form-select form-select-lg" name="status_peminjaman" id="">
                                    <option selected>Select one</option>
                                    <option value="dipinjam"
                                        {{ $item3->status_peminjaman == 'dipinjam' ? 'selected' : '' }}>Dipinjam
                                    </option>
                                    <option value="dikembalikan"
                                        {{ $item3->status_peminjaman == 'dikembalikan' ? 'selected' : '' }}>
                                        Dikembalikan</option>
                                </select>
                            </div>
                            <div class="mb-3">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach


@foreach ($peminjaman_nostatus as $item)
    <form action="{{ route('peminjaman.update', $item->id_peminjaman) }}" method="post">
        @csrf
        @method('put')
        <div class="modal fade" id="edit-peminjaman-nostatus{{ $item->id_peminjaman }}" tabindex="-1"
            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Edit Peminjaman
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Peminjam</label>
                                <select id="defaultSelect" name="id_user" class="form-select">
                                    @foreach ($user as $user1)
                                        <option value="{{ $user1->id }}"
                                            {{ $user1->id == $item->id_user ? 'selected' : '' }}>
                                            {{ $user1->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Tgl. Peminjaman</label>
                                <input type="date" class="form-control" value="{{ $item->tanggal_peminjaman }}"
                                    name="tanggal_peminjaman" id="" aria-describedby="helpId"
                                    placeholder="..." />
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Tgl. Pengembalian</label>
                                <input type="date" value="{{ $item->tanggal_pengembalian }}" class="form-control"
                                    name="tanggal_pengembalian" id="" aria-describedby="helpId"
                                    placeholder="..." />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
@foreach ($peminjaman_dipinjam as $item2)
    <form action="{{ route('peminjaman.update', $item2->id_peminjaman) }}" method="post">
        @csrf
        @method('put')
        <div class="modal fade" id="edit-peminjaman-dipinjam{{ $item2->id_peminjaman }}" tabindex="-1"
            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Edit Peminjaman
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Peminjam</label>
                                <select id="defaultSelect" name="id_user" class="form-select">
                                    @foreach ($user as $user2)
                                        <option value="{{ $user2->id }}"
                                            {{ $user2->id == $item2->id_user ? 'selected' : '' }}>
                                            {{ $user2->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Tgl. Peminjaman</label>
                                <input type="date" class="form-control" value="{{ $item2->tanggal_peminjaman }}"
                                    name="tanggal_peminjaman" id="" aria-describedby="helpId"
                                    placeholder="..." />
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Tgl. Pengembalian</label>
                                <input type="date" value="{{ $item2->tanggal_pengembalian }}"
                                    class="form-control" name="tanggal_pengembalian" id=""
                                    aria-describedby="helpId" placeholder="..." />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
@foreach ($peminjaman_dikembalikan as $item3)
    <form action="{{ route('peminjaman.update', $item3->id_peminjaman) }}" method="post">
        @csrf
        @method('put')
        <div class="modal fade" id="edit-peminjaman-dikembalikan{{ $item3->id_peminjaman }}" tabindex="-1"
            data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Edit Peminjaman
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Peminjam</label>
                                <select id="defaultSelect" name="id_user" class="form-select">
                                    @foreach ($user as $user3)
                                        <option value="{{ $user3->id }}"
                                            {{ $user3->id == $item3->id_user ? 'selected' : '' }}>
                                            {{ $user3->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Tgl. Peminjaman</label>
                                <input type="date" class="form-control" value="{{ $item3->tanggal_peminjaman }}"
                                    name="tanggal_peminjaman" id="" aria-describedby="helpId"
                                    placeholder="..." />
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Tgl. Pengembalian</label>
                                <input type="date" value="{{ $item3->tanggal_pengembalian }}"
                                    class="form-control" name="tanggal_pengembalian" id=""
                                    aria-describedby="helpId" placeholder="..." />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
