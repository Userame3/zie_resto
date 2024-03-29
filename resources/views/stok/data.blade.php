 <section class="section">
     <div class="">
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table" id="table1">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama Jenis</th>
                             <th>Jumlah</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($stok as $m)
                             <tr>
                                 <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                                 <td>{{ $m->menu->nama_menu }}</td>
                                 <td>{{ $m->jumlah }}</td>
                                 <td>
                                     <form method="post" style="display: inline; pointer:block;"
                                         action="{{ url(request()->segment(1) . '/' . $m->id) }}">
                                         @method('DELETE')
                                         @csrf
                                         <button class="btn btn-danger delete-data">
                                             <i class="fas fa-trash danger"></i>
                                         </button>
                                     </form>

                                     <button class="btn btn-success disable">
                                         <i class="fas fa-edit"></i>
                                     </button>
                                 </td>

                             </tr>
                         @endforeach

                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </section>
