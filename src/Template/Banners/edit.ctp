<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<!--nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $banner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner) ?>
    <fieldset>
        <legend><?= __('Edit Banner') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('videolink');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div-->
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Banner</h4>
                  <p class="card-description">
                    change required values below and submit
                  </p>
                  <?= $this->Form->create($banner, ['class'=>'forms-sample', 'type'=>'file']) ?>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Title</label>
                      <?php echo $this->Form->control('title', ['class'=>'form-control','label'=>false])?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Introduction</label>
                      <?php echo $this->Form->control('videolink', ['class'=>'form-control','label'=>false])?>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Preview Image</label>
                      <div class="row mt-3">
                        <div class="col-12 pr-1">
                             <img style="height: 250px;" src="<?=BASE_URL?>images/bg/<?= $banner->image ?>" class="mb-2 mw-100 w-100 rounded" alt="image">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Upload Image</label>
                       <?php echo $this->Form->control('image', ['class'=>'form-control','label'=>false, 'type'=>'file'])?>
                    </div>
                     <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-gradient-primary mr-2']) ?>
                  <?= $this->Form->end() ?>
                </div>
              </div>
            </div>
</div>
