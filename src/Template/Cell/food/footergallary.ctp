
<ul class="sm__gallery__list">
    <?php foreach ($galleries as $gallery){ ?>
                                        <li>
                                            <a href="#"><img src="<?=BASE_URL?>images/gallery/portfolio/<?=$gallery->image?>" alt="gallery images" height="86" width="80"></a>
                                        </li>
                                      
    <?php } ?>
                                         </ul>
