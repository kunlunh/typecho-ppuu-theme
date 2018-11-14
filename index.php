<?php
/**
 * PPUU.ORG Theme
 * 
 * @package PPUU.ORG Theme 
 * @author hiplon@gmail.com
 * @version 0.1
 * @link https://ppuu.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

    <div class="page">

       <?php while($this->next()): ?>

            <div class="page-item col-md-12">
			
				<div class="row">
					<div class="col-md-8">
						<ul class="page-item-title">
							<li><time class="timeago meta" datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
							<li><a class="title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></li>
						</ul>
					</div>
					<div class="col-md-4 hide-on-phone float-right">
						<ul class="page-item-title float-right meta">
							<li><a href="<?php $this->permalink() ?>#comments">
							 <?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?><i class="iconfont icon-comment"></i></a></li>
							<li><a href="<?php $this->permalink() ?>">全文 <i class="iconfont icon-ellipsis"></i></a></li>
							<li><a class="pib-indicator">预览 <i class="iconfont icon-expand"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 page-item-body">
						<?php $this->content('- 阅读剩余部分 -'); ?>
					</div>
				</div>	
            </div>

      <?php endwhile; ?>

		<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

    </div>

<?php $this->need('footer.php'); ?>
<script>
$(document).ready(function() {
    $(".page").children().first().find(".page-item-body").css( "display", "block" );
    $(".page").children().first().find(".pib-indicator")
        .find("i").toggleClass("iconfont icon-shrink").toggleClass("iconfont icon-expand");

    $(".page-item .pib-indicator").click(function() {
        var preview = $(this);
        preview.find("i").toggleClass("iconfont icon-expand").toggleClass("iconfont icon-shrink");
        $(this).closest(".page-item").find(".page-item-body").toggle("fast", function() {});
    });
});
</script>
