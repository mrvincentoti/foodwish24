<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dishes</h4>
                  <p class="card-description">
                    List <code>show all available dishes</code>
                  </p>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          Title
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Category
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                          
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dishes as $dish): ?>
                      <tr>
                        <td>
                          <?=$dish->title?>
                        </td>
                        <td class="py-1">
                          <img src="<?=BASE_URL?>images/product/<?=$dish->image?>" alt="image">
                        </td>
                        <td>
                          <?=$dish->category->name?>
                        </td>
                        <td>
                          <?=number_format($dish->price, 2)?>
                        </td>
                        <td>
                          <div class="progress">
                          <div class="progress-bar <?php if($dish->status == 1){echo 'bg-success';}else{echo 'bg-danger';}?> " 
                          role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dish->id], ['class'=>'btn btn-outline-warning btn-md']) ?>
                            <?php
                              if($dish->status == 1){
                                  echo $this->Form->postLink(__('Disable'), ['action' => 'changestatus', $dish->id, 0], 
                                  ['confirm' => __('Are you sure you want to disable # {0}?', $dish->id),'class'=>'btn btn-outline-danger btn-md']);
                              }else{
                                  echo $this->Form->postLink(__('Enable'), ['action' => 'changestatus', $dish->id, 1], 
                                  ['confirm' => __('Are you sure you want to disable # {0}?', $dish->id),'class'=>'btn btn-outline-success btn-md']);
                              }
                          ?>
                        </td>
                      </tr>
                     <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
</div>