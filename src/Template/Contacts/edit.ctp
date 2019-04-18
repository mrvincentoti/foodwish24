<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Contact</h4>
            <p class="card-description">
            Edit contact
            </p>
             <?= $this->Form->create($contact, ['class'=>'forms-sample']) ?>
            <div class="form-group">
                <label for="exampleInputName1">Address</label>
                <?php 
                     echo $this->Form->control('address', ['class'=>'form-control ckeditor', 'row'=>10,'cols'=>80, 'label'=>false, 'placeholder'=>'Training description']); 
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Phone 1</label>
                 <?php 
                    echo $this->Form->control('phone1', ['class'=>'form-control', 'label'=>false]); 
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Phone 2</label>
                 <?php 
                    echo $this->Form->control('phone2', ['class'=>'form-control', 'label'=>false]); 
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">Email</label>
                <?php 
                    echo $this->Form->control('email', ['class'=>'form-control', 'label'=>false]); 
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Twitter</label>
                 <?php 
                    echo $this->Form->control('tw', ['class'=>'form-control', 'label'=>false]); 
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Facebook</label>
                 <?php 
                    echo $this->Form->control('fb', ['class'=>'form-control', 'label'=>false]); 
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Google</label>
                 <?php 
                    echo $this->Form->control('gg', ['class'=>'form-control', 'label'=>false]); 
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Instagram</label>
                 <?php 
                    echo $this->Form->control('inst', ['class'=>'form-control', 'label'=>false]); 
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">RS Feed</label>
                 <?php 
                    echo $this->Form->control('rs', ['class'=>'form-control', 'label'=>false]); 
                ?>
            </div>

            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-gradient-primary mr-2']) ?>
            <?= $this->Form->end() ?>
        </div>
        </div>
    </div>
</div>
