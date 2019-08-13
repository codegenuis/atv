<?php require_once ('page--header.tpl.php'); ?>
<section class="no-pad">
                <div class="page-heading" style="background-image: url(http://anpsthemes.com/constructo-new-demos/10/wp-content/uploads/2017/07/nav-bg1.jpg); background-color: #f8f8f8;">
                    <div class="container">
                        <h1>What we do</h1>
                        <ul class="breadcrumbs">
                            <li><a href="http://anpsthemes.com/constructo-new-demos/10">Home</a></li>
                            <li>What we do</li>
                        </ul>
                    </div>
                </div>
            </section>
<section class="container">
                <div class="row">

                    <aside class="sidebar col-md-3">
                        <ul>
                            <li id="nav_menu-3" class="widget-container widget_nav_menu">
                                <div class="menu-side-menu-container">
                                    <ul id="menu-side-menu" class="menu">
                                    <?php $i=0;while($i < count($node->field_service_titles['und'])) { ?> 
                                        <li id="menu-item-275" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-9 current_page_item menu-item-275">
                                            <a href="http://anpsthemes.com/constructo-new-demos/10/what-we-do/"><?php print $node->field_service_titles['und'][$i]['value'] ?></a></li>
                                                <?php $i++; } ?>
                                    </ul>
                                </div>
                            </li>
                            <li id="text-6" class="widget-container widget_text">
                                <h3 class="widget-title">Our office</h3>
                                <div class="textwidget"></div>
                            </li>
                            <li id="anpstext-5" class="widget-container widget_anpstext">
                                <span class="anpstext-arrow"></span>

                                <span class="fa fa-map-marker"></span>
                                <span class="anpstext-desc">6, Ajose Adeogun Close<br> Lagos state, Nigeria</span>
                            </li>
                            <li id="anpstext-6" class="widget-container widget_anpstext">
                                <span class="anpstext-arrow"></span>

                                <span class="fa fa-phone"></span>
                                <span class="anpstext-desc">Phone: +234 333 999 00</span>
                            </li>
                            <li id="anpstext-7" class="widget-container widget_anpstext">
                                <span class="anpstext-arrow"></span>

                                <span class="fa fa-envelope-o"></span>
                                <span class="anpstext-desc">Mail: info@atvwestafrica.com</span>
                            </li>
                        </ul>
                    </aside>

                    <div class="col-md-9">
                        <div class="vc_row wpb_row vc_row-fluid">
                        <?php $i=0;while($i < count($node->field_service_images['und'])) { ?> 
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">

                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="737"
                                                        height="461" src="<?php print $image_url.$node->field_service_images['und'][$i]['filename'] ?>" class="vc_single_image-img attachment-full"
                                                        alt="" srcset="<?php print $image_url.$node->field_service_images['und'][$i]['filename'] ?> 737w, <?php print $image_url.$node->field_service_images['und'][$i]['filename'] ?> 300w, <?php print $image_url.$node->field_service_images['und'][$i]['filename'] ?> 370w, <?php print $image_url.$node->field_service_images['und'][$i]['filename'] ?> 360w"
                                                        sizes="(max-width: 737px) 100vw, 737px"></div>
                                            </figure>
                                        </div>
                                        <h5 class="heading-content  style-1"><span><?php print $node->field_service_titles['und'][$i]['value'] ?></span></h5>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p><?php print $node->field_service_sub_text['und'][$i]['value'] ?></p>

                                            </div>
                                        </div>
                                        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                                        <a target="_self" href="<?php print $node->field_service_link['und'][$i]['value'] ?>" class="btn  btn-sm style-4" id="custom-id-0" style="padding:0">READ
                                            MORE</a>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; } ?>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1418289717381">
                        </div>
                    </div>

                </div>
            </section>
<?php require_once ('page--footer.tpl.php'); ?>