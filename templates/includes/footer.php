<footer class="footer mt-5 p-3 bg-light c-dark">
    <div class="container">
        <p class="float-right mb-0"><a href="#">Arriba</a></p>
        <p class="mb-0">© 2017 - <?php echo date('Y'); ?> <?php echo SITE_NAME ?> · <a href="#">Aviso de Privacidad</a> · <a href="#">Contacto</a></p>
    </div>
</footer>

<float_social 
twitter="https://twitter.com/" 
facebook="https://facebook.com/" 
instagram="https://instagram.com/" 
mensaje="Hola estoy interesado en sus servicios" 
telefono="000000000">
</float_social>

</div><!--/End App--> 
<script src="<?php echo JS; ?>bundle.js<?=get_version(); ?>" async></script>
</body>
</html>
<?php ob_end_flush(); ?>