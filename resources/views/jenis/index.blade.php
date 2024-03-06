@include('template.header')
@include('template.sidebar')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Jenis</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                        data-bs-target="#formJenisModal">
                        Tambah Jenis
                    </button>
                </div>
                <div class="card-body">
                    @include('jenis.data')
                </div>
            </div>
        </section>
    </div>
    @include('jenis.form')
    <script src="dist/assets/extensions/jquery/jquery.min.js"></script>
    <script src="dist/assets/extensions/parsleyjs/parsley.min.js"></script>
    <script src="dist/assets/static/js/pages/parsley.js"></script>

    @include('template.footer')

    <script>
        $('.delete-data').click(function(e) {
            e.preventDefault()
            const data = $(this).closest('tr').find('td:eq(1)').text()
            Swal.fire({
                    title: 'Data akan hilang!',
                    text: `Apakah penghapusan data ${data} akan dilanjutkan ? `,
                    icon: 'warning',
                    showDenyButton: true,
                    confirmButtonText: 'Ya',
                    denyButtonText: 'Tidak',
                    focusConfirm: false
                })
                .then((result) => {
                    if (result.isConfirmed) $(e.target).closest('form').submit()
                    else swal.close()
                })
        })
        // Function Edit
        $('#formJenisModal').on('show.bs.modal', function(e) {
            const btn = $(e.relatedTarget)
            console.log(btn.data('mode'))
            const mode = btn.data('mode')
            const nama_jenis = btn.data('nama_jenis')
            const id = btn.data('id')
            const modal = $(this)
            if (mode == 'edit') {
                modal.find('#method').html('@method('PATCH')')
                modal.find('.modal-title').text('Edit Data Jenis')
                modal.find('#nama_jenis').val(nama_jenis)
                modal.find('.modal-body form').attr('action', '{{ url('jenis') }}/' + id)
            } else {
                modal.find('.modal-title').text('Input Data Jenis')
                modal.find('#nama_jenis').val('')
                modal.find('#method').html('')
                modal.find('.modal-body form').attr('action', '{{ url('jenis') }}')
            }
        })
    </script>
