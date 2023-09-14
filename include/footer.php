    <!-- Main part ends here -->
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-nav">
                <ul>
                    <li>
                        <h2>Navigation</h2>
                    </li>
                    <?php printMenu(); ?>
                </ul>
            </div>
            <div class="footer-follow">
                <ul>
                    <li>
                        <h2>Follow us</h2>
                    </li>
                    <?php printFollowUs(); ?>
                </ul>
            </div>
            <div class="footer-newsletter">
                <h2>Get our newsletter</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div>
                    <input type="email" name="semail" id="semail" maxlength="255" placeholder="joemama@example.com" class="email-input">
                </div>
                <div>
                    <input type="checkbox" id="weekly-news" name="weekly-news" />
                    <label for="weekly-news">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quisquam aperiam et itaque repellat fugiat!</label>
                </div>
                <div>
                    <button name="ssubmit" id="ssubmit" class="button-subscribe" onclick="subscriptionDone()">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; Copyright 2023</p>
        </div>
    </footer>
    <script type="text/javascript" src="scripts.js"></script>
    </body>
</html>