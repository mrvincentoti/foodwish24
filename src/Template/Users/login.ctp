<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <!--img src="../../images/logo.svg"-->
                 <?=  $this->Html->image('logo.svg') ?>
              </div>
              <?= $this->Flash->render() ?>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?= $this->Form->create(null,[ 'url' => ['controller' => 'users', 'action' => 'login'],'class'=>'pt-3']); ?> 
                <div class="form-group">
                   <?php
                      echo $this->Form->control('username', 
                      ['class'=>'form-control form-control-lg', 'label'=>false, 'type'=>'email','placeholder'=>'username','required',
                          'id'=>'exampleInputEmail1','aria-describedby'=>'emailHelp','placeholder'=>'Enter Your Username']
                      );
                  ?>
                </div>
                <div class="form-group">
                  <?php
                      echo $this->Form->control('password', 
                      ['class'=>'form-control form-control-lg', 'type'=>'password','label'=>false,'required',
                          'id'=>'exampleInputPassword1','placeholder'=>'Enter Your Password']
                      );
                  ?>
                </div>
                <div class="mt-3">
                  <?= $this->Form->button('SIGN IN',['class'=>'btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn']) ?> 
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <!--div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook
                  </button>
                </div-->
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?=BASE_URL?>register" class="text-primary">Create</a>
                </div>
              <?= $this->Form->end() ?>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->