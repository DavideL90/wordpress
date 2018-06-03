   <footer>
      <?php wp_footer(); ?>

      <div id="footer-sidebar">
         <?php
            if(is_active_sidebar('footer_sidebar')){
               dynamic_sidebar('footer_sidebar');
            }
         ?>
      </div>

   </footer>
   </body>
</html>
