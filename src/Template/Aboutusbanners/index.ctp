<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">About Us Banner</h4>
            <p class="card-description">
            Edit<code>banner to change image that appears on the home page</code>
            </p>
            <table class="table table-striped">
            <thead>
                <tr>
                <th>
                    #
                </th>
                <th>
                    Image
                </th>
                <th>
                    Status
                </th>
                <th>
                    
                </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aboutusbanners as $aboutusbanner): ?>
                <tr>
                    <td>
                        <?=$aboutusbanner['id']?>
                    </td>

                    <td class="py-1">
                        <img style="width: 100px; height: 100px;" src="<?= BASE_URL?>images/bg/<?=$aboutusbanner->image ?>" alt="image">
                    </td>
                    
                    <td>
                        <div class="progress">
                        <div class="progress-bar <?php if($aboutusbanner->status == 1){echo 'bg-success';}else{echo 'bg-danger';}?> " 
                        role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td class="text-right">
                        <!--?= $this->Html->link(__('View'), ['action' => 'view', $banner->id],['class'=>'btn btn-outline-primary btn-sm']) ?-->
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aboutusbanner->id],['class'=>'btn btn-outline-warning btn-md']) ?>

                        <?php
                            if($aboutusbanner->status == 1){
                                echo $this->Form->postLink(__('Disable'), ['action' => 'changestatus', $aboutusbanner->id, 0], 
                                ['confirm' => __('Are you sure you want to disable # {0}?', $aboutusbanner->id),'class'=>'btn btn-outline-danger btn-md']);
                            }else{
                                echo $this->Form->postLink(__('Enable'), ['action' => 'changestatus', $aboutusbanner->id, 1], 
                                ['confirm' => __('Are you sure you want to disable # {0}?', $aboutusbanner->id),'class'=>'btn btn-outline-success btn-md']);
                            }
                        ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            </div>
        </div>
        </div>
    </div>
</div>
