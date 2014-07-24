

<body <?php body_class($class); ?>>

<header class="topbar col-lg-12">
    <div class="col-lg-4">
        <h3>
            <em>Nadil Bourkadi</em>, Designer and Developer
    </div>

    
<!--         <ul>
            <a href="/wordpress/about/">
                <li>About</li>
            </a>
            <a href="/wordpress/portfolio/">
                <li>Portfolio</li>
            </a>
            <a href="/wordpress/">
                <li>Blog</li>
            </a>

            
 
        </ul> -->
        <?php wp_head(); ?>
        
        <?php wp_nav_menu(array(
            'theme-location' =>  'top-menu-nav',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'col-lg-8',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )); ?>
        


</header>

