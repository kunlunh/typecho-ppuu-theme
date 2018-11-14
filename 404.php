<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-sm-12">

        <div class="page-content">
            <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
            <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
			
            <form method="post">
			<div class="form-group">
                <p><input type="text" name="s" class="text" autofocus /></p>
                <p><button type="submit" class="btn btn-default"><?php _e('搜索'); ?></button></p>
			</div>	
            </form>
			
        </div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
