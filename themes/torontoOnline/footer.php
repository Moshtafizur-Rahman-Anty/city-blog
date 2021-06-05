    </div> <!-- .container -->
</div> <!-- #page -->

<footer class="site-footer" role="contentinfo">
<div class="container">
<nav id="footer-navigation" class="footer-navigation" role="navigation">
                <?php 
                
                    wp_nav_menu(array(
                        'theme_location' => 'Main Menu',
                        
                    ));
                            ?>
            </nav>
</div>
    <hr>

    <div class="copyright">
        <p>torantoOnline <?php echo date('Y'); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

