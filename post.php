<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div class="col-md-12">
    <div class="page">
	
    	<div class="page-title">
    		<?php $this->title() ?>
    		<div class="meta">    			
                By <a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>,             
    			<time class="timeago" datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>,
    			<a href="<?php $this->permalink() ?>#comments">
                <?php $this->commentsNum('0 条评论', '1 条评论', '%d 条评论'); ?></a><i class="iconfont icon-comment"></i>
    		</div>
    	</div>
        <div class="page-content">
            <?php $this->content(); ?>
            <!-- Share & Comments -->
               <div class="share">
					<p>发布于:
						<i>
				<time ><?php $this->date('l  Y-m-d H:i:s'); ?></time>
						</i>
						<a class="float-right" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>" target="_blank">
							<i class="iconfont icon-share" style="color:red;"></i> 分享至微博
						</a>
					</p>
					<ul>
						<li>估计你也会喜欢:</li>
						<ul>        
							<?php $this->widget('Widget_Contents_Post_Recent','pageSize=3')
							->parse('<li><a href="{permalink}">{title}</a></li>'); ?>      
						</ul>
					</ul>
				</div>          
        </div>
		<?php $this->need('comments.php'); ?>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.staticfile.org/highlight.js/9.13.1/styles/gml.min.css">
<script src="https://cdn.staticfile.org/highlight.js/9.13.1/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<?php $this->need('footer.php'); ?>

