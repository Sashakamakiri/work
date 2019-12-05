
    <footer>
        <div class="container">
            <h2>Sign Up For Exclusives</h2>
            <span>Sign up for latest news, exclusive offers and ticket pre-sales.</span>
            <form>
                <input type="text" placeholder="NAME">
                <input type="email" placeholder="EMAIL">
                <button class="btn-sign-up" type="button">SIGN UP NOW</button>
            </form>
            <a class="ft-logo" href=""><span class="logo-bg">MI</span>&#32;&#32;MUSIC.</a>
 <?php  
			$args = array(
			'theme_location' => '',
			'menu' => '',
			'container' => 'ul',
			'container_class' => 'ft-menu',
			'container_id' => '',
			'menu_class' => 'ft-menu',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul id  = "%1$s" class = "%2$s">%3$s</ul>',
			'depth' => 0,
			'walker' => '',
			);
			
			wp_nav_menu( $args ); ?>           
		<!--   <ul class="ft-menu">
                <li>
                    <a href="#" class="menu-active">HOME</a>
                </li>
                <li>
                    <a href="#" class="menu-disabled">LIVE</a>
                </li>
                <li>
                    <a href="#" class="menu-disabled">ALBUMS</a>
                </li>
                <li>
                    <a class="menu-disabled" href="#">NEWS</a>
                </li>
                <li>
                    <a href="#" class="menu-disabled">ABOUT</a>
                </li>
            </ul>
			-->
            <ul class="ft-social-links">
                <li>
                    <a href="https://facebook.com/" target=_blank>
                        <svg viewBox="0 0 16 16">
                            <path
                                d="M15.3,0H0.7C0.3,0,0,0.3,0,0.7v14.7C0,15.7,0.3,16,0.7,16H8v-5H6V8h2V6c0-2.1,1.2-3,3-3 c0.9,0,1.8,0,2,0v3h-1c-0.6,0-1,0.4-1,1v1h2.6L13,11h-2v5h4.3c0.4,0,0.7-0.3,0.7-0.7V0.7C16,0.3,15.7,0,15.3,0z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/" target=_blank>
                        <svg viewBox="0 0 16 16">
                            <path
                                d="M16,3c-0.6,0.3-1.2,0.4-1.9,0.5c0.7-0.4,1.2-1,1.4-1.8c-0.6,0.4-1.3,0.6-2.1,0.8c-0.6-0.6-1.5-1-2.4-1 C9.3,1.5,7.8,3,7.8,4.8c0,0.3,0,0.5,0.1,0.7C5.2,5.4,2.7,4.1,1.1,2.1c-0.3,0.5-0.4,1-0.4,1.7c0,1.1,0.6,2.1,1.5,2.7 c-0.5,0-1-0.2-1.5-0.4c0,0,0,0,0,0c0,1.6,1.1,2.9,2.6,3.2C3,9.4,2.7,9.4,2.4,9.4c-0.2,0-0.4,0-0.6-0.1c0.4,1.3,1.6,2.3,3.1,2.3 c-1.1,0.9-2.5,1.4-4.1,1.4c-0.3,0-0.5,0-0.8,0c1.5,0.9,3.2,1.5,5,1.5c6,0,9.3-5,9.3-9.3c0-0.1,0-0.3,0-0.4C15,4.3,15.6,3.7,16,3z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/" target=_blank>
                        <svg viewBox="0 0 16 16">
                            <circle cx="12.145" cy="3.892" r="0.96"></circle>
                            <path
                                d="M8,12c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4S10.206,12,8,12z M8,6C6.897,6,6,6.897,6,8 s0.897,2,2,2s2-0.897,2-2S9.103,6,8,6z">
                            </path>
                            <path
                                d="M12,16H4c-2.056,0-4-1.944-4-4V4c0-2.056,1.944-4,4-4h8c2.056,0,4,1.944,4,4v8C16,14.056,14.056,16,12,16z M4,2C3.065,2,2,3.065,2,4v8c0,0.953,1.047,2,2,2h8c0.935,0,2-1.065,2-2V4c0-0.935-1.065-2-2-2H4z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://youtube.com/" target=_blank>
                        <svg viewBox="0 0 16 16">
                            <path
                                d="M15.8,4.8c-0.2-1.3-0.8-2.2-2.2-2.4C11.4,2,8,2,8,2S4.6,2,2.4,2.4C1,2.6,0.3,3.5,0.2,4.8C0,6.1,0,8,0,8 s0,1.9,0.2,3.2c0.2,1.3,0.8,2.2,2.2,2.4C4.6,14,8,14,8,14s3.4,0,5.6-0.4c1.4-0.3,2-1.1,2.2-2.4C16,9.9,16,8,16,8S16,6.1,15.8,4.8z M6,11V5l5,3L6,11z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

</body>

</html>