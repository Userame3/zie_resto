 <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="myModalLabel1">Tambah Menu</h5>
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
                                         <form class="form" action="menu" method="post" data-parsley-validate
                                             enctype="multipart/form-data">
                                             @csrf
                                             <div class="row">
                                                 <div class="col-6">
                                                     <label for="nama_jenis" class="form-label">Pilih Jenis</label>
                                                     <select name="jenis_id" class="form-select" id="basicSelect">
                                                         @foreach ($jenis as $j)
                                                             <option value="{{ $j->id }}">
                                                                 {{ $j->nama_jenis }} </option>
                                                         @endforeach
                                                     </select>
                                                 </div>
                                                 <div class="col-md-6 col-12">
                                                     <div class="form-group mandatory">
                                                         <label for="nama_menu" class="form-label">Nama
                                                             Menu</label>
                                                         <input type="text" id="nama_menu" class="form-control"
                                                             placeholder="Nama Menu" name="nama_menu"
                                                             data-parsley-required="true" />
                                                     </div>
                                                 </div>
                                                 <div class="col-6">
                                                     <label for="harga" class="form-label">Harga</label>
                                                     <div class="form-group position-relative has-icon-left">
                                                         <input type="number" name="harga" id="harga"
                                                             class="form-control" name="fname-column"
                                                             data-parsley-required="true" />
                                                         <div class="form-control-icon p-auto">
                                                             <h7 class="align-bottom ">Rp.<h7>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-6">
                                                     <label class="form-label">Deskripsi
                                                     </label>
                                                     <textarea class="form-control" name="deskripsi" id="deskripsi" rows="2"></textarea>
                                                 </div>
                                                 <div class="col-12">
                                                     <div class="form-group">
                                                         <label class="form-label">Upload Image</label>
                                                         <input type="file" name="image"
                                                             class="image-preview-filepond">
                                                     </div>
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
 </div>
