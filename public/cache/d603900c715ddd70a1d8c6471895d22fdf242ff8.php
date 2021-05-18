<?php $__env->startSection('title', 'Anasayfa'); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST">
        <div>
            <input type="text" class="<?php if(isset($errors['username'])) : ?>has-error<?php endif ?>" name="username" value="<?=$_posts['username'] ?? null ?>" placeholder="Ad">
            <?php if(isset($errors['username'])): ?><div class="box-error"><?php echo $errors['username'][0] ?></div><?php endif ?>
        </div>
        <div>
            <input type="text" name="password" placeholder="Şifre">
            <?php if(isset($errors['password'])): ?>
                <div style="color: red"><?php echo e($errors['password'][0]); ?></div>
            <?php endif; ?>
        </div>
        <div>
            <input type="text" name="rep_password" placeholder="Şifre Tekrarı">
            <?php if(isset($errors['rep_password'])): ?>
                <div style="color: red"><?php echo e($errors['rep_password'][0]); ?></div>
            <?php endif; ?>
        </div>
        <div>
            <button type="submit">Giriş Yap</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/mvc/public/views/home.blade.php ENDPATH**/ ?>