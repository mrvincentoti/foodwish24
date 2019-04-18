<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit About Us</h4>
            <?= $this->Form->create($about, ['class'=>'forms-sample']) ?>
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <?php
                        echo $this->Form->control('title', ['label'=>false,'class'=>'form-control']);
                    ?>
                </div>

                <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <?php
                        echo $this->Form->control('description',['label'=>false,'class'=>'ckeditor','row'=>10,'cols'=>80]);
                    ?>
                </div>
               
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-gradient-primary mr-2']) ?>
            <?= $this->Form->end() ?>
        </div>
        </div>
    </div>
</div>
