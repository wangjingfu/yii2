<?php 
use yii\helpers\Html;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">导航菜单</li>
        <li class="active treeview">
          <?php foreach ($this->params['menus'] as $item):?>
              <?php if (empty($item->parent_id)): ?>
              <a href="#">
                <i class="fa <?= Html::encode($item->icon); ?>"></i><span><?= Html::encode($item->name); ?></span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
              </a>
                <?php foreach ($this->params['menus'] as $subItem):?>
                    <?php if ($subItem->parent_id == $item->id): ?>
                  	<ul class="treeview-menu">
                    	<li class="sub-menu"><a href="#" data-url="<?= Html::encode($subItem->url); ?>"><i class="fa <?= Html::encode($subItem->icon); ?>"></i><?= Html::encode($subItem->name); ?></a></li>
                  	</ul>
                  	<?php endif;?>
              	<?php endforeach;?>
              <?php endif;?>
          <?php endforeach;?>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>
