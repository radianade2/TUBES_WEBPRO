<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk Skincare</title>
</head>
<body>
    <div class="container">
        <h1>Detail Produk Skincare</h1>

        <?php if($skincare): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Moisturizer</th>
                        <th>Serum</th>
                        <th>Sunscreen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo e($skincare->moisturizer); ?></td>
                        <td><?php echo e($skincare->serum); ?></td>
                        <td><?php echo e($skincare->sunscreen); ?></td>
                    </tr>
                </tbody>
            </table>
        <?php else: ?>
            <p>Produk tidak ditemukan.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\coba-app\resources\views/skincare/show.blade.php ENDPATH**/ ?>