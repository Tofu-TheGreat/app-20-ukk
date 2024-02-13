@extends('data-management.index')

@section('contents')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="container">
            <a href="/user-add-page" class="btn btn-primary mb-3">Tambah</a>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">JK</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        ?>

                        <tr>
                            <th scope="row">>
                            <td></td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Primary
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><button class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#modal-detail-" href="javascript:void(0);">Detail</button>
                                        </li>
                                        <li><a class="dropdown-item" href="/user-edit-page">Edit</a>
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="/delete-user-action/">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @include('data-management.user-pages.user-detail')

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
        <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            <div class="mb-2 mb-md-0">
                ©
                <script>
                    document.write(
                        new Date().getFullYear()
                    );
                </script>
                2024 , made with ❤️ by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
            </div>
            <div>
                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
                    class="footer-link me-4">Documentation</a>

                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                    class="footer-link me-4">Support</a>
            </div>
        </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
@endsection
