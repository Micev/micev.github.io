
        </div><!-- This is the closing <div> tag -->
        <footer>
            <div id="footer">&copy 2014 BY <span class="capital_letter">M</span>LADENOVI <span class="capital_letter">K</span>ONSULT <span class="capital_letter">L</span>TD. <span class="capital_letter">A</span>LL RIGHTS RESERVED</div>
        </footer>
        <script>
            $(function onDocumentReady() {

                $("header nav > ul > li > a").on("click", function onNavItemClick(e) {

                    if (!$(this).parent().hasClass("selected")) {
                        $("header nav ul li.selected").removeClass("selected");
                        $(this).parent().addClass("selected");
                    }
                });
            });
        </script>
    </body>
</html>