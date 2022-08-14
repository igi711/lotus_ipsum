
<?php $__env->startSection('content'); ?>
<style>
 /* #body{
 background-image: url(img/lotus.png); 
 background-repeat: no-repeat;
} */

#exampleCheck1{

}
</style>

<form class="container-fluid mx-auto  col-md-6 " style="border:none;box-shadow: 0px 0px 10px #F157A1;background-color:white;width:30rem;border-radius:20px; margin:3rem; margin-bottom:6rem;">
<p class="text-center p-2 my-1">Jelentkezz be!</p>
  <div class="mb-4 text-center">
    <label for="exampleInputEmail1" class="text-center p-2 my-1" style="margin-top:1rem;">E-mail cím</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-4 text-center">
    <label for="exampleInputPassword1" class="form-label">Jelszó</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check mx-auto">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Emlékezz rám!</label>
  </div>
 
  <button type="submit" class="btn text-white" style="background-color:#F10081; border:2px solid white;margin:0.5rem;border-radius:20px;">Bejelentkezés</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Brigi\Desktop\larav\tutorial\resources\views/pages/user.blade.php ENDPATH**/ ?>