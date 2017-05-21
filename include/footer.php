<footer class="footer">
    <div class="container" id="footer-inner">
        <div class="content has-text-centered">
            <p><a href="#"><i class="fa fa-angle-up"></i></a></p>

            <p>
                &copy; 2017 Aurora Community.<br>Site by <a href="https://dnomaid.co.uk">dnomaid</a> using the <a href="http://bulma.io">Bulma</a> CSS framework.<br>View the <a href="https://github.com/mrdnomaid/AuroraCommunity">Source Code on <i class="fa fa-github fa-fw"></i> GitHub</a>
            </p>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(".nav-toggle").click(function() {
        $(".nav-menu").toggleClass('is-active');
        $(".nav-toggle").toggleClass('is-active');
    });

    if (window.top !== window.self) {
        window.top.location.replace(window.self.location.href);
    }
</script>
</body>

</html>
