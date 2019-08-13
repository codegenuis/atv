<?php require_once('page--header.tpl.php'); ?>
<section class="no-pad">
    <div class="page-heading" style="background-image: url(http://anpsthemes.com/constructo-new-demos/10/wp-content/uploads/2017/07/nav-bg1.jpg); background-color: #f8f8f8;">
        <div class="container">
            <h1>About us</h1>
            <ul class="breadcrumbs">
                <li><a href="http://anpsthemes.com/constructo-new-demos/10">Home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </div>
</section>
<section class="container">
    <div class="normal">


        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="737" height="852"
                                        src="<?php print $image_url.$node->field_small_banner['und'][0]['filename'] ?>"
                                        class="vc_single_image-img attachment-full" alt="" srcset="<?php print $image_url.$node->field_small_banner['und'][0]['filename'] ?> 737w, <?php print $image_url.$node->field_small_banner['und'][0]['filename'] ?> 260w, <?php print $image_url.$node->field_small_banner['und'][0]['filename'] ?> 311w, <?php print $image_url.$node->field_small_banner['und'][0]['filename'] ?> 360w"
                                        sizes="(max-width: 737px) 100vw, 737px"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-3">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <?php if(count($node->field_history_title)> 0) { ?>
                        <div class="wpb_single_image wpb_content_element vc_align_left">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="737" height="461"
                                        src="<?php print $image_url.$node->field_history_image['und'][0]['filename'] ?>"
                                        class="vc_single_image-img attachment-full" alt="" srcset="<?php print $image_url.$node->field_history_image['und'][0]['filename'] ?> 737w, <?php print $image_url.$node->field_history_image['und'][0]['filename'] ?> 300w, <?php print $image_url.$node->field_history_image['und'][0]['filename'] ?> 370w, <?php print $image_url.$node->field_history_image['und'][0]['filename'] ?> 360w"
                                        sizes="(max-width: 737px) 100vw, 737px"></div>
                            </figure>
                        </div>
                        <h5 class="heading-content  style-1"><span>
                                <?php print $node->field_history_title['und'][0]['value'] ?></span></h5>
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p>
                                    <?php print $node->field_history_text['und'][0]['value'] ?>
                                </p>

                            </div>
                        </div>
                        <?php } ?>

                        <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>

                        <?php if(count($node->field_vision_title)> 0) { ?>
                        <div class="wpb_single_image wpb_content_element vc_align_left">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="737" height="461"
                                        src="<?php print $image_url.$node->field_vision_image['und'][0]['filename'] ?>"
                                        class="vc_single_image-img attachment-full" alt="" srcset="<?php print $image_url.$node->field_vision_image['und'][0]['filename'] ?> 737w, <?php print $image_url.$node->field_vision_image['und'][0]['filename'] ?> 300w, <?php print $image_url.$node->field_vision_image['und'][0]['filename'] ?> 370w, <?php print $image_url.$node->field_vision_image['und'][0]['filename'] ?> 360w"
                                        sizes="(max-width: 737px) 100vw, 737px"></div>
                            </figure>
                        </div>
                        <h5 class="heading-content  style-1"><span>
                                <?php print $node->field_vision_title['und'][0]['value'] ?></span></h5>
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p>
                                    <?php print $node->field_vision_text['und'][0]['value'] ?>
                                </p>

                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-3">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <?php if(count($node->field_mission_title)> 0) { ?>
                        <div class="wpb_single_image wpb_content_element vc_align_left">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="737" height="461"
                                        src="<?php print $image_url.$node->field_mission_image['und'][0]['filename'] ?>"
                                        class="vc_single_image-img attachment-full" alt="" srcset="<?php print $image_url.$node->field_mission_image['und'][0]['filename'] ?> 737w, <?php print $image_url.$node->field_mission_image['und'][0]['filename'] ?> 300w, <?php print $image_url.$node->field_mission_image['und'][0]['filename'] ?> 370w, <?php print $image_url.$node->field_mission_image['und'][0]['filename'] ?> 360w"
                                        sizes="(max-width: 737px) 100vw, 737px"></div>
                            </figure>
                        </div>
                        <h5 class="heading-content  style-1"><span>
                                <?php print $node->field_mission_title['und'][0]['value'] ?></span></h5>
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p>
                                    <?php print $node->field_mission_text['und'][0]['value'] ?>
                                </p>

                            </div>
                        </div>
                        <?php } ?>

                        <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>

                        <?php if(count($node->field_goal_title)> 0) { ?>
                        <div class="wpb_single_image wpb_content_element vc_align_left">

                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="737" height="461"
                                        src="<?php print $image_url.$node->field_goal_image['und'][0]['filename'] ?>"
                                        class="vc_single_image-img attachment-full" alt="" srcset="<?php print $image_url.$node->field_goal_image['und'][0]['filename'] ?> 737w, <?php print $image_url.$node->field_goal_image['und'][0]['filename'] ?> 300w, <?php print $image_url.$node->field_goal_image['und'][0]['filename'] ?> 370w, <?php print $image_url.$node->field_goal_image['und'][0]['filename'] ?> 360w"
                                        sizes="(max-width: 737px) 100vw, 737px"></div>
                            </figure>
                        </div>
                        <h5 class="heading-content  style-1"><span>
                                <?php print $node->field_goal_title['und'][0]['value'] ?></span></h5>
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p>
                                    <?php print $node->field_goal_text['und'][0]['value'] ?>
                                </p>

                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>

    </div>

    <?php require_once ('page--footer.tpl.php'); ?>