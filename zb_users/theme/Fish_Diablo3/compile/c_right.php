<?php if ($type=='index') { ?>  <?php  /* 首页 */  ?>
	<?php  include $this->GetTemplate('sidebar');  ?>
<?php } ?>

<?php if ($type=='category') { ?>  <?php  /* 分类页 */  ?>
	<?php  include $this->GetTemplate('sidebar');  ?>
<?php } ?>

<?php if ($type=='article') { ?> <?php  /* 日志页 */  ?>
	<?php  include $this->GetTemplate('sidebar2');  ?>
<?php } ?>

<?php if ($type=='page') { ?>  <?php  /* 独立页面 */  ?>
	<?php  include $this->GetTemplate('sidebar3');  ?>
<?php } ?>

<?php if ($type=='author') { ?>  <?php  /* 用户页 */  ?>
	<?php  include $this->GetTemplate('sidebar');  ?>
<?php } ?>

<?php if ($type=='date') { ?>  <?php  /* 日期页 */  ?>
	<?php  include $this->GetTemplate('sidebar');  ?>
<?php } ?>

<?php if ($type=='tag') { ?>  <?php  /* 标签页 */  ?>
	<?php  include $this->GetTemplate('sidebar');  ?>
<?php } ?>

<?php if ($type=='') { ?>  <?php  /* 其他未知 */  ?>
	<?php  include $this->GetTemplate('sidebar');  ?>
<?php } ?>