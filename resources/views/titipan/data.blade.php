 <section class="section">
     <div class="">
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table" id="table1">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama Produk</th>
                             <th>Nama Supplier</th>
                             <th>Harga Beli</th>
                             <th>Harga Jual</th>
                             <th>Stok</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($titipan as $t)
                             <tr>
                                 <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                                 <td>{{ $t->nama_produk }}</td>
                                 <td>{{ $t->nama_supplier }}</td>
                                 <td>{{ $t->harga_beli }}</td>
                                 <td>{{ $t->harga_jual }}</td>
                                 <td>{{ $t->stok }}</td>
                                 <td>
                                     <button class="btn btn-success" data-bs-toggle="modal"
                                         data-bs-target="#formTitipanModal" data-mode="edit" data-id="{{ $t->id }}"
                                         data-nama_produk="{{ $t->nama_produk }}"
                                         data-nama_supplier="{{ $t->nama_supplier }}"
                                         data-harga_beli="{{ $t->harga_beli }}" data-harga_jual="{{ $t->harga_jual }}"
                                         data-stok="{{ $t->stok }}">
                                         <i class="fas fa-edit"></i>
                                     </button>
                                     <form method="post" style="display: inline"
                                         action="{{ url(request()->segment(1) . '/' . $t->id) }}">
                                         @method('DELETE')
                                         @csrf
                                         <button type="button" title="Delete" class="btn btn-danger delete-data">
                                             <i class="fas fa-trash danger"></i>
                                         </button>
                                     </form>

                                 </td>

                             </tr>
                         @endforeach

                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </section>
