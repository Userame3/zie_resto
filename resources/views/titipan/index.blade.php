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
                    <h3>Produk Titipan</h3>
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
                        data-bs-target="#formTitipanModal">
                        Tambah Titipan
                    </button>
                </div>
                <div class="card-body">
                    @include('titipan.data')
                </div>
            </div>
        </section>
    </div>
    @include('titipan.form')
    <script src="dist/assets/extensions/jquery/jquery.min.js"></script>
    <script src="dist/assets/extensions/parsleyjs/parsley.min.js"></script>
    <script src="dist/assets/static/js/pages/parsley.js"></script>

    @include('template.footer')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
        $('#formTitipanModal').on('show.bs.modal', function(e) {
            const btn = $(e.relatedTarget)
            console.log(btn.data('mode'))
            const mode = btn.data('mode')
            const nama_produk = btn.data('nama_produk')
            const nama_supplier = btn.data('nama_supplier')
            const harga_beli = btn.data('harga_beli')
            const harga_jual = btn.data('harga_jual')
            const stok = btn.data('stok')
            const id = btn.data('id')
            const modal = $(this)
            if (mode == 'edit') {
                modal.find('#method').html('@method('PATCH')')
                modal.find('.modal-title').text('Edit Data Produk')
                modal.find('#nama_produk').val(nama_produk)
                modal.find('#nama_supplier').val(nama_supplier)
                modal.find('#harga_beli').val(harga_beli)
                modal.find('#harga_jual').val(harga_jual)
                modal.find('#stok').val(stok)
                modal.find('.modal-body form').attr('action', '{{ url('titipan') }}/' + id)
            } else {
                modal.find('.modal-title').text('Input Produk Produk')
                modal.find('#nama_produk').val('')
                modal.find('#method').html('')
                modal.find('.modal-body form').attr('action', '{{ url('titipan') }}')
            }
        })

        $(document).ready(function() {
            // Menggunakan event input untuk mendeteksi perubahan pada input harga beli
            $('#harga_beli').on('input', function() {
                // Mendapatkan nilai harga beli dari input
                var hargaBeli = parseFloat($(this).val());

                // Melakukan perhitungan harga jual
                var keuntunganPercentage = 70;
                var hargaJual = Math.round((hargaBeli * (100 + keuntunganPercentage)) / 100 / 500) * 500;

                // Mengisi nilai pada input harga jual
                parseFloat($('#harga_jual').val(hargaJual));
            });
        });
    </script>
