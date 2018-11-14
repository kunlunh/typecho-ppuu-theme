<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

					
                </div>
            </div>
        </div>
        <footer class="footer text-center meta">
            Powered by <a class="link" href="http://typecho.org/">Typecho</a> . 
				<a class="link" href="http://www.miibeian.gov.cn">粤ICP备13053581号-1</a>.
				<a class="link" href="http://beian.gov.cn/portal/recordQuery">粤公网安备 44070302000615号</a>.
        </footer>
    </div>
</main>

<script src="//cdn.staticfile.org/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>    
<script src="//cdn.staticfile.org/popper.js/1.14.4/umd/popper.min.js"></script>
<script src="<?php $this->options->themeUrl('jquery.timeago-cn.js'); ?>"></script>
        <script>
          $(document).ready(function() {
    var timer;

    $(window).bind('scroll', (function() {
        clearTimeout(timer);
        timer = setTimeout(getPercent, 5);
        isTop();
    }));

    $(".goto-top-link").click(function(){
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 'slow');
    });
});

function scrollPossition() {
    return ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
}

function getPercent() {
    $(".statusbar").css("width", String(scrollPossition()) + "%");

    if (scrollPossition() > 97) {
        $(".statusbar").css("background-color", "#1ca265");
    } else {
        $(".statusbar").css("background-color", "#eb5e29");
    }
    return;
}

function isTop() {
  if(scrollPossition() > 30)
    $(".goto-top").fadeIn("slow");
  else
    $(".goto-top").fadeOut("slow");
}
          $(document).ready(function() {
    $('.menu-btn').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });
    $('.close-btn').click(function() {
        $('.row-offcanvas').toggleClass('active');
    });
});
          jQuery(document).ready(function() {
    jQuery("time.timeago").timeago();
});

        </script>

<?php $this->footer(); ?>
</body>
</html>
