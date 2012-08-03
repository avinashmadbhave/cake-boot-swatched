<div class="nav-collapse">
    <ul class="nav">
        <?php
            echo $this->Html->tag('li',$this->Html->link(__('Home'),array('controller' => 'users','action' => 'index'),array('escape' => false)),array('escape'=> false , 'class' => 'active'));
            echo $this->Html->tag('li',$this->Html->link(__('About'),'#about',array('escape' => false)),array('escape'=> false));
            echo $this->Html->tag('li',$this->Html->link(__('Contact'),'#contact',array('escape' => false)),array('escape'=> false));
        ?>
    </ul>
</div>
