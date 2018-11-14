<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-sm-12">

        <div class="page-content">
            <h2 class="post-title">搜索看看</h2>
            <p><?php _e('关键字: '); ?></p>
			
            <form method="post">
			<div class="form-group">
                <p><input type="text" name="s" class="text" autofocus /></p>
                <p><button type="submit" class="btn btn-default"><?php _e('搜索'); ?></button></p>
			</div>	
            </form>
			
        </div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
