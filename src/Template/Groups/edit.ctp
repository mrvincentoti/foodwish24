<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit</h4>
            <p class="card-description">
                Edit Category
            </p>
            <?= $this->Form->create($group, ['class'=>'forms-sample']) ?>
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <?php
                        echo $this->Form->control('name', ['class'=>'form-control', 'label'=>false]);
                    ?>
                </div>
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-gradient-primary mr-2']) ?>
            <?= $this->Form->end() ?>
        </div>
        </div>
    </div>
</div>
