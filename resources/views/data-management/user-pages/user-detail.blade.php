<div class="modal fade" id="modal-detail-" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Detail User
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">NIK</label>
                        <input disabled type="text" name="nik" class="form-control" id="defaultFormControlInput"
                            placeholder="John Doe" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">
                            Nik harus berjumlah 16 digit
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Username</label>
                        <input disabled type="text" name="username" class="form-control" id="defaultFormControlInput"
                            placeholder="John Doe" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">
                            Pilih Username yang Unik
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input disabled type="email" name="email" class="form-control" id="defaultFormControlInput"
                            placeholder="John Doe" aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">
                            Harap Masukkan Email
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Nama Lengkap</label>
                        <input disabled type="text" name="nama_lengkap" class="form-control"
                            id="defaultFormControlInput" placeholder="John Doe"
                            aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">
                            Tulis nama lengkap
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Jenis kelamin</label>
                        <select id="defaultSelect" class="form-select" disabled>
                            <option>Jenis Kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <div id="defaultFormControlHelp" class="form-text">
                            Harap Pilih Jenis Kelamin
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="defaultFormControlInput" class="form-label">Nomor Telepon</label>
                        <input disabled type="text" name="nomor_telepon" class="form-control"
                            id="defaultFormControlInput" placeholder="John Doe"
                            aria-describedby="defaultFormControlHelp">
                        <div id="defaultFormControlHelp" class="form-text">
                            Harap Tulis Nomor Telepon dengan Benar
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea disabled class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="5"></textarea>
                    </div>
                    <div class="mb-1">
                        <select disabled id="defaultSelect" class="form-select">
                            <option>Role</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                            <option value="user">User</option>
                        </select>
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
