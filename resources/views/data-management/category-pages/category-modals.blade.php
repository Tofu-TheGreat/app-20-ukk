<form action="{{ route('kategori.store') }}" method="post">
    @csrf
    <div class="modal fade" id="modal-tambah" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Add Category
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" id="defaultFormControlInput"
                                placeholder="Ex : Action, Fantasy..." aria-describedby="defaultFormControlHelp">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

@foreach ($kategori as $item)
    <form action="{{ route('kategori.update', $item->id_kategori) }}" method="post">
        @csrf
        @method('put')
        <div class="modal fade" id="modal-edit{{ $item->id_kategori }}" tabindex="-1" data-bs-backdrop="static"
            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Edit Category
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="defaultFormControlInput" class="form-label">Nama Kategori</label>
                                <input type="text" name="nama_kategori" value="{{ $item->nama_kategori }}"
                                    class="form-control" id="defaultFormControlInput" placeholder="Ex : Medieval.."
                                    aria-describedby="defaultFormControlHelp">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
