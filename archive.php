<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-md-12">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
		
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
		
		
            <div class="page-item row">
                <div class="col-md-8">
                    <ul class="page-item-title">
                        <li><time class="timeago meta" datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>
                        <a class="meta float-right comments-meta" href="http://test.com"> <i class="iconfont icon-comment"></i></a></li>
                        <li><a class="title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></li>
                    </ul>
                </div>
                <div class="col-md-4 hide-on-phone">
                    <ul class="page-item-title float-right meta">
                        <li><a href="<?php $this->permalink() ?>#comments">
                         <?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?><i class="iconfont icon-comment"></i></a></li>
                        <li><a href="<?php $this->permalink() ?>">全文 <i class="iconfont icon-ellipsis"></i></a></li>
                        <li><a class="pib-indicator">预览 <i class="iconfont icon-expand"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 page-item-body">
                    <?php $this->content('- 阅读剩余部分 -'); ?>
                </div>
            </div>

			
			
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div><!-- end #main -->

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