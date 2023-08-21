
<?php
   $branding = get_option("themeoption_branding");
   $configuration_theme = get_option("themeoption_general_setting");  
?>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $configuration_theme["code-google-analytics"]; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $configuration_theme["code-google-analytics"]; ?>');
</script>


<?php wp_footer(); ?>
</body>
</html>
