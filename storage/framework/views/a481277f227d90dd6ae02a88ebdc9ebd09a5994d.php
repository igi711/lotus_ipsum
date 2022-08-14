
<?php $__env->startSection('content'); ?>
<style>
#body{
 background-color: #A1045A;
}
</style>

<form class="container-fluid mx-auto" style="border:2px solid white;background-color:white;width:30rem;border-radius:20px; margin:3rem; margin-bottom:6rem;">
<p class="text-center"><strong>Jelentkezz be!</p>
  <div class="mb-4 text-center">
    <label for="exampleInputEmail1" class="form-label" style="margin-top:1rem;">E-mail cím</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-4 text-center">
    <label for="exampleInputPassword1" class="form-label">Jelszó</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check mx-auto">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <label class="form-check-label text-center" for="flexSwitchCheckDefault">Check me out</label>
</div>
  </div>
  <button type="submit" class="btn text-white " style="background-color:#A1045A; border:2px solid white;margin:1rem;">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Brigi\Desktop\tutorial\resources\views/pages/user.blade.php ENDPATH**/ ?>