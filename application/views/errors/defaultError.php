<?php 

$this->load->view('master_content/ui_header');
$this->load->view('master_content/alt_pageNavbar.php');

?>


<!--content start-->
          <div id="content" class="site-content">
            <section class="blog-detail-section">
              <!---============spacing==========--->
              <div class="pd_top_90"></div>
              <!---============spacing==========--->
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="blog_single_content">
                      <div class="single-thumbnail">
                        <img src="<?php echo base_url(); ?>modules/uiDesign/assets/images/404_error.jpg" class="img-fluid" alt="img" />
                      </div>
                      <div class="single_content_upper">
                        <div class="post_single_content">
                          <div class="section_title small type_one mr_bottom_25">
                            <div class="title_whole text-center">
                              <h3 class="title">Awww.... The Anchor didn't hit the Ground</h3>
                              <p style="text-align: justify;">You need not to worry, you aren't lost. It's just that you have misspelled or routed to an unauthorised url that presently don't exist. Even though this page is cool, but still you <code>can access other working pages through the Menu.</code> </p>

                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>

           
<!---============spacing==========--->
<div class="pd_bottom_85"></div>
<!---============spacing==========--->

<?php 

$this->load->view('master_content/ui_footer');

?>