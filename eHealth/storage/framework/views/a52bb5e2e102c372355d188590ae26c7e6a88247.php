

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Kartu Kesehatan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Navigasi</a></li>
          <li class="breadcrumb-item active">Kartu Kesehatan</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <?php if(Auth::user()->hasRole('Admin')): ?>
          <div class="card-header">
            <a href="<?php echo e(route('kartuKes.create')); ?>" class="btn btn-primary" >Tambah</a>
          </div>
          <?php endif; ?>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Kelas</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Kelas</th>
                <th>Aksi</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo e(route('kartuKes.index')); ?>",
        "columns": [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
            },
            {
                data: 'nama',
                name: 'nama',
            },
            {
                data: 'jenis',
                name: 'jenis',
            },
            {
                data: 'kelas',
                name: 'kelas',
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rekam-medis\Web-Rekam-Medis\eHealth\resources\views/kartuKes.blade.php ENDPATH**/ ?>