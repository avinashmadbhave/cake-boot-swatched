<div class="page-header clearfix">
    <h1 class="pull-left"><?php echo __('Users');?></h1>
    <a href="/Users/add" class="pull-right">Add New User</a>
</div>
<div class="row">
    <div class="span12">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th><?php echo $this->Paginator->sort('id');?></th>
                <th><?php echo $this->Paginator->sort('username');?></th>
                <th><?php echo $this->Paginator->sort('password');?></th>
                <th><?php echo $this->Paginator->sort('phone');?></th>
                <th><?php echo $this->Paginator->sort('imei');?></th>
                <th><?php echo $this->Paginator->sort('name');?></th>
                <th><?php echo $this->Paginator->sort('user_type');?></th>
                <th><?php echo $this->Paginator->sort('is_verified');?></th>
                <th><?php echo $this->Paginator->sort('is_active');?></th>
                <th><?php echo $this->Paginator->sort('created');?></th>
                <th><?php echo $this->Paginator->sort('modified');?></th>
                <th class="actions"><?php echo __('Actions');?></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count = 1;
            foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php echo $count; ?>
                </td>
                <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['password']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['imei']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['name']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['user_type']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['is_verified']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['is_active']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                <td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__(''), array('action' => 'view', $user['User']['id']), array('class' => 'icon-eye-open')); ?>
                    <?php echo $this->Html->link(__(''), array('action' => 'edit', $user['User']['id']), array('class' => 'icon-pencil')); ?>
                    <?php echo $this->Form->postLink(__(''), array('action' => 'delete', $user['User']['id']), array('class' => 'icon-trash'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
                </td>
            </tr>
                <?php
                $count++;
            endforeach; ?>
            </tbody>
        </table>
        <p>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
            ));
            ?>        </p>

        <div class="paging">
            <?php
            echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
            echo $this->Paginator->numbers(array('separator' => ''));
            echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
            ?>
        </div>
    </div>
</div>