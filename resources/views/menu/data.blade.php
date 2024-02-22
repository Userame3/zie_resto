 <section class="section">
     <div class="">
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table" id="table">
                     <thead>
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Phone</th>
                             <th>City</th>
                             <th>Status</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($menu as $m)
                             <tr>
                                 <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                                 <td>{{ $m->jenis->jenis_Id }}</td>
                                 <td>{{ $m->nama_menu }}</td>
                                 <td>{{ $m->harga }}</td>
                                 <td>{{ $m->kategori->nama_kategori }}</td>
                                 <td>{{ $m->image }}</td>
                                 <td>
                                     <span class="badge bg-success">Active</span>
                                 </td>
                             </tr>
                         @endforeach

                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </section>
