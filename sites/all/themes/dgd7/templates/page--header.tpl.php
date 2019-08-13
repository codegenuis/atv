<!DOCTYPE html>
<html lang="en-US">
<head>
    <body class="home page-template-default page page-id-5  footer-spacing-off woocommerce-no-js wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
    <div class="site-wrap">
        <div class="site-wrapper ">
            <header
                class="site-header site-header-sticky site-header-style-boxed site-header-layout-normal site-header-dropdown-3">
                <div class="container preheader-wrap">
                    <div class="site-logo"><a href="http://anpsthemes.com/constructo-new-demos/10/">
                            <img style="height: 33px; width: 158px; " class="logo-sticky" alt="Site logo"
                                src="<?php print $logo ?>">
                            <img style="width: auto; height: auto" alt="Site logo"
                                src="<?php print $logo ?>">
                        </a></div>
                    <div class="large-above-menu large-above-menu-style-4">
                        <div id="anpstext-10" class="widget widget_anpstext">
                            <span class="anpstext-arrow" style="color: #fab702"></span>
                            <span class="fa fa-home" style="color: #fab702"></span>
                            <span class="anpstext-desc" style="color: #848484">
                            <span class="important" style="color: #0a0a0a">6, Ajose Adeogun Close, </span>
                                <br />
                                Lagos state, Nigeria
                            </span>
                            </span>
                        </div>
                        <div id="anpstext-9" class="widget widget_anpstext">
                            <span class="anpstext-arrow" style="color: #fab702"></span>
                            <span class="fa fa-phone" style="color: #fab702"></span>
                            <span class="anpstext-desc" style="color: #848484">
                                <span class="important" style="color: #0a0a0a">Call us anytime</span>
                                <br />
                                0809923239
                            </span>
                        </div>
                        <div id="anpstext-8" class="widget widget_anpstext">
                            <span class="anpstext-arrow" style="color: #fab702"></span>
                            <span class="fa fa-envelope-o" style="color: #fab702"></span>
                            <span class="anpstext-desc" style="color: #848484">
                                <span class="important" style="color: #0a0a0a">Send us a mail</span>
                                <br />
                                info@anwatechnical.com
                            </span>
                        </div>
                    </div>
                </div>
                <div class="header-wrap">
                    <div class="container">
                        <div class="nav-bar-wrapper">
                            <div class="nav-bar">
                                <nav class="site-navigation">
                                    <ul id="menu-main-menu" class="">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-depth-0">
                                            <a href="#">Home</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
                                            <a href="about-us">About us</a></li>
                                            <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0">
                                            <a href="what-we-do">What we do</a>
                                            <ul class="sub-menu">
                                            <?php
                                            $right_links = menu_navigation_links('menu-what-we-do');
                                            print theme('links__menu_what_we_do', array('links' => $right_links, 'attributes' => array('class' => array('menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-1"')), 'heading' => t(null)));
                                            ?>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0">
                                            <a href="projects">Projects</a>
                                            <ul class="sub-menu">
                                            <?php
                                            $right_links = menu_navigation_links('menu-projects');
                                            print theme('links__menu_projects', array('links' => $right_links, 'attributes' => array('class' => array('menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-1"')), 'heading' => t(null)));
                                            ?>
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0">
                                            <a href="#">Order</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0">
                                            <a href="contact-us">Contact us</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="site-search-toggle">
                                    <button class="fa fa-search"><span class="sr-only">Search</span></button>
                                    <div class="site-search-minimal">
                                        <form role="search" method="get" class="site-search-minimal__form"
                                            action="http://anpsthemes.com/constructo-new-demos/10/">
                                            <input name="s" type="text" class="site-search-minimal__input"
                                                placeholder="type and press &#8216;enter&#8217;">
                                        </form>
                                    </div>
                                </div>
                                <button class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                            </div>
                            <a href="#" class="menu-button">
                                Get a quote
                            </a>
                        </div>
                    </div>
                </div>
            </header>
