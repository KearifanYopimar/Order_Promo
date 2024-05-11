<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Produk</div>
                    <div class="card-body">
                        <a href="<?php echo e(route('product.tambah')); ?>" class="btn btn-success mb-3">Tambah</a> <!-- Tombol Tambah -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($product->id_product); ?></td>
                                    <td><?php echo e($product->Product_Name); ?></td>
                                    <td><?php echo e($product->Price); ?></td>
                                    <td><?php echo e($product->Qty); ?></td>
                                    <td><?php echo e($product->KategoriAA); ?></td>
                                    <td>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Fix_llogin\Fix_llogin\latihan\resources\views/backend/content/product/list.blade.php ENDPATH**/ ?>