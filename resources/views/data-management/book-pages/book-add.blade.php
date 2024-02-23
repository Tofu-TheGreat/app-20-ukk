<form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalTambah" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Tambah Buku
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control" name="" id=""
                            aria-describedby="helpId" placeholder="..." />
                            <div id="defaultFormControlHelp" class="form-text">
                                @if ($errors->has('judul_buku'))
                                    <span class="text-danger">{{ $errors->first('judul_buku') }}</span>
                                @endif
                            </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Kategori Buku</label>
                        <select id="defaultSelect" name="id_kategori[]" multiple="multiple" class="form-select">
                            @foreach ($kategori as $item)
                                <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                        <div id="defaultFormControlHelp" class="form-text">
                            @if ($errors->has('id_kategori'))
                                <span class="text-danger">{{ $errors->first('id_kategori') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Sinopsis Buku</label>
                        <textarea class="form-control" name="sinopsis_buku" id="" rows="3"></textarea>
                        <div id="defaultFormControlHelp" class="form-text">
                            @if ($errors->has('sinopsis_buku'))
                                <span class="text-danger">{{ $errors->first('sinopsis_buku') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Penulis Buku</label>
                        <input type="text" name="penulis_buku" class="form-control" id=""
                            aria-describedby="helpId" placeholder="..." />
                            <div id="defaultFormControlHelp" class="form-text">
                                @if ($errors->has('penulis_buku'))
                                    <span class="text-danger">{{ $errors->first('penulis_buku') }}</span>
                                @endif
                            </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Penerbit Buku</label>
                        <input type="text" name="penerbit" class="form-control" name="" id=""
                            aria-describedby="helpId" placeholder="..." />
                            <div id="defaultFormControlHelp" class="form-text">
                                @if ($errors->has('penerbit'))
                                    <span class="text-danger">{{ $errors->first('penerbit') }}</span>
                                @endif
                            </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" class="form-control" name="" id=""
                            aria-describedby="helpId" placeholder="..." />
                            <div id="defaultFormControlHelp" class="form-text">
                                @if ($errors->has('tahun_terbit'))
                                    <span class="text-danger">{{ $errors->first('tahun_terbit') }}</span>
                                @endif
                            </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Stok Buku</label>
                        <input type="number" name="stok_buku" class="form-control" name="" id=""
                            aria-describedby="helpId" placeholder="..." />
                            <div id="defaultFormControlHelp" class="form-text">
                                @if ($errors->has('stok_buku'))
                                    <span class="text-danger">{{ $errors->first('stok_buku') }}</span>
                                @endif
                            </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Sampul Buku</label>
                        <input type="file" class="form-control" name="sampul_buku" id="" placeholder=""
                            aria-describedby="fileHelpId" />
                            <div id="defaultFormControlHelp" class="form-text">
                                @if ($errors->has('sampul_buku'))
                                    <span class="text-danger">{{ $errors->first('sampul_buku') }}</span>
                                @endif
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
