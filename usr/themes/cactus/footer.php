<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="mx-auto px3 my5">
 <footer id="footer" style="display:block;">
            <div class="footer-left">
               © <?php echo $this->options->title() ?> · ICP备15032766号 Theme By 
               <a href="http://www.xde.io" target="_blank">Xingr</a> 
               由<a href="https://aliyun.com">阿里云</a>提供稳定空间及带宽支持
            </div>
            <div class="footer-right">
            </div>
        </footer>
		</div>
        <link href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
        <?php if ($this->is('index')) : ?>
		<script src="<?php $this->options->themeUrl('lib/typed.js'); ?>"></script>
		<script async src="//busuanzi.ibruce.info/busuanzi/2.3/busuanzi.pure.mini.js"></script>
		<script>	
$(function () {
  $.get("<?php $this->options->siteUrl();?><?php echo date('Ymd').'.json';?>", function (data) {
    var data = data.data;
    // var str =  data.content+'\n'
    // + data.translation+"\n---- "
    // +data.author +'\n'
    var str =  data.content+'\n'
    + data.translation+"\n---- "
    
    var options = {
      strings: [ 
        str + "Who??^1000",
        str + "It's me^2000",
        str +'Haha, make a joke',
        str +data.author,
      ],
      typeSpeed: 20,
      startDelay:300,
      // loop: true,
    }
    var typed = new Typed(".description .typed", options);
  })
});</script>
		<?php endif; ?>
		<?php if ($this->is('post')) : ?>
        <script src="https://cdn.bootcss.com/lightbox2/2.10.0/js/lightbox.min.js"></script>
        <script src="https://cdn.bootcss.com/highlight.js/9.13.1/highlight.min.js"></script>
		<script>
		$('#post-content img').wrap(function () {
		return '<a href="' + this.src + '" title="' + this.alt + '" data-lightbox="roadtrip"></a>';
		});
		</script>
        <script>
            hljs.initHighlightingOnLoad();
        </script>
       <?php endif; ?>
        <script>
			if ('serviceWorker' in navigator) {
			  window.addEventListener('load', function() {
				navigator.serviceWorker.register('<?php $this->options->themeUrl('/sw.js'); ?>').then(function(registration) {
				  console.log('ServiceWorker registration successful with scope: ', registration.scope);
				}, function(err) {
				  console.log('ServiceWorker registration failed: ', err);
				});
			  });
			}
        </script>
		<?php $this->footer(); ?>
    </body>
</html>
