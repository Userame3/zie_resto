 <section class="section">
     <div class="">
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table" id="table1">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama Jenis</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($jenis as $j)
                             <tr>
                                 <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                                 <td>{{ $j->nama_jenis }}</td>
                                 <td>
                                     <form method="post" style="display: inline"
                                         action="{{ url(request()->segment(1) . '/' . $j->id) }}">
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
