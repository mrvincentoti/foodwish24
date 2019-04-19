<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Blog[]|\Cake\Collection\CollectionInterface $blogs
 */
?>
<!--nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Blog'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blogs index large-9 medium-8 columns content">
    <h3><?= __('Blogs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('video') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogs as $blog): ?>
            <tr>
                <td><?= $this->Number->format($blog->id) ?></td>
                <td><?= h($blog->title) ?></td>
                <td><?= h($blog->image) ?></td>
                <td><?= h($blog->video) ?></td>
                <td><?= h($blog->created_date) ?></td>
                <td><?= h($blog->author) ?></td>
                <td><?= $blog->has('group') ? $this->Html->link($blog->group->name, ['controller' => 'Groups', 'action' => 'view', $blog->group->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blog->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blog->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blog->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div-->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--19">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="bradcaump__inner text-center brad__white">
                        <h2 class="bradcaump-title">blog</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="index.html">Home</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                            <span class="breadcrumb-item active">blog</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area --> 
<!-- Start Blog Sideabr -->
<section class="food__grid__sidebar section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <!-- Start Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="food__sidebar">
                    <div class="side__bl__inner">
                        <div class="side__bl__thumb">
                            <img src="<?=BASE_URL?>images/blog/sidebar/1.jpg" alt="sidebar images">
                        </div>
                        <div class="side__bl__details">
                            <p>On the other hand, dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                            <h4>Robart Rofiq Bali</h4>
                            <h6>UI UX Designer</h6>
                            <ul class="bl__social__service d-flex">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Start Search Area -->
                    <div class="food__search mt--60">
                        <h4 class="side__title">Search</h4>
                        <div class="serch__box">
                            <input type="text" placeholder="Search keyword">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <!-- End Search Area -->
                    <!-- Start Recent Post -->
                    <div class="food__recent__post mt--60">
                        <h4 class="side__title">Recent Posts</h4>
                        <div class="recent__post__wrap">
                            <!-- Start Single Post -->
                            <div class="single__recent__post d-flex">
                                <div class="recent__post__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sm-img/4.jpg" alt="post images">
                                    </a>
                                </div>
                                <div class="recent__post__details">
                                    <span>February  13,  2018</span>
                                    <h4><a href="blog-details.html">Diffrent title gose here. This is demo title.</a></h4>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Start Single Post -->
                            <div class="single__recent__post d-flex">
                                <div class="recent__post__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sm-img/5.jpg" alt="post images">
                                    </a>
                                </div>
                                <div class="recent__post__details">
                                    <span>February  13,  2018</span>
                                    <h4><a href="blog-details.html">Diffrent title gose here. This is demo title.</a></h4>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Start Single Post -->
                            <div class="single__recent__post d-flex">
                                <div class="recent__post__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sm-img/6.jpg" alt="post images">
                                    </a>
                                </div>
                                <div class="recent__post__details">
                                    <span>February  13,  2018</span>
                                    <h4><a href="blog-details.html">Diffrent title gose here. This is demo title.</a></h4>
                                </div>
                            </div>
                            <!-- End Single Post -->
                            <!-- Start Single Post -->
                            <div class="single__recent__post d-flex">
                                <div class="recent__post__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sm-img/7.jpg" alt="post images">
                                    </a>
                                </div>
                                <div class="recent__post__details">
                                    <span>February  13,  2018</span>
                                    <h4><a href="blog-details.html">Diffrent title gose here. This is demo title.</a></h4>
                                </div>
                            </div>
                            <!-- End Single Post -->
                        </div>
                    </div>
                    <!-- End Recent Post -->
                    <!-- Start Category Area -->
                    <div class="food__category__area mt--60">
                        <h4 class="side__title">Categories</h4>
                        <ul class="food__category">
                            <li><a href="#">Maxican Food <span>(20)</span></a></li>
                            <li><a href="#">Pizza <span>(30)</span></a></li>
                            <li><a href="#">Food & Beverage <span>(40)</span></a></li>
                            <li><a href="#">Maxican Food <span>(50)</span></a></li>
                            <li><a href="#">Asian Twist <span>(60)</span></a></li>
                            <li><a href="#">Taco Food <span>(20)</span></a></li>
                        </ul>
                    </div>
                    <!-- End Category Area -->
                    <!-- Start Recent Comment -->
                    <div class="food__recent__comment mt--60">
                        <h4 class="side__title">Recent Comment</h4>
                        <div class="food__comment">
                            <!-- Start Single Comment -->
                            <div class="single__comment">
                                <h2><i class="fa fa-comments-o"></i><a href="#">Creative Design for blog post. Its also simple.</a></h2>
                                <ul class="comment__meta">
                                    <li>13 Feb 2016</li>
                                    <li><a href="#">04.00am</a></li>
                                    <li><a href="#">Arif Vai</a></li>
                                </ul>
                            </div>
                            <!-- End Single Comment -->
                            <!-- Start Single Comment -->
                            <div class="single__comment">
                                <h2><i class="fa fa-comments-o"></i><a href="#">Creative Design for blog post. Its also simple.</a></h2>
                                <ul class="comment__meta">
                                    <li>13 Feb 2016</li>
                                    <li><a href="#">04.00am</a></li>
                                    <li><a href="#">Arif Vai</a></li>
                                </ul>
                            </div>
                            <!-- End Single Comment -->
                            <!-- Start Single Comment -->
                            <div class="single__comment">
                                <h2><i class="fa fa-comments-o"></i><a href="#">Creative Design for blog post.</a></h2>
                                <ul class="comment__meta">
                                    <li>13 Feb 2016</li>
                                    <li><a href="#">04.00am</a></li>
                                    <li><a href="#">Arif Vai</a></li>
                                </ul>
                            </div>
                            <!-- End Single Comment -->
                            <!-- Start Single Comment -->
                            <div class="single__comment">
                                <h2><i class="fa fa-comments-o"></i><a href="#">Creative Design for blog post. Its also simple.</a></h2>
                                <ul class="comment__meta">
                                    <li>13 Feb 2016</li>
                                    <li><a href="#">04.00am</a></li>
                                    <li><a href="#">Arif Vai</a></li>
                                </ul>
                            </div>
                            <!-- End Single Comment -->
                            <!-- Start Single Comment -->
                            <div class="single__comment">
                                <h2><i class="fa fa-comments-o"></i><a href="#">Creative Design for blog post.</a></h2>
                                <ul class="comment__meta">
                                    <li>13 Feb 2016</li>
                                    <li><a href="#">04.00am</a></li>
                                    <li><a href="#">Arif Vai</a></li>
                                </ul>
                            </div>
                            <!-- End Single Comment -->
                        </div>
                    </div>
                    <!-- End Recent Comment -->
                    <!-- Start Sidebar Contact -->
                    <div class="sidebar__contact mt--60">
                        <div class="sidebar__thumb">
                            <img src="<?=BASE_URL?>images/blog/sidebar/2.jpg" alt="sidebar images">
                        </div>
                        <div class="sidebar__details">
                            <h4>colorful</h4>
                            <h2>donut’s</h2>
                            <span>get it till the stock full</span>
                        </div>
                        <div class="sidebar__con__btn">
                            <a href="#">Contact Now<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Sidebar Contact -->
                    <!-- Start Sidebar Newsletter -->
                    <div class="sidebar__newsletter mt--60">
                        <h4 class="side__title">Newsletter</h4>
                        <div class="sidebar__inbox">
                            <input type="text" placeholder="Enter your E-mail">
                            <a href="#"><i class="fa fa-paper-plane"></i></a>
                        </div>
                    </div>
                    <!-- End Sidebar Newsletter -->
                    <!-- Start Sidebar Instagram -->
                    <div class="sidebar__instagram mt--60">
                        <h4 class="side__title">Instagram</h4>
                        <ul class="instagram__list d-flex flex-wrap">
                            <li><a href="#"><img src="<?=BASE_URL?>images/blog/instagram/1.jpg" alt="instagram images"></a></li>
                            <li><a href="#"><img src="<?=BASE_URL?>images/blog/instagram/2.jpg" alt="instagram images"></a></li>
                            <li><a href="#"><img src="<?=BASE_URL?>images/blog/instagram/3.jpg" alt="instagram images"></a></li>
                            <li><a href="#"><img src="<?=BASE_URL?>images/blog/instagram/4.jpg" alt="instagram images"></a></li>
                            <li><a href="#"><img src="<?=BASE_URL?>images/blog/instagram/5.jpg" alt="instagram images"></a></li>
                            <li><a href="#"><img src="<?=BASE_URL?>images/blog/instagram/6.jpg" alt="instagram images"></a></li>
                        </ul>
                    </div>
                    <!-- End Sidebar Instagram -->
                    <!-- Start twitter Feed -->
                    <div class="sidebar__twitter mt--60">
                        <h4 class="side__title">Recent Tweets</h4>
                        <div class="twitter__wrap">
                            <div class="recent__twitter">
                                <h6><a href="#"><i class="fa fa-twitter"></i>@momenbhuiyan</a></h6>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <ul class="twit__meta">
                                    <li>13 Feb 2016</li>
                                    <li>04.00am</li>
                                </ul>
                            </div>
                            <div class="recent__twitter">
                                <h6><a href="#"><i class="fa fa-twitter"></i>@momenbhuiyan</a></h6>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <ul class="twit__meta">
                                    <li>13 Feb 2016</li>
                                    <li>04.00am</li>
                                </ul>
                            </div>
                            <div class="recent__twitter">
                                <h6><a href="#"><i class="fa fa-twitter"></i>@momenbhuiyan</a></h6>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <ul class="twit__meta">
                                    <li>13 Feb 2016</li>
                                    <li>04.00am</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End twitter Feed -->
                    <!-- Start Sicial NEt -->
                    <div class="sidebar__social__net mt--60">
                        <h4 class="side__title">Social Network</h4>
                        <ul class="var__social__net">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Sicial NEt -->
                    <!-- Start Tag Area -->
                    <div class="food__tag mt--60">
                        <h4 class="side__title">Tags</h4>
                        <ul class="tag__list d-flex flex-wrap">
                            <li><a href="#">Pizza</a></li>
                            <li><a href="#">Chicken</a></li>
                            <li><a href="#">Adobe</a></li>
                            <li><a href="#">Beef Swarma</a></li>
                            <li><a href="#">Pasta</a></li>
                            <li><a href="#">Burger</a></li>
                        </ul>
                    </div>
                    <!-- End Tag Area -->
                </div>
            </div>
            <!-- End Sidebar -->
            <div class="col-lg-8 col-md-12 col-sm-12 md--mt--40 sm--mt--40">
                <div class="food__blog__grid__left__sidebar">
                    <div class="grid__big__product mb--90 foo">
                        <div class="grid__big__thumb">
                            <a href="blog-details.html">
                                <img src="<?=BASE_URL?>images/blog/sidebar/big-img/1.jpg" alt="blog images">
                            </a>
                        </div>
                        <div class="grid__big__inner">
                            <span>Peoject Categories.</span>
                            <h2><a href="blog-details.html">Standard blog post format for Design.</a></h2>
                            <ul class="bg__bl__meta d-flex">
                                <li>February 13.</li>
                                <li><a href="#">Momen Bhuiyan</a></li>
                                <li><a href="#">4 comments</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            <div class="bg__bl__btn">
                                <a class="food__btn btn--transparent" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Blog Grid -->
                    <div class="row mt__-40">
                        <!-- Start Single Grid -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single__blog__grid foo">
                                <div class="grid__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sidebar/mid-img/1.jpg" alt="blog images">
                                    </a>
                                </div>
                                <div class="grid__inner">
                                    <span>Peoject Categories.</span>
                                    <h2><a href="blog-details.html">Standard blog post.</a></h2>
                                    <ul class="bg__bl__meta d-flex">
                                        <li>February 13.</li>
                                        <li><a href="#">Momen Bhuiyan</a></li>
                                        <li><a href="#">4 comments</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Grid -->
                        <!-- Start Single Grid -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single__blog__grid foo">
                                <div class="grid__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sidebar/mid-img/2.jpg" alt="blog images">
                                    </a>
                                </div>
                                <div class="grid__inner">
                                    <span>Peoject Categories.</span>
                                    <h2><a href="blog-details.html">Post demo is here.</a></h2>
                                    <ul class="bg__bl__meta d-flex">
                                        <li>February 13.</li>
                                        <li><a href="#">Momen Bhuiyan</a></li>
                                        <li><a href="#">4 comments</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Grid -->
                        <!-- Start Single Grid -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single__blog__grid foo">
                                <div class="grid__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sidebar/mid-img/3.jpg" alt="blog images">
                                    </a>
                                </div>
                                <div class="grid__inner">
                                    <span>Peoject Categories.</span>
                                    <h2><a href="blog-details.html">Standard blog post.</a></h2>
                                    <ul class="bg__bl__meta d-flex">
                                        <li>February 13.</li>
                                        <li><a href="#">Momen Bhuiyan</a></li>
                                        <li><a href="#">4 comments</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Grid -->
                        <!-- Start Single Grid -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single__blog__grid foo">
                                <div class="grid__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sidebar/mid-img/4.jpg" alt="blog images">
                                    </a>
                                </div>
                                <div class="grid__inner">
                                    <span>Peoject Categories.</span>
                                    <h2><a href="blog-details.html">Post demo is here.</a></h2>
                                    <ul class="bg__bl__meta d-flex">
                                        <li>February 13.</li>
                                        <li><a href="#">Momen Bhuiyan</a></li>
                                        <li><a href="#">4 comments</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Grid -->
                        <!-- Start Single Grid -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single__blog__grid foo">
                                <div class="grid__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sidebar/mid-img/5.jpg" alt="blog images">
                                    </a>
                                </div>
                                <div class="grid__inner">
                                    <span>Peoject Categories.</span>
                                    <h2><a href="blog-details.html">Standard blog post.</a></h2>
                                    <ul class="bg__bl__meta d-flex">
                                        <li>February 13.</li>
                                        <li><a href="#">Momen Bhuiyan</a></li>
                                        <li><a href="#">4 comments</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Grid -->
                        <!-- Start Single Grid -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single__blog__grid foo">
                                <div class="grid__thumb">
                                    <a href="blog-details.html">
                                        <img src="<?=BASE_URL?>images/blog/sidebar/mid-img/6.jpg" alt="blog images">
                                    </a>
                                </div>
                                <div class="grid__inner">
                                    <span>Peoject Categories.</span>
                                    <h2><a href="blog-details.html">Post demo is here.</a></h2>
                                    <ul class="bg__bl__meta d-flex">
                                        <li>February 13.</li>
                                        <li><a href="#">Momen Bhuiyan</a></li>
                                        <li><a href="#">4 comments</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Grid -->
                        <div class="col-lg-12">
                            <div class="bg__bl__btn text-center grid__btn">
                                <a class="food__btn theme--hover black--button" href="blog-list.html">load More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="food__recent__video__post pt--70">
                                <h2 class="video__post__title">Recent Video Post</h2>
                                <!-- Start Video post -->
                                <div class="video__post__wrapper">
                                    <div class="video__post d-flex flex-wrap flex-md-nowrap flex-lg-nowrap">
                                        <div class="video__post__thumb">
                                            <a href="#">
                                                <img src="<?=BASE_URL?>images/blog/video-post/1.jpg" alt="post images">
                                            </a>
                                            <a class="video-play-button" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I"><img src="<?=BASE_URL?>images/icon/play.png" alt="viveo play icon"></a>
                                        </div>
                                        <div class="video__post__details">
                                            <span>Peoject Categories.</span>
                                            <h2><a href="blog-details.html">Standard blog post.</a></h2>
                                            <ul class="bg__bl__meta d-flex">
                                                <li>February 13.</li>
                                                <li><a href="#">Momen Bhuiyan</a></li>
                                                <li><a href="#">4 comments</a></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Video post -->
                                <!-- Start Vedio Post -->
                                <div class="small__vedio__post__wrap">
                                    <div class="single__small__video__post">
                                        <div class="sm__post__thumb">
                                            <a class="video-play-button--2" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I">
                                                <img src="<?=BASE_URL?>images/blog/video-post/sm-img/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="sm__post__details">
                                            <h6><a href="blog-details.html">Diffrent title gose here. This isdemo title.</a></h6>
                                            <span>February  13,  2018</span>
                                        </div>
                                    </div>
                                    <div class="single__small__video__post">
                                        <div class="sm__post__thumb">
                                            <a class="video-play-button--2" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I">
                                                <img src="<?=BASE_URL?>images/blog/video-post/sm-img/2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="sm__post__details">
                                            <h6><a href="blog-details.html">Diffrent title gose here. This isdemo title.</a></h6>
                                            <span>February  13,  2018</span>
                                        </div>
                                    </div>
                                    <div class="single__small__video__post">
                                        <div class="sm__post__thumb">
                                            <a class="video-play-button--2" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I">
                                                <img src="<?=BASE_URL?>images/blog/video-post/sm-img/4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="sm__post__details">
                                            <h6><a href="blog-details.html">Diffrent title gose here. This isdemo title.</a></h6>
                                            <span>February  13,  2018</span>
                                        </div>
                                    </div>
                                    <div class="single__small__video__post">
                                        <div class="sm__post__thumb">
                                            <a class="video-play-button--2" href="https://www.youtube.com/watch?v=wJ9Ll8uD07I">
                                                <img src="<?=BASE_URL?>images/blog/video-post/sm-img/3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="sm__post__details">
                                            <h6><a href="blog-details.html">Diffrent title gose here. This isdemo title.</a></h6>
                                            <span>February  13,  2018</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Vedio Post -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Sideabr -->

