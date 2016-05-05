

    <div id="header">
        <div class="header-wrapper">
                <div class="logo-wrapper">
                    <div class="sub-logo-wrapper">
                        <div id="logo"><?php print $site_name; ?></div>
                    </div>
                </div>
            <?php if ($main_menu): ?>
                <nav id="main-menu" role="navigation" tabindex="-1">
                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu-ul'))); ?>
                </nav>
            <?php endif; ?>
        </div>
    </div><!-- END HEADER -->


<div id="wrapper">
    <div id="main">
        <div class="home-row">
            <div class="home-row-wrap">
            </div>
        </div>
        <div class="projects">
            <div class="project-block">
                <div class="project-top">
                    <div class="project-image">
                        <a href="#"><img class="project-img" src="http://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/idcs1426.jpg?itok=Gc_-Q58L"></a>
                    </div>
                    <div class="project-description">
                        <span>This project is about how I defeated the aliens from the dark depths of hell. It was Peter Williams that was the flint of the conflagaration in my belly.</span>
                    </div>
                </div>
                <div class="project-read-more">
                    <div class="read-more"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="project-block">
                <div class="project-top">
                    <div class="project-image">
                        <a href="#"><img class="project-img" src="http://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/idcs1426.jpg?itok=Gc_-Q58L"></a>
                    </div>
                    <div class="project-description">
                        <span>This project is about how I defeated the aliens from the dark depths of hell. It was Peter Williams that was the flint of the conflagaration in my belly.</span>
                    </div>
                </div>
                <div class="project-read-more">
                    <div class="read-more"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="project-block">
                <div class="project-top">
                    <div class="project-image">
                        <a href="#"><img class="project-img" src="http://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/idcs1426.jpg?itok=Gc_-Q58L"></a>
                    </div>
                    <div class="project-description">
                        <span>This project is about how I defeated the aliens from the dark depths of hell. It was Peter Williams that was the flint of the conflagaration in my belly.</span>
                    </div>
                </div>
                <div class="project-read-more">
                    <div class="read-more"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="project-block">
                <div class="project-top">
                    <div class="project-image">
                        <a href="#"><img class="project-img" src="http://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/idcs1426.jpg?itok=Gc_-Q58L"></a>
                    </div>
                    <div class="project-description">
                        <span>This project is about how I defeated the aliens from the dark depths of hell. It was Peter Williams that was the flint of the conflagaration in my belly.</span>
                    </div>
                </div>
                <div class="project-read-more">
                    <div class="read-more"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="project-block">
                <div class="project-top">
                    <div class="project-image">
                        <a href="#"><img class="project-img" src="http://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/idcs1426.jpg?itok=Gc_-Q58L"></a>
                    </div>
                    <div class="project-description">
                        <span>This project is about how I defeated the aliens from the dark depths of hell. It was Peter Williams that was the flint of the conflagaration in my belly.</span>
                    </div>
                </div>
                <div class="project-read-more">
                    <div class="read-more"><a href="#">Read More</a></div>
                </div>
            </div>
            <div class="project-block">
                <div class="project-top">
                    <div class="project-image">
                        <a href="#"><img class="project-img" src="http://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/idcs1426.jpg?itok=Gc_-Q58L"></a>
                    </div>
                    <div class="project-description">
                        <span>This project is about how I defeated the aliens from the dark depths of hell. It was Peter Williams that was the flint of the conflagaration in my belly.</span>
                    </div>
                </div>
                <div class="project-read-more">
                    <div class="read-more"><a href="#">Read More</a></div>
                </div>
            </div>
            <div id="content">
            </div>
        </div>
        <br>
    </div>

    <?php if ($page['sidebar_second']): ?>
        <div id="sidebar">
            <div class="widget" id="widget-1">
            <?php print render($page['sidebar_second']); ?>
            </div>
        </div>
    <?php endif; ?><!-- END SIDEBAR_FIRST -->


    <?php if ($page['footer']): ?>
        <div id="footer">
            <?php print render($page['footer']); ?>
        </div>
    <?php endif; ?><!-- END FOOTER -->

</div>
