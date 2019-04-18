<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Training</h4>
                <p class="card-description">
                change desired values and submit
                </p>
                <?= $this->Form->create($training, ['class'=>'forms-sample', 'type'=>'file']) ?>
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                     <?php 
                        echo $this->Form->control('title', ['class'=>'form-control', 'label'=>false, 'placeholder'=>'Training title']); 
                     ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Description</label>
                     <?php 
                        echo $this->Form->control('description', ['class'=>'form-control ckeditor', 'row'=>10,'cols'=>80, 'label'=>false, 'placeholder'=>'Training description']); 
                     ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Preview Image</label>
                    <div class="row mt-3">
                    <div class="col-8 pr-1">
                            <img style="height: 250px;" src="<?=BASE_URL?>images/training/<?= $training->image ?>" class="mb-2 mw-100 w-100 rounded" alt="image">
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Image Upload</label>
                    <?php 
                        echo $this->Form->control('image', ['type'=>'file','class'=>'form-control', 'label'=>false]); 
                     ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputCost">Price</label>
                    <?php 
                        echo $this->Form->control('cost', ['class'=>'form-control', 'label'=>false, 'placeholder'=>'Training cost']); 
                     ?>
                </div>

                <div class="form-group date" data-provide="datepicker">
                    <label for="exampleInputCity1">Training Date</label>
                    <?php 
                        echo $this->Form->control('training_date', ['type'=>'text','class'=>'form-control', 'label'=>false, 'placeholder'=>'Training date']); 
                     ?>
                     <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                     </div>
                </div>
                <div class="form-group">
                        <label for="exampleInputCost">Facilitator</label>
                        <?php 
                            echo $this->Form->control('facilitator', ['class'=>'form-control', 'label'=>false, 'placeholder'=>'Training facilitator']); 
                        ?>
                    </div>

                <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-gradient-primary mr-2']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

