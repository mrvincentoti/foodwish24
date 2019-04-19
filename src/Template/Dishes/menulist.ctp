<?php 
    //debug(json_encode($dishes, JSON_PRETTY_PRINT)); 
?>
<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">menu List view</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                  <span class="breadcrumb-item active">menu List view</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area --> 
        <!-- Start Menu Grid Area -->
        <section class="food__menu__grid__area section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="food__nav nav nav-tabs" role="tablist">
                            <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
                            <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Breakfast</a>
                            <a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Lunch</a>
                            <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab">Dinner</a>
                            <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee" role="tab">Coffee</a>
                            <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab">Snacks</a>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <div class="fd__tab__content tab-content" id="nav-tabContent">
                            <!-- Start Single Content -->
                            <div class="food__list__tab__content tab-pane fade show active" id="nav-all" role="tabpanel">
                                <?php foreach($dishes as $dish):?>
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="<?=BASE_URL?>menu-details/">
                                            <img style="width: 469px; height: 253px;" src="<?=BASE_URL?>images/product/<?=$dish->image?>" alt="list food images">
                                        </a>
                                    </div>
                                    <div  class="food__list__inner d-flex align-items-center justify-content-between dishwidth">
                                        <div class="food__list__details">
                                            <h2><a href="<?=BASE_URL?>menu-details/"><?=$dish->title?></a></h2>
                                            <p><?=$dish->description?></p>
                                            <div class="list__btn">
                                                <a class="food__btn grey--btn theme--hover" href="<?=BASE_URL?>menu-details/">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span> &#8358;<?=number_format($dish->price)?></span>
                                            </div>
                                            <!--ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul-->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php endforeach;?>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div class="food__list__tab__content tab-pane fade" id="nav-breakfast" role="tabpanel">
                                <?php 
                                    foreach($dishes as $dish):
                                    if($dish->category_id == 1){
                                ?>
                                 <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="<?=BASE_URL?>menu-details/">
                                            <img style="width: 469px; height: 253px;" src="<?=BASE_URL?>images/product/<?=$dish->image?>" alt="list food images">
                                        </a>
                                    </div>
                                    <div  class="food__list__inner d-flex align-items-center justify-content-between dishwidth">
                                        <div class="food__list__details">
                                            <h2><a href="<?=BASE_URL?>menu-details/"><?=$dish->title?></a></h2>
                                            <p><?=$dish->description?></p>
                                            <div class="list__btn">
                                                <a class="food__btn grey--btn theme--hover" href="<?=BASE_URL?>menu-details/">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span> &#8358;<?=number_format($dish->price)?></span>
                                            </div>
                                            <!--ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul-->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php } endforeach;?>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div class="food__list__tab__content tab-pane fade" id="nav-lunch" role="tabpanel">
                                 <?php 
                                    foreach($dishes as $dish):
                                    if($dish->category_id == 2){
                                ?>
                                 <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="<?=BASE_URL?>menu-details/">
                                            <img style="width: 469px; height: 253px;" src="<?=BASE_URL?>images/product/<?=$dish->image?>" alt="list food images">
                                        </a>
                                    </div>
                                    <div  class="food__list__inner d-flex align-items-center justify-content-between dishwidth">
                                        <div class="food__list__details">
                                            <h2><a href="<?=BASE_URL?>menu-details/"><?=$dish->title?></a></h2>
                                            <p><?=$dish->description?></p>
                                            <div class="list__btn">
                                                <a class="food__btn grey--btn theme--hover" href="<?=BASE_URL?>menu-details/">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span> &#8358;<?=number_format($dish->price)?></span>
                                            </div>
                                            <!--ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul-->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php } endforeach;?>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div class="food__list__tab__content tab-pane fade" id="nav-dinner" role="tabpanel">
                                 <?php 
                                    foreach($dishes as $dish):
                                    if($dish->category_id == 3){
                                ?>
                                 <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="<?=BASE_URL?>menu-details/">
                                            <img style="width: 469px; height: 253px;" src="<?=BASE_URL?>images/product/<?=$dish->image?>" alt="list food images">
                                        </a>
                                    </div>
                                    <div  class="food__list__inner d-flex align-items-center justify-content-between dishwidth">
                                        <div class="food__list__details">
                                            <h2><a href="<?=BASE_URL?>menu-details/"><?=$dish->title?></a></h2>
                                            <p><?=$dish->description?></p>
                                            <div class="list__btn">
                                                <a class="food__btn grey--btn theme--hover" href="<?=BASE_URL?>menu-details/">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span> &#8358;<?=number_format($dish->price)?></span>
                                            </div>
                                            <!--ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul-->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php } endforeach;?>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div class="food__list__tab__content tab-pane fade" id="nav-coffee" role="tabpanel">
                                 <?php 
                                    foreach($dishes as $dish):
                                    if($dish->category_id == 5){
                                ?>
                                 <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="<?=BASE_URL?>menu-details/">
                                            <img style="width: 469px; height: 253px;" src="<?=BASE_URL?>images/product/<?=$dish->image?>" alt="list food images">
                                        </a>
                                    </div>
                                    <div  class="food__list__inner d-flex align-items-center justify-content-between dishwidth">
                                        <div class="food__list__details">
                                            <h2><a href="<?=BASE_URL?>menu-details/"><?=$dish->title?></a></h2>
                                            <p><?=$dish->description?></p>
                                            <div class="list__btn">
                                                <a class="food__btn grey--btn theme--hover" href="<?=BASE_URL?>menu-details/">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span> &#8358;<?=number_format($dish->price)?></span>
                                            </div>
                                            <!--ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul-->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php } endforeach;?>
                            </div>
                            <!-- End Single Content -->
                            <!-- Start Single Content -->
                            <div class="food__list__tab__content tab-pane fade" id="nav-snacks" role="tabpanel">
                                 <?php 
                                    foreach($dishes as $dish):
                                    if($dish->category_id == 4){
                                ?>
                                 <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="<?=BASE_URL?>menu-details/">
                                            <img style="width: 469px; height: 253px;" src="<?=BASE_URL?>images/product/<?=$dish->image?>" alt="list food images">
                                        </a>
                                    </div>
                                    <div  class="food__list__inner d-flex align-items-center justify-content-between dishwidth">
                                        <div class="food__list__details">
                                            <h2><a href="<?=BASE_URL?>menu-details/"><?=$dish->title?></a></h2>
                                            <p><?=$dish->description?></p>
                                            <div class="list__btn">
                                                <a class="food__btn grey--btn theme--hover" href="<?=BASE_URL?>menu-details/">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span> &#8358;<?=number_format($dish->price)?></span>
                                            </div>
                                            <!--ul class="rating">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                            </ul-->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php } endforeach;?>
                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--ul class="food__pagination d-flex justify-content-center align-items-center mt--130">
                            <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                        </ul-->
                   
                     <div class="paginator">
                        <ul class="pagination justify-content-center align-items-center mt--130">
                            <?= $this->Paginator->first('<< ' . __('First')) ?>
                            <?= $this->Paginator->prev('< ' . __('Previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('Next') . ' >') ?>
                            <?= $this->Paginator->last(__('Last') . ' >>') ?>
                        </ul>
                        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                    </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- End Menu Grid Area -->