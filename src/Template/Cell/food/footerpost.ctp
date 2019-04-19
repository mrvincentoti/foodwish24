
<?php foreach ($dishes as $dish) { ?>
      <div class="single__sm__post">
          <div class="sin__post__thumb">

              <a href="blog-details,html">
                  <img src="<?= BASE_URL ?>images/product/<?= $dish->image ?>" alt="blog images" height="70" width="70">
              </a>
          </div>
          <div class="sin__post__details">
              <h6><?= $this->Html->link($dish->title, ['controller' => 'Dishes', 'action' => 'view', $dish->id, $this->GenerateUrl($dish->title)], ['title' => 'view details'])
      ?>
              </h6>
              <p><?= substr($dish->description,0,40).'...' ?></p>
          </div>
      </div>
  <?php } ?>
