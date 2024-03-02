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
    <div>
        <script>
            function changeJenis(e) {
                console.log(e.value)
                $('.jenis').toggleClass('active')
                $('.jenis.' + e.value).toggleClass('active')
            }
        </script>
        <select name="" id="" onchange="changeJenis(this)" style="pointer: cursor">
            @foreach ($jenis as $j)
                <option value="{{ strtolower($j->nama_jenis) }}">{{ $j->nama_jenis }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-3" style="position: sticky; left: 100%; top:10%">
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
                <div class="col-md-8" style="overflow: auto;height:50dvh">
                    @foreach ($jenis as $j)
                        <div
                            class="card jenis {{ strtolower($j->nama_jenis) }} {{ $loop->index == 0 ? 'active' : '' }}">
                            <div style="background-color: rgb(20, 85, 189); color:white;" class="card-header">
                                {{ $j->nama_jenis }}
                            </div>
                            @foreach ($j->menu as $menu)
                                <div class="card-body">
                                    <!-- Product List -->
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4" style="width:200px;">
                                            <div class="card text-center" style="background-color:beige;">
                                                <div>
                                                    <img class="mt-4 mx-auto d-block" width="100px"
                                                        src="{{ asset('images/' . $menu->image) }}">
                                                </div>
                                                <div>
                                                    <h5>{{ $menu->nama_menu }}</h5>
                                                    <p>Rp.{{ $menu->harga }}</p>
                                                    <button class="btn btn-success">Add to Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>


    @include('template.footer')