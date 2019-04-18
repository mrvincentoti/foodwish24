<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Banner</h4>
            <p class="card-description">
            change required values below and submit
            </p>
            <?= $this->Form->create($gallerybanner, ['class'=>'forms-sample', 'type'=>'file']) ?>
                <div class="form-group">
                    <label for="exampleInputPassword1">Preview Image</label>
                    <div class="row mt-3">
                    <div class="col-12 pr-1">
                            <img style="height: 250px;" src="<?=BASE_URL?>images/bg/<?= $gallerybanner->image ?>" class="mb-2 mw-100 w-100 rounded" alt="image">
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
