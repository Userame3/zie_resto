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
                    <h3>Stok</h3>
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
    </div>

    <div class="col-md-3" style="position: relative; left: 75%;">
        <div class="card">
            <div class="card-header" style="background-color: rgb(20, 85, 189); color:white;">
                Cart
            </div>
            <div class="card-body">
                <!-- Cart Items -->
                <ul class="list-group">
                    <li class="list-group-item">Product 1 - $10.00 <span class="float-end"><button
                                class="btn btn-danger btn-sm">Remove</button></span></li>
                    <!-- Add more cart items as needed -->
                </ul>

                <!-- Total -->
                <div class="mt-3">
                    <h5>Total: $10.00</h5>
                </div>

                <!-- Checkout Button -->
                <button class="btn btn-primary mt-3">Checkout</button>
            </div>
        </div>
    </div>
    <section class="section" style="position:relative;top: -17rem">
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-md-8">
                    <select class="form-select" onchange="changeJenis(this)" style="pointer: cursor">
                        @foreach ($jenis as $j)
                            <option value="{{ strtolower($j->nama_jenis) }}">{{ $j->nama_jenis }}
                            </option>
                        @endforeach
                    </select>
                    @foreach ($jenis as $j)
                        <div
                            class="card jenis  {{ strtolower($j->nama_jenis) }} {{ $loop->index == 0 ? 'active' : 'hide' }}">
                            <div style="background-color: rgb(20, 85, 189); color:white;" class="card-header">
                                {{ $j->nama_jenis }}
                            </div>
                            <br>
                            <br>
                            <div class="menu-container-aw flex flex-wrap justify-content-center"
                                style="display:flex;flex-wrap:wrap;gap:1rem">
                                @foreach ($j->menu as $menu)
                                    <!-- Product List -->
                                    <br>
                                    <div class="col-md-3" style="">
                                        <div class="card text-center"
                                            style="background-color:beige;width:200px; height:250px; ">
                                            <div>
                                                <img class="mt-4 mx-auto d-block" width="100px"
                                                    src="{{ asset('images/' . $menu->image) }}">
                                            </div>
                                            <div class="h-100 d-flex flex-column pb-2 " style="align-items:center">
                                                <h5>{{ $menu->nama_menu }}</h5>
                                                <p>Rp.{{ $menu->harga }}</p>
                                                <button class="btn btn-success w-75" style="margin-top:auto;">Add to
                                                    Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <script>
        function changeJenis(e) {
            console.log(e.value)
            $('.jenis').removeClass('active')
            $('.jenis').addClass('hide')
            console.log($('.jenis.' + e.value))
            $('.jenis.' + e.value).removeClass('hide')
            $('.jenis.' + e.value).addClass('active')
        }
    </script>


    @include('template.footer')
