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
<section class="container no-pad">
                <div class="normal">


                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1418303236699">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <ul class="filter style-1"><i style="color: #000000;" class="fa fa-filter"></i>
                                        <li><button style="color: #000000;" data-filter="*" class="selected">All</button></li><span
                                            style="color: #000000;">/</span>
                                        <li><button style="color: #000000;" data-filter="Geotechnical" class="">Geotechnical</button></li><span
                                            style="color: #000000;">/</span>
                                        <li><button style="color: #000000;" data-filter="Material-Testing" class="">Material
                                                Testing</button></li><span style="color: #000000;">/</span>
                                        <li><button style="color: #000000;" data-filter="Non-Destructive-Test" class="">Non
                                                Destructive Test</button></li><span style="color: #000000;">/</span>
                                                <li><button style="color: #000000;" data-filter="Building-Integrity-Test" class="">Building Integrity Test</button></li>
                                    </ul>
                                    <ul class="portfolio isotope classic" style="position: relative; height: 949.548px;">
                                    <?php $i=0;while($i < count($node->field_project_images['und'])) { ?> 
                                        <li class="isotope-item  <?php print $node->field_project_titles['und'][$i]['value'] ?> col-xs-6 col-md-4" style="position: absolute; left: 0px; top: 0px;">
                                            <article class="inner"><a class="item-hover" href="#">
                                                    <div class="mask"></div>
                                                    <div class="item-info">
                                                        <div class="headline">
                                                            <h2><?php print $node->field_project_titles['und'][$i]['value'] ?></h2>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="item-img"><img width="360" height="267" src="<?php print $image_url.$node->field_project_images['und'][$i]['filename'] ?>"
                                                        class="attachment-post-thumb attachment-post-thumb size-post-thumb wp-post-image"
                                                        alt=""></div>
                                            </article>
                                        </li>
                                        <?php $i++; } ?>
                                    </ul>
                                    <div class="portfolio-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
<?php require_once ('page--footer.tpl.php'); ?>