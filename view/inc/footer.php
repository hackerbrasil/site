<script src="/js/jquery.appear.js"></script>
<script src="/js/jquery.scrolling.js"></script>
<script src="/js/script.js?v8"></script>
<?php
if(!isDev()){
    print '<script type="text/javascript">';
    ?>
    <!-- Matomo -->
    var _paq = _paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://piwik.mushape.com/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
    })();
    <!-- End Matomo Code -->
    <?php
    print '</script>';
}
?>