<?php include 'header.php'; ?>

<main class="container-acc">

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <?= get_custom_logo($blog_id)?>
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
        <li class="nav-item logoipsum-underline-purple">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item logoipsum-underline-purple">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item logoipsum-underline-purple">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item logoipsum-underline-purple">
          <a class="nav-link" href="#">Blog</a>
        </li>
      </ul>
      <span class="navbar-text">
      <button type="button" class="btn1 btn-primary border-white btn-lg"><b>Get Started</b></button>
      </span>
    </div>
  </div>
</nav>
<!--fin nav bar-->
<!--intro-->
<div class="row pt-5">

<div class="col-md-5 col-sm-12 order-md-1 order-sm-2">
    <h1 class="logoipsum-title">
        Grow your subscription business
    </h1>
    <p class="text-black-50 fs-4">
        Outcome-centered products that reduce churn, optimize pricing, and grow your subscription business end-to-end.
    </p>
    <button type="button" class="btn logoipsum-btn-purple btn-lg pb-3 pt-3">Get started</button>
</div>
<div class="col-md-1 col-sm-0"></div>
<div class="col-md-6 col-sm-12 order-md-2 order-sm-1">
    <img src="<?= get_template_directory_uri();?>/images/skater-1.png">
</div>

</div>
<!--fin intro-->
<!--logo-->
<div class="container">
     <div class="row">
        <div class="col-md-3 col-sm-4"><img src="<?= get_template_directory_uri();?>/images/logoipsum-1.svg" alt=""></div>
        <div class="col-md-2 col-sm-4"><img src="<?= get_template_directory_uri();?>/images/logoipsum-2.svg" alt=""></div>
        <div class="col-md-2 col-sm-4"><img src="<?= get_template_directory_uri();?>/images/logoipsum-3.svg" alt=""></div>
        <div class="col-md-2 col-sm-4"><img src="<?= get_template_directory_uri();?>/images/logoipsum-4.svg" alt=""></div>
        <div class="col-md-3 col-sm-4"><img src="<?= get_template_directory_uri();?>/images/logoipsum-5.svg" alt=""></div>
     </div>
</div>
</div>
<!--fin logo-->
<!--choix-->
<div class="row pt-5">

<div class="col-md-1 col-sm-0"></div>
<div class="col-md-6 col-sm-12 order-md-1 order-sm-1">
    <img src="<?= get_template_directory_uri();?>/images/intello-1.png">
</div>

<div class="col-md-5 col-sm-12 order-md-2 order-sm-2">
    <h1 class="logoipsum-title">
    Subscription index
    </h1>
    <p class="text-black-50 fs-4">
    A daily dataset to keep you up to date on subscription market trends and what's happening in your vertical.
    </p>
    <div class="col-12"><p class="lead1"><b>Learn more</b></p></div>
    
   
</div>

</div>

</div>
<div class="row pt-5">

<div class="col-md-5 col-sm-12 order-md-1 order-sm-2">
    <h1 class="logoipsum-title">
    In-depth metrics
    </h1>
    <p class="text-black-50 fs-4">
    Accurate, real-time reporting at your fingertips. Getting data has never been easier.
    </p>
    <div class="col-12"><p class="lead1"><b>Learn more</b></p></div>
    
   
</div>
<div class="col-md-1 col-sm-0"></div>
<div class="col-md-6 col-sm-12 order-md-2 order-sm-1">
    <img src="<?= get_template_directory_uri();?>/images/intello-2.png">
</div>

</div>
</div>
<!--finchoix-->
<!--debutexplication-->
<div class="container3">
     <div class="row align-items-start">
          <div class="col">
             <img src="<?= get_template_directory_uri();?>/images/carte1.png" class="imgcarte" alt="...">
             <p class="h5"><b>Benchmarks</b></p>
             <p class="text-black-50 fs-4">See how you stack up against comparable companies in similar stages.</p>
         </div>
          <div class="col">
             <img src="<?= get_template_directory_uri();?>/images/calculette1.png" class="imgcalculette" alt="...">
             <p class="h5"><b>Pricing Audit</b></p>
             <p class="text-black-50 fs-4">Benchmark the health of your monetization and pricing strategy.</p>
         </div>
          <div class="col">
             <img src="<?= get_template_directory_uri();?>/images/photo1.png" class="imgphoto" alt="...">
             <p class="h5"><b>Retention Audit</b></p>
             <p class="text-black-50 fs-4">Audit where revenue leakage exists and where you can increase retention.</p>
         </div>
      </div>
 </div>
</div>
<!--finexplication-->
<!--choixdeux-->
<div class="container mt-4 d-flex justify-content-between align-items-center">

    <div>
        <h1 class="logoipsum-title">
        Get the right plan for future product.
        </h1>
    </div>

<div>
    <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary logoipsum p-3" id="btn-yearly">Yearly</button>
            <button type="button" class="btn btn-outline-primary logoipsum p-3" id="btn-monthly">Monthly</button>
    </div>
</div>


</div>
<!--finchoixdeux-->
<!--choixcards-->
<div class="container mt-5">

 <div class="row">
 <div class="col-md-4 col-sm-12">
    <div class="card1">
         <div class="card-body">
          <h5 class="card-title text-black-50 fs-4">Starter</h5>
          <h2 class="h2">Free</h2>
          <p class="card-title text-black-50 fs-4">1 Website</p>
          <p class="card-title text-black-50 fs-4">5 GB Hosting</p>
          <p class="text-black-50 fs-4">Limited Support</p>
          <button type="button" class="btn5 btn-primary border-0 btn-sm"><b>Get Started</b></button>
         </div>
     </div>
 </div>
 <div class="col-md-4 col-sm-12">
    <div class="card2">
         <div class="card-body">
         <h5 class="card-title text-white fs-4">Premium</h5>
         <h2 class="h2">$29/month</h2>
         <p class="card-text text-white fs-4">10 Website</p>
         <p class="card-text text-white fs-4">15 GB Hosting</p>
         <p class="card-text text-white fs-4">Premium Support</p>
         <button type="button" class="btn6 btn-primary border-0 btn-sm"><b>Get Started</b></button>
         </div>
     </div>
 </div>
 <div class="col-md-4 col-sm-12">
    <div class="card3">
         <div class="card-body">
         <h5 class="card-title1 text-black-50 fs-4">Enterprise</h5>
         <h2 class="h2">$49/month</h2>
         <p class="card-text1 text-black-50 fs-4">Unlimited Website</p>
         <p class="card-text1 text-black-50 fs-4">50 GB Hosting</p>
         <p class="card-text1 text-black-50 fs-4">Premium Support</p>
         <button type="button" class="btn7 btn-primary border-0 btn-sm"><b>Get Started</b></button>
         </div>
     </div>
 </div>
</div>
</div>
</div>
<!--finchoixcards-->


</main>
<?php include 'footer.php'; ?>