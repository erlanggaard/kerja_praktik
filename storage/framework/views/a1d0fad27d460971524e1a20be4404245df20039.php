

<?php $__env->startSection('title', 'Halaman Khusus Admin'); ?>

<?php $__env->startSection('container'); ?>
<div class="section-body">
    <div class="card-body">
        <div class="row mt-5">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="wizard-steps">
                    <div class="wizard-step wizard-step-active">
                        <div class="wizard-step-icon">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <div class="wizard-step-label">
                            Produk Terjual
                        </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                        <div class="wizard-step-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="wizard-step-label">
                            Best Seller
                        </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                        <div class="wizard-step-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="wizard-step-label">
                            Produk Tidak Terjual
                        </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                        <div class="wizard-step-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="wizard-step-label">
                            Pelanggan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/mahasiswa/admin.blade.php ENDPATH**/ ?>