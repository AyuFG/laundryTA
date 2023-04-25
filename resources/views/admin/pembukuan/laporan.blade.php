@extends('layouts.admin.app')

@section('title', 'Laporan')

@section('content')

<!--pemasukan-->
<div class="col-lg-12 form-wrapper pb-5" id="pemasukan">
  <form action="">
    <div class="container">
        <div class="card">
            <div class="card-header">
              <h4 class="text-center">
                  <b>Laporan Pembukuan</b>
              </h4>
          </div>
              <div class="py-3 px-4 row">
                    <label class="col-sm-3 col-form-label"
                        >Bulan :
                    </label>
                    <select class="col-sm-9 col-form-label rounded-2" name="bulan" id="bulan">
                      <option value="Januari">Januari</option>
                      <option value="Februari">Februari</option>
                      <option value="Maret">Maret</option>
                      <option value="April">April</option>
                      <option value="Mei">Mei</option>
                      <option value="Juni">Juni</option>
                      <option value="Juli">Juli</option>
                      <option value="Agustus">Agustus</option>
                      <option value="September">September</option>
                      <option value="Oktober">Oktober</option>
                      <option value="November">November</option>
                      <option value="Desember">Desember</option>
                    </select>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped fs-6">
                  <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>01/01/2023</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                  </tr>
                  <tr>
                    <td>01/01/2023</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                  </tr>
                  <tr>
                    <td>01/01/2023</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                  </tr>
                  <tr>
                    <td>01/01/2023</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                  </tr>
                  <tr>
                    <td>01/01/2023</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                  </tr>
                  <tr>
                    <td>01/01/2023</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                  </tr>
                  <tr>
                    <td>01/02/2023</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            @include('admin.menu')
    </div>
  </form>
</div>
<!--./pemasukan-->

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
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
@endsection
