@extends('template.header')
@include('template.sidebar')
<div id="main">
    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row">
                <div class="col-6 ">
                    <h3 class="fs-3 mb-2 text-secondary text-uppercase">Tentang Kami</h3>
                    <p class="fs-5 mb-3 col-7">
                        ZieMart adalah aplikasi Point of Sale (POS) yang dirancang untuk
                        membantu
                        bisnis Anda dalam
                        manajemen penjualan, stok, dan transaksi dengan mudah dan efisien</p>
                </div>
                <div class="card bg-light p-3 m-0 col-6">
                    <div class="row gy-3 gy-md-0 align-items-md-center">
                        <div class="col-md-5">
                            <img src="images/images.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body p-0">
                                <h2 class="card-title h4 mb-3">Kenapa Harus Kita?</h2>
                                <p class="card-text lead">Selama bertahun tahun kita selalu memberikan pelayanan yang
                                    terbaik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('template.footer')
</div>
