@extends('layouts.app')
@section('content')

<div class=" container-fluid p-3 my-3 text-center text-white w-100" style="background-color:#F1AEE4;  border-left: 6px solid #F10081;">
  <p><strong>Kedves Vásárló!</strong> A szállítás költsége minden termék esetén 1600Ft.</p>
</div> 

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" >
<div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
<div id="prod_1" class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
    <div class="card-body">
      <h5 class="card-title text-center">Termék neve</h5>
      <p class="price text-center">1450 Ft</p>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit lon</p>
      <a href={{ url("shop/prod_1") }} type=button id="prod_1" class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color: #F157A1;border-color: #F157A1;">Részletek</a>
    </div>
  </div>
  </div>
  <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
  <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
    <div class="card-body">
      <h5 class="card-title text-center">Termék neve</h5>
      <p class="price text-center">1450 Ft</p>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit lon</p>
      <a href={{ url("shop/prod_2") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color: #F157A1;border-color: #F157A1;">Részletek</a>
    </div>
  </div>
  </div>
  <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
  <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
    <div class="card-body">
      <h5 class="card-title text-center">Termék neve</h5>
      <p class="price text-center">1450 Ft</p>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer conten</p>
      <a href={{ url("shop/prod_3") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color:#F157A1;border-color: #F157A1;">Részletek</a>
    </div>
  </div>
  </div>
  <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
  <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
   <div class="card-body">
     <h5 class="card-title text-center">Termék neve</h5>
     <p class="price text-center">1450 Ft</p>
     <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
     <a href={{ url("shop/prod_4") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color:#F157A1;border-color: #F157A1;">Részletek</a>
   </div>
 </div>
 </div>
 <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
 <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
   <div class="card-body">
     <h5 class="card-title text-center">Termék neve</h5>
     <p class="price text-center">1450 Ft</p>
     <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
     <a href={{ url("shop/prod_5") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color:#F157A1;border-color: #F157A1;">Részletek</a>
   </div>
 </div>
 </div>
 <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
 <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
    <div class="card-body">
      <h5 class="card-title text-center">Termék neve</h5>
      <p class="price text-center">1450 Ft</p>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <a href={{ url("shop/prod_6") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color:#F157A1;border-color: #F157A1;">Részletek</a>
    </div>
  </div>
  </div>
  <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
  <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
    <div class="card-body">
      <h5 class="card-title text-center">Termék neve</h5>
      <p class="price text-center">1450 Ft</p>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <a href={{ url("shop/prod_7") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color: #F157A1;border-color: #F157A1;">Részletek</a>
    </div>
  </div>
  </div>
  <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
  <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
    <div class="card-body">
      <h5 class="card-title text-center">Termék neve</h5>
      <p class="price text-center">1450 Ft</p>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <a href={{ url("shop/prod_8") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color: #F157A1;border-color: #F157A1;">Részletek</a>
    </div>
  </div>
  </div>
  <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
  <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
    <div class="card-body">
      <h5 class="card-title text-center">Termék neve</h5>
      <p class="price text-center">1450 Ft</p>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <a href={{ url("shop/prod_9") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color: #F157A1;border-color: #F157A1;">Részletek</a>
    </div>
  </div>
  </div>
  <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
  <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
    <div class="card-body">
      <h5 class="card-title text-center">Termék neve</h5>
      <p class="price text-center">1450 Ft</p>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <a href={{ url("shop/prod_10") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color: #F157A1;border-color: #F157A1;">Részletek</a>
    </div>
  </div>
  </div>
  <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
  <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
    <div class="card-body">
      <h5 class="card-title text-center">Termék neve</h5>
      <p class="price text-center">1450 Ft</p>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <a href={{ url("shop/prod_11") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color: #F157A1;border-color: #F157A1;">Részletek</a>
    </div>
  </div>
  </div>
 <div class="col-9 col-sm-6 col-md-3" style="width:18rem;margin: 2rem;">
 <div class="card h-100" style=" border-top-left-radius: 10em;border-top-right-radius: 10em; border:none;box-shadow: 0px 0px 10px #F180C0;">
    <img src="img/lotus.png" class="card-img-top" alt="..." style="border-top-left-radius: 10em; border-top-right-radius: 10em;">
   <div class="card-body">
     <h5 class="card-title text-center">Termék neve</h5>
     <p class="price text-center">1450 Ft</p>
     <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
     <a href={{ url("shop/prod_12") }} class="btn btn-primary" style=" width: 100%;padding: 0.75em 0.5em;border-radius: 0;background-color: #F157A1;border-color: #F157A1;">Részletek</a>
   </div>
 </div>
</div>
</div>

<script>
let buttons = document.querySelectorAll('.open-prod_1');

buttons.forEach(button => {
    button.addEventListener('click', function (event) {
        document.getElementById(event.target.dataset.target).classList.toggle('hidden');
  });
});
</script>
@endsection



