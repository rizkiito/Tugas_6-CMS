<?php $__env->startSection('title', 'Form Barang'); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(isset($barang) ?route('barang.tambah.update', $barang->id) : route('barang.tambah.simpan')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo e(isset($barang) ? 'Edit Barang' : 'Tambah Barang'); ?></h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo e(isset($barang) ? $barang->kode_barang : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo e(isset($barang) ? $barang->nama_barang : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori</label>
                        <input type="text" class="form-control" id="kategori_barang" name="kategori_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Barang</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Barang</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tugas_CMS\CMS\resources\views/barang/form.blade.php ENDPATH**/ ?>