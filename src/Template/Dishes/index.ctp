<!-- Start Slider Area -->
        <div class="slider__area slider--one">
            <div class="slider__activation--1">
                <!-- Start Single Slide -->
                <div class="slide fullscreen bg-image--1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="slider__content">
                                    <div class="slider__inner">
                                        <h2><?=$banner->title  ?></h2>
                                        <h1><?=$banner->videolink ?></h1>
                                        <!--div class="slider__input">
                                            <input type="text" placeholder="Type Place, City.Division">
                                            <input class="res__search" type="text" placeholder="Restaurant">
                                            <div class="src__btn">
                                                <a href="#">Search</a>
                                            </div>
                                        </div-->
                                        <div class="slider__btn slider__input">
                                            <a class="food__btn" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Service Area -->
        <section class="fd__service__area bg-image--2 section-padding--xlg">
            <div class="container">
                <div class="service__wrapper bg--white">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="section__title service__align--left">
                                <p>The process of our training</p>
                                <h2 class="title__line">How it work</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="images/icon/color-icon/1.png" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Choose course</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>On our <?= $this->Html->link(__(' Training Page '), ['controller'=>'Trainings','action' => 'index']) ?>kindly select your desired course, click and
                                        go through the details to really understand what the course is all about before proceeding 
                                        with the registration.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="images/icon/color-icon/2.png" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Supply your personal data</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>After reading through the course detail, click on the Register button to fill a form, submit and make payment.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="images/icon/color-icon/3.png" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Get Trained</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Once your payment is confirmed, we will contact you and schedule your training commencement</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->
       
        <!-- Start Special Menu -->
        <section class="fd__special__menu__area bg-image--3 section-pt--lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>the process of our service </p>
                            <h2 class="title__line">Restaurant with Special Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="special__food__menu mt--80">
                <div class="food__menu__prl bg-image--4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="food__nav nav nav-tabs" role="tablist">
                                    <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
                                    <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Breakfast</a>
                                    <a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Lunch</a>
                                    <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab">Dinner</a>
                                    <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee" role="tab">Coffee</a>
                                    <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab">Snacks</a>
                                </div>
                                <div class="fd__tab__content tab-content" id="nav-tabContent">
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade show active" id="nav-all" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <?php $count = 0; foreach ($dishes as $dish): $count++; if($count<=4){ ?>
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($count==4){echo '</div>
                                            <div class="single__tab__content">';} }  elseif($count>4 & $count<=8){?>
                                                
                                                <!-- End Single Food -->
                                                 <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } endforeach;?>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-breakfast" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                 <?php $cat1_count = 0; foreach ($dishes as $dish){ 
                                                     if($dish->category_id ==1 & $cat1_count<=4){ $cat1_count++; ?>
                                                               <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php if($cat1_count==4){echo '</div>
                                            <div class="single__tab__content">';} }  elseif($dish->category_id ==1 & $cat1_count>4 & $cat1_count<=8){?>
                                                
                                                <!-- End Single Food -->
                                                 <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php } }?>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-lunch" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                             <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                 <?php $cat2_count = 0; foreach ($dishes as $dish){ 
                                                     if($dish->category_id ==2 & $cat1_count<=4){ $cat2_count++; ?>
                                                               <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php if($cat2_count==4){echo '</div>
                                            <div class="single__tab__content">';} }  elseif($dish->category_id ==2 & $cat2_count>4 & $cat2_count<=8){?>
                                                
                                                <!-- End Single Food -->
                                                 <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php } }?>
                                            
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-dinner" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                  <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                 <?php $cat3_count = 0; foreach ($dishes as $dish){ 
                                                     if($dish->category_id ==3 & $cat3_count<=4){ $cat3_count++; ?>
                                                               <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php if($cat3_count==4){echo '</div>
                                            <div class="single__tab__content">';} }  elseif($dish->category_id ==3 & $cat3_count>4 & $cat3_count<=8){?>
                                                
                                                <!-- End Single Food -->
                                                 <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php } }?>
                                            
                                            </div>
                                            
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-coffee" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                           <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                 <?php $cat4_count = 0; foreach ($dishes as $dish){ 
                                                     if($dish->category_id ==4 & $cat4_count<=4){ $cat4_count++; ?>
                                                               <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php if($cat4_count==4){echo '</div>
                                            <div class="single__tab__content">';} }  elseif($dish->category_id ==4 & $cat4_count>4 & $cat4_count<=8){?>
                                                
                                                <!-- End Single Food -->
                                                 <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php } }?>
                                            
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-snacks" role="tabpanel">
                                         <div class="tab__content__wrap">
                                       <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                 <?php $cat5_count = 0; foreach ($dishes as $dish){ 
                                                     if($dish->category_id ==5 & $cat5_count<=4){ $cat5_count++; ?>
                                                               <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php if($cat5_count==4){echo '</div>
                                            <div class="single__tab__content">';} }  elseif($dish->category_id ==5 & $cat5_count>4 & $cat5_count<=8){?>
                                                
                                                <!-- End Single Food -->
                                                 <div class="food__menu">
                                                    <div class="food__menu__thumb">
                  
                                                        <a href="<?=BASE_URL.'dishes/menudetails/'.$dish->id?>">
                                                          <img src="images/product/<?=$dish->image?>" alt="product images" height="105" width="109">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                          <h4>  <?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'menudetails', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
?>
                                                            </h4>
                                                            <span class="menu__prize">N<?= number_format($dish->price)?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?=$dish->category->name?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <?php } }?>
                                            
                                            </div>
                                    </div>
                                    <!-- End Single tab -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>      
        <!-- End Special Menu -->

        <!-- Start Testimonail Area -->
        <section class="fd__testimonial__area section-padding--lg bg-image--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                        <div class="testimonial__activation--1 text-center bg--white owl-carousel owl-theme clearfix">
                            <!-- Start Single Testimonial -->
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/testimonial/clint/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Chef Ema</h4>
                                    <h6>Food Expert</h6>
                                    <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                            <!-- Start Single Testimonial -->
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/testimonial/clint/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Chef Ema</h4>
                                    <h6>Food Expert</h6>
                                    <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonail Area -->
        <!-- Start Blog Area -->
        <section class="fb__blog__ara section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>the process of our service </p>
                            <h2 class="title__line">Latest from Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--40">
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-lg-4 col-sm-12 foo">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/md-blog/1.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <h2><a href="blog-details.html">Maxican Food Fev</a></h2>
                                <span>1st Feb, 2o17</span>
                                <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                                <div class="blog__btn">
                                    <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-lg-4 col-sm-12 foo">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/md-blog/2.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <h2><a href="blog-details.html">Italian Pizza Fev</a></h2>
                                <span>1st jan, 2o17</span>
                                <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                                <div class="blog__btn">
                                    <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-lg-4 col-sm-12 foo">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/md-blog/3.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <h2><a href="blog-details.html">Asian Food Fev</a></h2>
                                <span>1st Dec, 2o17</span>
                                <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                                <div class="blog__btn">
                                    <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Blog -->
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

