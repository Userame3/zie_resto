 <div class="modal fade text-left" id="formJenisModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="myModalLabel1">Tambah Jenis</h5>
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
                                             <div id="method"></div>
                                             <div class="row">
                                                 <div class="col-md-12 col-12">
                                                     <div class="form-group mandatory">
                                                         <label for="nama_jenis" class="form-label">Nama Jenis</label>
                                                         <input type="text" name="nama_jenis" id="nama_jenis"
                                                             class="form-control" placeholder="Nama Jenis"
                                                             name="fname-column" data-parsley-required="true" />
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="col-12">
                                                     <div class="form-group mandatory">
                                                     </div>
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
