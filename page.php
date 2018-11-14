<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-sm-12">

    <div class="page-title">
    		<?php $this->title() ?>
    		
    	</div>
        <div class="page-content">
            <?php $this->content(); ?>
            <!-- Share & Comments -->
            <?php $this->need('comments.php'); ?>            
        </div>
	
</div>

<?php $this->need('footer.php'); ?>
