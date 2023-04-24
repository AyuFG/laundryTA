@extends('layouts.admin.app')

@section('title', 'Kelola user')

@section('content')

<div class="col-lg-12 form-wrapper" id="kelola-user">
  <form action="">
    <div class="container">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <b>Tabel Data User</b>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table-responsive table table-bordered bordered table-striped table-condensed datatable" ui-jq="dataTable" ui-options="dataTableOpt"">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Telepon</th>
                      <th>Roles ID</th>
                      <th>More</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $user->nama }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->no_telepon }}</td>
                      <td>{{ $user->roles_id }}</td>
                      <td class="manage-row">
                      @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.user.show',$user->id) }}" class="edit-button">
                          <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('super.user.edit',$user->id) }}" class="edit-button">
                          <i class="fa-solid fa-marker"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <a role="button"  class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$user->id}}">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-sm{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="">
                          <div class="modal-dialog ">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal">
                                      </button>
                                  </div>
                                  <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                  <div class="modal-footer">
                                      <form action="{{route('super.user.destroy', $user->id)}}" method="POST">
                                      @method('DELETE')
                                      @csrf
                                      <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                    </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No Telepon</th>
                      <th>Roles ID</th>
                      <th>More</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            @include('menu')
    </div>
  </form>
</div>

@endsection

@section('script')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endsection