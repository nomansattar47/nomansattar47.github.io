<?php 

/**
 * 
 * Footer script
 * 
 * */

$url  = $_SERVER['REQUEST_URI'];
$x    = pathinfo($url);
$page = trim($x['basename']);

?>

<?php if ( $page === 'edtutor.php' ): ?>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.17/dist/js/splide.min.js"></script>
<?php endif; ?>
<?php if ( $page === 'freelance.php' || 'edtutor.php' ): ?>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/readingposition.js"></script>
<?php endif; ?>
<script>

    <?php if ( $page === 'freelance.php' || 'edtutor.php' ): ?>

    var rpi;
    setTimeout(function waitUntilDomIsReadyLoadingCustomFontsMightOffsetThis() {
      rpi = new ReadingPositionIndicator({
        rpiArea: '[reading-position]', /* optional, query selector to an element */
      }).init();
    }, 500);

    <?php endif; ?>


    <?php if ( $page === 'edtutor.php' ): ?>
    
    document.addEventListener( 'DOMContentLoaded', function () {
      new Splide( '#thumbnail-carousel', {
            fixedWidth: 240,
            gap       : 30,
            type      : 'loop',
            rewind    : true,
            pagination: true,
            padding: { top: 10, bottom: 20 },
      } ).mount();
    } );

    <?php endif; ?> 
    
</script>

<!-- Lazy load -->
<!-- Yall: Remove the no-js class on the <html> element if JavaScript is on -->
<script>document.documentElement.classList.remove("no-js")</script>

<!-- Yall -->
<script src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/yall.min.js"></script>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", yall);
</script>


<!-- Copy to clipboard -->
<script src="<?php echo BASE_URL; ?>/assets/js/clipboard.min.js"></script>
<script>
    var clipboard = new ClipboardJS('.copy-email', {
        text: function() {
        return 'nomansattar47@gmail.com';
    }
    });
        clipboard.on('success', function(e) {
        console.log(e);
    }); 
        clipboard.on('error', function(e) {
        console.log(e);
    });
</script>

</body>
</html>	