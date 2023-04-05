<?php $__env->startSection('title', 'Barang'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
    </div>
    <div class="card-body">
        <a href="<?php echo e(route('barang.tambah')); ?>" class="btn btn-primary mb-3">Tambah Barang</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Barang</th>
                        <th>Kode Barang</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php ($no = 1); ?>
                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($no++); ?></th>
                        <td><?php echo e($row ->kode_barang); ?></td>
                        <td><?php echo e($row ->nama_barang); ?></td>
                        <td><?php echo e($row ->kategori_barang); ?></td>
                        <td><?php echo e($row ->harga); ?></td>
                        <td><?php echo e($row ->jumlah); ?></td>
                        <td>
                            <a href="<?php echo e(route('barang.edit', $row->id)); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo e(route('barang.hapus', $row->id)); ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tugas_CMS\CMS\resources\views/barang/index.blade.php ENDPATH**/ ?>