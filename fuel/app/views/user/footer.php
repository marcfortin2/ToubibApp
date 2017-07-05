<footer class="footer">
    <div class="container">
        <p class="text-muted"><img src="../images/logo_toubib_tr.png" alt="Toubib 1" height="40px" width="41px" /> 
            <font style="font-family: verdana; top:20px; left:20px">Toubib est un produit de </font><font style="font-family:Verdana"><b>Logipro</b></font> <small>©</small><i id='demo_a'></i>-<i id='demo'></i>
        </p>
    </div>
</footer>

<!--Script du footer-->
<script type="text/javascript">
    var d = new Date();
    var e = new Date('1991/01/01');
    document.getElementById("demo_a").innerHTML = e.getFullYear();
    document.getElementById("demo").innerHTML =d.getFullYear();
    var $ = jQuery.noConflict();       //permet l'auto-defilement du carousel sur les 3 fureteurs (Chrome, Firefox et IE)
    $(document).ready(function() { 
      $('#toubibCarousel').carousel({ 
            vertical: false,
            scroll: 5,
            auto: 2,
            wrap: 'last',
      });
    }); 
</script>
