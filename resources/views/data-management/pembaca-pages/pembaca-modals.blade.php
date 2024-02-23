<form action="{{ route('pembaca.store') }}" method="post">
    @csrf
    <div class="modal fade" id="modal-tambah" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Add Pembaca
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">User List</label>
                            <select class="form-select" name="id_user" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}">{{ $item->username }}|{{ $item->nama_lengkap }}
                                    </option>
                                @endforeach
                            </select>
                            <div id="defaultFormControlHelp" class="form-text">
                                @if ($errors->has('id_user'))
                                    <span class="text-danger">{{ $errors->first('id_user') }}</span>
                                @endif
                            </div>
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

@foreach ($pembaca as $item)
    <form action="{{ route('pembaca.update', $item->id_pembaca) }}" method="post">
        @csrf
        @method('put')
        <div class="modal fade" id="modal-edit{{ $item->id_pembaca }}" tabindex="-1" data-bs-backdrop="static"
            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Edit Pembaca
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">User List</label>
                                <select class="form-select" name="id_user" id="exampleFormControlSelect1"
                                    aria-label="Default select example">
                                    @foreach ($user as $item2)
                                        <option value="{{ $item2->id }}"
                                            {{ $item2->id == $item->id_user ? 'selected' : '' }}>
                                            {{ $item2->username }}|{{ $item2->nama_lengkap }}
                                        </option>
                                    @endforeach
                                </select>
                                <div id="defaultFormControlHelp" class="form-text">
                                    @if ($errors->has('id_user'))
                                        <span class="text-danger">{{ $errors->first('id_user') }}</span>
                                    @endif
                                </div>
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
@endforeach
