<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Trainings</h4>
            <p class="card-description">
            List<code>shows all available trainings</code>
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
                    Image
                </th>
                <th>
                    Price
                </th>
                <th>
                    Training date
                </th>
                <th>
                    Facilitator
                </th>
                <th>
                    
                </th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; foreach ($trainings as $training): $count++;?>
                <tr>
                    <td>
                        <?=$count?>
                    </td>
                    <td>
                        <?=$training->title?>
                    </td>
                    <td class="py-1">
                        <img style="width: 100px; height: 100px;" src="<?= BASE_URL?>images/training/<?=$training->image ?>" alt="image">
                    </td>
                    <td>
                        <?=number_format($training->cost, 2)?>
                    </td>
                    <td>
                        <?=$training->training_date?>
                    </td>
                    <td>
                        <?=$training->facilitator?>
                    </td>
                   
                    <td class="text-right">
                        <!--?= $this->Html->link(__('View'), ['action' => 'view', $banner->id],['class'=>'btn btn-outline-primary btn-sm']) ?-->
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $training->id],['class'=>'btn btn-outline-warning btn-md']) ?>
                        <?= $this->Html->link(__('Subscribers'), ['action' => 'subscribers', $training->id],['class'=>'btn btn-outline-primary btn-md']) ?>
                        <?php
                            if($training->status == 1){
                                echo $this->Form->postLink(__('Disable'), ['action' => 'changestatus', $training->id, 0], 
                                ['confirm' => __('Are you sure you want to disable # {0}?', $training->id),'class'=>'btn btn-outline-danger btn-md']);
                            }else{
                                echo $this->Form->postLink(__('Enable'), ['action' => 'changestatus', $training->id, 1], 
                                ['confirm' => __('Are you sure you want to disable # {0}?', $training->id),'class'=>'btn btn-outline-success btn-md']);
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

