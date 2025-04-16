</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="assets/images/am1-blue.svg" alt="ametis Quality Assurance Services" width="160" height="36" />
            </div>
            
            <div class="footer-links">
                <ul>
                    <li><a href="/about.php">About</a></li>
                    <li><a href="/contact.php">Contact</a></li>
                    <li><a href="/privacy.php">Privacy Policy</a></li>
                    <li><a href="/terms.php">Terms of Service</a></li>
                </ul>
            </div>
            
            <div class="footer-addresses">
                <div class="address">
                    
                </div>
                
                <div class="address">
                    <p>
                        ametis <br />
                        456 Innovation Drive<br />
                        Suite 200<br />
                        San Francisco, CA 94016<br />
                        United States
                    </p>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> ametis. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/script.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 800,
        easing: 'ease-in-out-quart',
        offset: 120
    });
</script>
</body>
<!-- Script includes -->
<script src="assets/js/particles.min.js"></script>
<script type="module" src="assets/js/main.js"></script>
</html>