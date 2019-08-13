<?php require_once('page--header.tpl.php'); ?>
<section class="top" id="firstsection">
    <div class="paddingtb30">
         <div class="container">
            <div class="row tweak1">
                <div class="col-md-12 xs-nopd">
                  <div id="content" class="column paddingtb30" style="display:block;margin:0 auto;float:none;">
                    <div class="section">
                    <?php if ($title): ?>
                      <h1 class="title" id="page-title">
                        <?php print $title; ?>
                      </h1>
                    <?php endif; ?>
                    <h3> Page Not Found </h3>
                  </div>
                </div> <!-- /.section, /#content -->
              </div>
            </div>
        </div>
    </div>
</section>
<section id="secondsection">
</section>
<?php require_once('page--footer.tpl.php'); ?>
