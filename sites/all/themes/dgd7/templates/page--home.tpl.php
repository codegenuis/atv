<?php require_once ('page--header.tpl.php'); ?>
<section class="banner no-pad">
  <div class="owl-carousel owl-theme" id="home-banners">
    <?php $i=0;while($i < count($node->field_banner['und'])){?>
    <div class="item"><img class="d-block w-100" src="<?php print $image_url.$node->field_banner['und'][$i]['filename'] ?>" alt="">
      <div class="carousel-caption d-none d-md-block">
        <div class="caption">
          <h1>
            <?php print $node->field_banner_top_text['und'][$i]['value'] ?>
          </h1>
          <h4>
            <?php print $node->field_small_text['und'][$i]['value'] ?>
          </h4>
          <div class="cta">
            <button class="btn btn-primary primary-bg button">
              EXPLORE
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php $i++; } ?>
  </div>
</section>
<section class="services container">
  <div class="row">
    <?php $i=0;while($i < count($node->field_service_image['und'])){?>
    <div class="wpb_wrapper col-sm-4 no-pad">
      <a href="#" class="f-content f-content--style-2">
        <div class="f-content__image"><img width="380" height="250" src="<?php print $image_url.$node->field_service_image['und'][$i]['filename'] ?>" class="attachment-full size-full" alt="" srcset="<?php print $image_url.$node->field_service_image['und'][$i]['filename'] ?> 380w, <?php print $image_url.$node->field_service_image['und'][$i]['filename'] ?> 300w, <?php print $image_url.$node->field_service_image['und'][$i]['filename'] ?> 370w, <?php print $image_url.$node->field_service_image['und'][$i]['filename'] ?> 360w" sizes="(max-width: 380px) 100vw, 380px"></div>
        <div class="f-content__wrap">
          <div class="f-content__inner-wrap">
            <div class="f-content__icon" style="background-color: #ffcc43; ">
              <i class="fa fa-codepen"></i>
            </div>
            <div class="f-content__title">
              <?php print $node->field_service_title['und'][$i]['value'] ?>
            </div>
            <div class="f-content__divider" style="background-color: #ffcc43; "></div>
          </div>
          <div class="f-content__content">
            <?php print $node->field_service_summary['und'][$i]['value'] ?>
          </div>
        </div>
      </a>
    </div>
    <?php $i++; } ?>
  </div>
  <div class="wpb_wrapper text-center">
    <?php if(count($node->field_hero_title['und']) > 0 ){?>
    <h3 style="font-size: 30px;text-align: center" class="vc_custom_heading">
      <?php print $node->field_hero_title['und'][0]['value'] ?>
    </h3>
    <div class="vc_empty_space" style="height: 15px">
      <span class="vc_empty_space_inner"></span></div>

    <div class="wpb_text_column wpb_content_element  vc_custom_1500883822431">
      <div class="wpb_wrapper">
        <p style="text-align: center;">
          <?php print $node->field_hero_body['und'][0]['value'] ?>
        </p>
      </div>
    </div>
    <div class="vc_empty_space" style="height: 20px">
      <span class="vc_empty_space_inner"></span></div>
    <button target="_self" class="btn  btn-sm style-1" id="custom-id-0" style="">Read More</button>
  </div>
  <?php } ?>
</section>

<section class="works">
  <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1500293049887 vc_row-has-fill vc_row-no-padding">
    <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner ">
        <div class="wpb_wrapper">
          <div class='container'>
            <div class='row owly'>
              <div class='col-md-6 col-xs-6'>
                <h2 style='color:#ffffff;'>Featured work</h2>
              </div>
              <div class='col-xs-6 col-md-6 align-right'>
                <a class='owlprev' style='background:#3d3d3d;'>
                  <i class='fa fa-chevron-left' style='color:#c1c1c1;'></i>
                </a>
                <a class='owlnext' style='background:#3d3d3d;'>
                  <i class='fa fa-chevron-right' style='color:#c1c1c1;'></i>
                </a>
              </div>
            </div>
          </div>
          <ul class='owl-carousel recentportfolio clearfix carousel' data-col="5">
            <?php $i=0;while($i < count($node->field_project_image['und'])){?>
            <li class='item item-type-line'><a class='item-hover' href="http://anpsthemes.com/constructo-new-demos/10/portfolio/modern-building"/>
              <div class='item-info'>
                <div class='headline'>
                  <h2>
                    <?php print $node->field_project_title['und'][$i]['value'] ?>
                  </h2>
                </div>
              </div>
            </a>
            <div class='item-img'><img width="360" height="267" src="<?php print $image_url.$node->field_project_image['und'][$i]['filename'] ?>" class="attachment-post-thumb size-post-thumb wp-post-image" alt=""/></div>
          </li>
            <?php $i++; } ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
</section>
<section class="process container">
<div class="row">
  <?php $i=0; while($i < count($node->field_heading['und'])) { ?>
  <div class="text-center wpb_column vc_column_container vc_col-sm-4">
    <div class="vc_column-inner ">
      <div class="wpb_wrapper">
        <h6 style="font-size: 30px;color: #fab702;text-align: left" class="vc_custom_heading">
        0<?php echo $i + 1; ?>
      </h6>
        <h3 style="font-size: 18px;text-align: left" class="vc_custom_heading"><?php print $node->field_heading['und'][$i]['value'] ?></h3>
        <div class="vc_empty_space" style="height: 10px">
          <span class="vc_empty_space_inner"></span>
        </div>

        <div class="wpb_text_column wpb_content_element ">
          <div class="wpb_wrapper">
            <p style="text-align: left;"><?php print $node->field_body['und'][$i]['value'] ?></p>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $i++; } ?>
  <hr class="col-md-12"/>
  <div class="vc_row wpb_row vc_row-fluid vc_custom_1500372551764 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
    <div class="wpb_column vc_column_container vc_col-sm-6">
      <div class="vc_column-inner ">
        <div class="wpb_wrapper">
          <h3 style="font-size: 20px;text-align: left" class="vc_custom_heading">OVER 25 YEARS OF EXPERIENCE</h3>
          <div class="vc_empty_space" style="height: 10px">
            <span class="vc_empty_space_inner"></span>
          </div>

          <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
              <p><?php print $node->field_experience_body['und'][0]['value'] ?></p>

            </div>
          </div>
          <div class="vc_empty_space" style="height: 20px">
            <span class="vc_empty_space_inner"></span>
          </div>
          <div class="vc_row wpb_row vc_inner vc_row-fluid">
          </div>
          <div class="vc_empty_space" style="height: 20px">
            <span class="vc_empty_space_inner"></span>
          </div>
          <button target="_self" class="btn  btn-sm style-1" id="custom-id-1" style="">Read More</button>
        </div>
      </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-6">
      <div class="vc_column-inner ">
        <div class="wpb_wrapper">
          <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1500372538499">

            <figure class="wpb_wrapper vc_figure">
              <div class="vc_single_image-wrapper vc_box_border_grey"><img width="800" height="600" src="<?php print $image_url.$node->field_experience_image['und'][0]['filename'] ?>" class="vc_single_image-img attachment-large" alt="" srcset="<?php print $image_url.$node->field_experience_image['und'][0]['filename'] ?> 800w, <?php print $image_url.$node->field_experience_image['und'][0]['filename'] ?> 300w, <?php print $image_url.$node->field_experience_image['und'][0]['filename'] ?> 768w, <?php print $image_url.$node->field_experience_image['und'][0]['filename'] ?> 370w, <?php print $image_url.$node->field_experience_image['und'][0]['filename'] ?> 360w" sizes="(max-width: 800px) 100vw, 800px"></div>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="info text-center">
<div class="caption">
  <h2>MAKE IT HAPPEN</h2>
  <h1>YOUR DREAMHOME</h1>
  <p>Trusted by over 300+ of the world's leading brands</p>
</div>
</section>

<section class="container process-flow">
<div class="row">
  <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="rp-modern__item">
      <a class="rp-modern__image" href="http://anpsthemes.com/constructo-new-demos/10/from-idea-to-realisation/"><img width="360" height="267" src="http://anpsthemes.com/constructo-new-demos/10/wp-content/uploads/2014/12/post1-360x267.jpg" class="attachment-post-thumb size-post-thumb wp-post-image" alt=""></a>
      <div class="rp-modern__wrap">
        <div class="rp-modern__header">
          <a class="rp-modern__title" href="http://anpsthemes.com/constructo-new-demos/10/from-idea-to-realisation/">
            <h2>From Idea To Realisation</h2>
          </a>
        </div>
        <div class="rp-modern__excerpt">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque lacinia vestibulum.</p>
        </div>
        <a class="rp-modern__link btn style-4" href="http://anpsthemes.com/constructo-new-demos/10/from-idea-to-realisation/">Read more</a>
      </div>
    </div>
  </div>
  <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="rp-modern__item">
      <a class="rp-modern__image" href="http://anpsthemes.com/constructo-new-demos/10/home-renovations-with-no-fuss/"><img width="360" height="267" src="http://anpsthemes.com/constructo-new-demos/10/wp-content/uploads/2014/12/post2-360x267.jpg" class="attachment-post-thumb size-post-thumb wp-post-image" alt=""></a>
      <div class="rp-modern__wrap">
        <div class="rp-modern__header">
          <a class="rp-modern__title" href="http://anpsthemes.com/constructo-new-demos/10/home-renovations-with-no-fuss/">
            <h2>Home Renovations With No Fuss</h2>
          </a>
        </div>
        <div class="rp-modern__excerpt">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque lacinia vestibulum.
          </p>
        </div>
        <a class="rp-modern__link btn style-4" href="http://anpsthemes.com/constructo-new-demos/10/home-renovations-with-no-fuss/">Read more</a>
      </div>
    </div>
  </div>
  <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div class="rp-modern__item">
      <a class="rp-modern__image" href="http://anpsthemes.com/constructo-new-demos/10/make-your-home-your-paradise/"><img width="360" height="267" src="http://anpsthemes.com/constructo-new-demos/10/wp-content/uploads/2014/12/post3-360x267.jpg" class="attachment-post-thumb size-post-thumb wp-post-image" alt=""></a>
      <div class="rp-modern__wrap">
        <div class="rp-modern__header">
          <a class="rp-modern__title" href="http://anpsthemes.com/constructo-new-demos/10/make-your-home-your-paradise/">
            <h2>Make Your Home Your Paradise</h2>
          </a>
        </div>
        <div class="rp-modern__excerpt">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque lacinia vestibulum.
          </p>
        </div>
        <a class="rp-modern__link btn style-4" href="http://anpsthemes.com/constructo-new-demos/10/make-your-home-your-paradise/">Read more</a>
      </div>
    </div>
  </div>
</div>
</section>

<section class="clients">
<div class="wpb_wrapper container">
  <h2 class="heading-middle  divider-sm">
    <span>OUR CLIENTS</span></h2>
  <div class="vc_empty_space" style="height: 20px">
    <span class="vc_empty_space_inner"></span></div>
  <div class="logos logos--style-2">
    <div class="owl-carousel carousel" data-margin="6" data-col="5" data-nav="true" data-num-logos="7">

      <?php $i=0;while($i < count($node->field_client_image['und'])) { ?> 
      <div class="logos__item" style="background-color: #ffffff; ">
        <div class="logos__wrap"><img class="logos__image" src="<?php print $image_url.$node->field_client_image['und'][$i]['filename'] ?>" alt=""></div>
        </div>
      <?php $i++; } ?>
    </div>
  </div>
</div>
</div>
</div>
</section>
<?php require_once ('page--footer.tpl.php'); ?>