
<?php $__env->startSection('content'); ?>

<h2 class="text-center p-3 my-3">Termék_1 bemutató oldala</h2>


<div id="carouselExampleIndicators" class="container-fluid carousel carousel-dark slide" data-bs-ride="carousel" >
    <div class="carousel-inner">
        
        <div class="carousel-item active">
            <img src="\img\lotus.png" class="d-block w-50 mx-auto">
        </div>
        <div class="carousel-item ">
            <img src="\img\7.png" class="d-block w-50 mx-auto">
        </div>
        <div class="carousel-item">
            <img src="\img\6.png" class="d-block w-50 mx-auto">
        </div>
        <div class="carousel-item">
            <img src="\img\5.png" class="d-block w-50 mx-auto">
        </div>
</div>
 </div>




  <ol class="carousel-indicators" style="position: static;">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" style="width: 300px;height: 100%;opacity: 0.8;}">
    <img src="\img\lotus.png" class="d-block w-100"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" style="width: 300px;height: 100%;opacity: 0.8;}">
    <img src="\img\7.png" class="d-block w-100"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" style="width: 300px;height: 100%;opacity: 0.8;}">
    <img src="\img\6.png" class="d-block w-100"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" style="width: 300px;height: 100%;opacity: 0.8;}">
    <img src="\img\5.png" class="d-block w-100"></li>
</ol>

   



<hr style="border: 2px solid #A1045A">
<h3 class="text-center p-3 my-3">Információk a termékről:</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lectus arcu bibendum at varius vel pharetra. Sed adipiscing diam donec adipiscing tristique risus nec. Faucibus turpis in eu mi bibendum. Egestas purus viverra accumsan in nisl nisi. </p>



<label for="exampleColorInput" class="form-label">Válassz színt!</label>
<input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color" style="width:60px; margin: 2rem;">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Brigi\Desktop\larav\tutorial\resources\views/pages/product/prod_1.blade.php ENDPATH**/ ?>