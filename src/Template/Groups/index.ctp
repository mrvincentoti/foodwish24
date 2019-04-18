<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Blog Ctageories</h4>
            <p class="card-description">
            List<code>display available categories</code>
            </p>
            <table class="table table-striped">
            <thead>
                <tr>
                <th>
                    #
                </th>
                <th>
                    Title
                </th>
                <th>
                    Status
                </th>
                <th>
                    
                </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groups as $group): ?>
                <tr>
                    <td class="py-1">
                         <?=$group['id']?>
                    </td>
                    <td>
                        <?=$group['name']?>
                    </td>
                   
                    <td>
                        <div class="progress">
                        <div class="progress-bar <?php if($group->status == 1){echo 'bg-success';}else{echo 'bg-danger';}?> " 
                        role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td class="text-right">
                        <!--?= $this->Html->link(__('View'), ['action' => 'view', $banner->id],['class'=>'btn btn-outline-primary btn-sm']) ?-->
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $group->id],['class'=>'btn btn-outline-warning btn-md']) ?>

                        <?php
                            if($group->status == 1){
                                echo $this->Form->postLink(__('Disable'), ['action' => 'changestatus', $group->id, 0], 
                                ['confirm' => __('Are you sure you want to disable # {0}?', $group->id),'class'=>'btn btn-outline-danger btn-md']);
                            }else{
                                echo $this->Form->postLink(__('Enable'), ['action' => 'changestatus', $group->id, 1], 
                                ['confirm' => __('Are you sure you want to disable # {0}?', $group->id),'class'=>'btn btn-outline-success btn-md']);
                            }
                            echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->id], 
                                ['confirm' => __('Are you sure you want to delete # {0}?', $group->id),'class'=>'btn btn-outline-primary btn-md']);
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

