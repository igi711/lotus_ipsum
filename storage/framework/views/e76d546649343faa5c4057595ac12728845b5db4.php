
<?php $__env->startSection('content'); ?>
<style>
.card {
  border: 0;
  border-radius: 0;
  color: #fff;
  box-shadow: 5px 5px 3px #e1e1e1;
  padding: 3em 0;
  border-bottom-right-radius: 4em;
  border-top-left-radius: 4em;
  background: linear-gradient(to left, #F157A1 50%, #F10081 50%);
  background-size: 200%;
  background-position: right;
  transition: background-position 0.5s ease-out;
}
.card-icon {
  margin: 0 1em;
}
.card-icon i{
  font-size: 3em;
}
.card:hover {
  background-position: left;
}

</style>
<div id="carouselExampleDark" class="container-fluid carousel carousel-dark slide" data-bs-ride="carousel" style="margin-top:10px; margin-bottom:3rem;">
    <div class="carousel-inner ">
      <div class="carousel-item active ">
          <img src="img/slide1.png" alt="lotus ipsum" class="d-block w-100 mx-auto">
        </div>
        <div class="carousel-item">
          <img src="img/slide2.png" alt="lotus ipsum" class="d-block w-100 mx-auto">
        </div>
        <div class="carousel-item">
          <img src="img/slide3.png" alt="lotus ipsum" class="d-block w-100 mx-auto">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

<div class="container-fluid text-center p-3 my-3">
<h3 style="color:#E39FF6;"><em>Tellus in metus vulputate eu!</h3>
<p> Orcipellentesque dignissim enim sit amet venenatis. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris. Faucibus ornare suspendisse sed nisi lacus. Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. In nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque. Est ultricies integer quis auctor. Nec ultrices dui sapien eget mi. Mi sit amet mauris commodo quis imperdiet massa tincidunt. Et ligula ullamcorper malesuada proin libero nunc consequat. Cursus in hac habitasse platea dictumst quisque sagittis. Egestas erat imperdiet sed euismod nisi porta lorem mollis.</p>
</div>

<div class="row">
  <div class="col-lg-4 col-md-6 col-s-1">
<div class="card" style="width:18rem; height:22rem;margin-bottom:2rem;margin-top:1rem;">
    <div class="card-body">
        <h5 class="card-title">Termék kategória</h5>
        <p class="card-text">Vivamus id accumsan nisi. Vivamus ex nibh, vehicula ut sollicitudin nec, suscipit sollicitudin tortor. Quisque ac nisi a nulla vulputate volutpat tempus sed dolor. Quisque sed orci eu lacus egestas volutpat.</p>
        <a href="#" class="btn btn-outline-light">Nézd meg!</a>
    </div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-s-1">
<div class="card" style="width:18rem; height:22rem;margin-bottom:2rem;margin-top:1rem;">
    <div class="card-body">
        <h5 class="card-title">Termék kategória</h5>
        <p class="card-text">Quisque nibh ex, consectetur vitae ligula non. Aenean mauris metus, pharetra ac ullamcorper at, vestibulum ut felis.Nunc posuere volutpat aliquet. Aenean id faucibus ligula, in malesuada lectus.</p>
        <a href="#" class="btn btn-outline-light">Nézd meg!</a>
    </div>
</div>
</div>


<div class="col-lg-4 col-md-6 col-s-1">
<div class="card" style="width:18rem;height:22rem;margin-bottom:2rem;margin-top:1rem;">
    <div class="card-body">
        <h5 class="card-title">Termék kategória</h5>
        <p class="card-text">Aenean vitae iaculis elit. Aliquam augue dui, congue ac feugiat non, scelerisque in odio. Donec tempus in nisl eget placerat. Pellentesque a dolor posuere, iaculis quam in, vulputate erat. Nunc posuere volutpat aliquet.</p>
        <a href="#" class="btn btn-outline-light">Nézd meg!</a>
    </div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Brigi\Desktop\larav\tutorial\resources\views/pages/index.blade.php ENDPATH**/ ?>