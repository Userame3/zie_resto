 <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel1">Tambah Stok</h4>
                 <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                     <i data-feather="x"></i>
                 </button>
             </div>
             <div class="modal-body">
                 <section id="multiple-column-form">
                     <div class="row match-height">
                         <div class="col-12">
                             <div>
                                 <div class="card-content">
                                     <div class="card-body">
                                         <form class="form" action="jenis" method="post" data-parsley-validate>
                                             @csrf
                                             <div class="row">
                                                 <div class="col-6">
                                                     <div class="form-group mandatory">
                                                         <label for="nama_menu" class="form-label">Pilih Menu</label>
                                                         <select class="form-select" id="basicSelect">
                                                             @foreach ($stok as $s)
                                                                 <option value="{{ $s->menu->menu_id }}">
                                                                     {{ $s->menu->nama_menu }} </option>
                                                             @endforeach
                                                         </select>
                                                     </div>
                                                 </div>
                                                 <div class="col-6">
                                                     <div class="form-group mandatory">
                                                         <label for="jumlah" class="form-label">Jumlah</label>
                                                         <input type="text" name="jumlah" id="jumlah"
                                                             class="form-control" placeholder="Jumlah Stok"
                                                             name="fname-column" data-parsley-required="true" />
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row">
                                             </div>
                                             <div class="row">
                                                 <div class="modal-footer">
                                                     <div class="col-12 d-flex justify-content-end">
                                                         <button type="submit" class="btn btn-primary me-1 mb-1">
                                                             Submit
                                                         </button>
                                                         <button type="reset"
                                                             class="btn btn-light-secondary me-1 mb-1">
                                                             Reset
                                                         </button>
                                                     </div>
                                                 </div>
                                             </div>
                                     </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
             </div>
             </section>
         </div>

     </div>
 </div>
