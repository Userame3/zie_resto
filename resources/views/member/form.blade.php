 <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="myModalLabel1">Tambah Member</h5>
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
                                         <form class="form" action="member" method="post" data-parsley-validate>
                                             @csrf
                                             <div class="row">
                                                 <div class="col-md-6 col-12">
                                                     <div class="form-group ">
                                                         <label for="nama" class="form-label">Nama Member</label>
                                                         <input type="text" name="nama" id="nama"
                                                             class="form-control" placeholder="Nama Member"
                                                             name="fname-column" data-parsley-required="true" />
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6 col-12">
                                                     <div class="form-group ">
                                                         <label for="email" class="form-label">Email</label>
                                                         <input type="email" name="email" id="email"
                                                             class="form-control" placeholder="Email"
                                                             name="fname-column" data-parsley-required="true" />
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6 col-12">
                                                     <div class="form-group ">
                                                         <label for="no_tlp" class="form-label">No Telpon</label>
                                                         <input type="text" name="no_tlp" id="no_tlp"
                                                             class="form-control" placeholder="No Telpon"
                                                             name="fname-column" data-parsley-required="true" />
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6 col-12">
                                                     <div class="form-group ">
                                                         <label for="alamat" class="form-label">Alamat</label>
                                                         <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" name="fname-column"
                                                             data-parsley-required="true"></textarea>
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
