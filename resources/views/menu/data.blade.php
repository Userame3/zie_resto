 <section class="section">
     <div class="">
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table" id="table1">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Jenis</th>
                             <th>Nama Menu</th>
                             <th>Harga</th>
                             <th>Image</th>
                             <th>Deskripsi</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($menu as $m)
                             <tr>
                                 <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                                 <td>{{ $m->jenis->nama_jenis }}</td>
                                 <td>{{ $m->nama_menu }}</td>
                                 <td>{{ $m->harga }}</td>
                                 <td><img width="100px" src="{{ asset('images/' . $m->image) }}" alt=""></td>
                                 <td class="text-wrap" style="width: 9rem">{{ $m->deskripsi }}</td>
                                 <td>
                                     <form method="post" style="display: inline"
                                         action="{{ url(request()->segment(1) . '/' . $m->id) }}">
                                         @method('DELETE')
                                         @csrf
                                         <button type="button" title="Delete" class="btn btn-danger delete-data">
                                             <i class="fas fa-trash danger"></i>
                                         </button>
                                     </form>
                                     <button class="btn btn-success">
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
