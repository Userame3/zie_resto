<!-- about.blade.php -->

@extends('template.header')

@include('template.sidebar')

<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-4  ">
                    <h3>Tentang ZieMart</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section row d-flex flex-wrap justify-content-center" style="gap:1rem;">
            <div class="card col-5">
                <div class="card-header">
                    <h4 class="card-title">Tentang Kami</h4>
                </div>
                <div class="card-body">
                    <p>ZieMart POS adalah aplikasi Point of Sale (POS) yang dirancang untuk membantu bisnis Anda dalam
                        manajemen penjualan, stok, dan transaksi dengan mudah dan efisien.</p>
                </div>
            </div>
            <div class="card col-5">
                <div class="card-header">
                    <h4 class="card-title">Sejarah ZieMart</h4>
                </div>
                <div class="card-body">
                    <p>ZieMart dibuat oleh Affan pada Tahun 2024 Tanggal 05 Maret</p>
                </div>
            </div>
            <div class="card col-5">
                <div class="card-header">
                    <h4 class="card-title">Pelayanan</h4>
                </div>
                <div class="card-body d-flex flex-wrap justify-content-start ms-2" style="gap: 3rem">
                    <ul class="list-group col-5 d-flex ">
                        <li class="list-group-item active">Personal Branding</li>
                    </ul>
                    <ul class="list-group col-5 d-flex ">
                        <li class="list-group-item active">Ui/Ux Design</li>
                    </ul>
                    <ul class="list-group col-5 d-flex ">
                        <li class="list-group-item active">Digital Marketing</li>
                    </ul>
                    <ul class="list-group col-5 d-flex ">
                        <li class="list-group-item active">Website</li>
                    </ul>
                </div>
            </div>
            <div class="card col-5">
                <div class="card-header">
                    <h4 class="card-title">ZieMart</h4>
                </div>
                <div class="card-body">
                    <p>ZieMart POS adalah aplikasi Point of Sale (POS) yang dirancang untuk membantu bisnis Anda dalam
                        manajemen penjualan, stok, dan transaksi dengan mudah dan efisien.</p>
                </div>
            </div>
        </section>
    </div>
    @include('template.footer')
</div>
