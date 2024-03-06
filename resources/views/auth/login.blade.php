@include('template.header')
@push('style')
@endpush
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Zie Resto</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('cekLogin') }}" method="post" novalidate>
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email"
                        class="form-control form-control-xl @error('email')
                        is-invalid
                    @enderror"
                        id="email" name="email" value="{{ old('email') }}" placeholder="Email">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $mesagges }}
                        </div>
                    @enderror
                </div>
                <div class="form-group position-relative has-icon-left mb-1">
                    <input type="password"
                        class="form-control form-control-xl @error('password')
                        is-invalid
                    @enderror"
                        id="password" name="password" value="{{ old('password') }}" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $mesagges }}
                        </div>
                    @enderror
                </div>
                @error('nofound')
                    <div class="row mb-2">
                        <div class="col-12 text-center text-danger">
                            {{ $messages }}
                        </div>
                    </div>
                @enderror
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Log in</button>
            </form>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="dist/assets/extensions/jquery/jquery.min.js"></script>
<script src="dist/assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="dist/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="dist/assets/static/js/pages/datatables.js"></script>
<script src="dist/assets/static/js/components/dark.js"></script>
<script src="dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="dist/assets/compiled/js/app.js"></script>

<!-- Need: Apexcharts -->
{{-- <script src="dist/assets/extensions/apexcharts/apexcharts.min.js"></script> --}}
{{-- <script src="dist/assets/static/js/pages/dashboard.js"></script> --}}

<!-- Bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<!-- Form Validate -->
<script src="dist/assets/extensions/parsleyjs/parsley.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
</script>
<script src="dist/assets/static/js/pages/parsley.js"></script>

<!-- FontAwesome -->
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js"
    integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous">
</script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
    integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous">
</script>

<!-- Image Plugin -->
<script src="dist/assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js">
</script>
<script src="dist/assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js">
</script>
<script src="dist/assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
<script
    src="dist/assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js">
</script>
<script src="dist/assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js"></script>
<script src="dist/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="dist/assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
<script src="dist/assets/extensions/filepond/filepond.js"></script>
<script src="dist/assets/extensions/toastify-js/src/toastify.js"></script>
<script src="dist/assets/static/js/pages/filepond.js"></script>
<script src="dist/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>

<!-- Sweet Alert -->
<script src="dist/js/sweetalert2.all.min.js"></script>
