@extends('layouts/app')

{{-- Page title --}}
@section('title')
Mortgage Rates in Boise Idaho
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<style>
.slide-content {
    position: absolute;
    top: 0;
    background: rgba(0, 0, 0, 0.4);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
    text-align: center;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.slider-txt{
    font-size: 55px;
    line-height: 65px;
    font-weight: 700;
    color: rgb(255, 255, 255);
    font-family: Montserrat;
    text-align: center;
    margin: 50px;
}
.slider-btn{
    white-space: nowrap;
    font-size: 35px;
    line-height: 35px;
    font-weight: 500;
    color: rgb(255, 255, 255);
    font-family: Montserrat;
    background-color: rgba(212, 97, 31, 0.75);
    border-color: rgb(0, 0, 0);
    border-radius: 3px;
    outline: none;
    box-shadow: rgb(153, 153, 153) 0px 0px 0px 0px;
    box-sizing: border-box;
    cursor: pointer;
    visibility: inherit;
    transition: none 0s ease 0s;
    text-align: inherit;
    margin: 0px;
    padding: 12px 35px;
    letter-spacing: 0px;
    min-height: 0px;
    min-width: 0px;
    max-height: none;
    max-width: none;
    opacity: 1;
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform-origin: 50% 50% 0px;
    text-align: center;
}
#video_id{
    height: 100vh;
}
video.loading {
  background: black url(/images/loader.gif) center center no-repeat;
}
video {
    max-width: none;
}
</style>
@stop

{{-- slider --}}
@section('top')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
  AOS.init();
jQuery(function($) {
     $('#video_id').on('loadstart', function (event) {
    $(this).addClass('loading');
  });
  $('#video_id').on('canplay', function (event) {
    $(this).removeClass('loading');
    $(this).attr('poster', '');
  });
});
</script>
    <div class="page-slider">

        <video autoplay muted id="video_id">
          <source src="../video/happy-couple.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
        <div class="slide-content">
            <div class="item" data-aos="zoom-in" data-aos-duration="3000"><p class="slider-txt">Home Financing Made Simple</p></div>
            <div class="item" data-aos="fade-up" data-aos-duration="3000"><button class="slider-btn">Let's Begin</button></div>
        </div>
    </div>
  
@stop

{{-- content --}}
@section('content')
    <div id="content-wrap" class="container clr">
        <div id="primary" class="content-area clr">
            <div id="content" class="site-content clr">
                <article id="single-blocks" class="single-page-article wpex-clr">
                    <div class="single-page-content entry clr">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1416005575553">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vcex-module vcex-heading vcex-heading-plain" style="font-size:34px;text-align:center;"><span class="vcex-heading-inner clr">WELCOME TO NexGen Lending</span></div>
                                        <div class="vcex-spacing" style="height:20px"></div>
                                        <div style="font-size:18px;text-align:left;" class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>NexGen Lending helps you compare mortgage rates in Boise Idaho, home equity loans, construction loans and other niche loan types. NexGen Lending also publishes <a href="blog/index.html">original and informative content</a> to help you make smarter financial decisions. Our experienced editors and contributors provide expert advice on nearly every loan scenario you may encounter — from purchasing your <a href="purchase/boise-id-first-time-home-buyer/index.html">first home</a> in Boise ID, to selecting your last loan, and everything in between.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1521124974189 wpex-vc_row-has-fill wpex-vc-row-stretched">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div style="font-size:32px;text-align:center;" class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>WHAT TO EXPECT WHEN WORKING WITH US</p>
                                            </div>
                                        </div>
                                        <div class="vcex-spacing" style="height:20px"></div>
                                        <div style="font-size:18px;text-align:center;" class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Home Financing Made Simple
                                                    <br /> A Revolution In Mortgage Lending by Putting the Power in Your Hands</p>
                                            </div>
                                        </div>
                                        <div class="vcex-spacing" style="height:45px"></div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-one"><img class="vcex-icon-box-image" style="width:40px;" alt="Loan Expert Advice!" src="../images/vip-icon.png" data-no-retina width="40" height="40" />
                                                            <div class="vcex-icon-box-heading">Loan Expert Advice!</div>
                                                            <div class="vcex-icon-box-content clr">
                                                                <p>We have over 15 years of mortgage experience.</p>
                                                            </div>
                                                        </div>
                                                        <div class="vcex-module vcex-divider vcex-divider-solid" style="margin-top:20px;margin-bottom:20px;"></div>
                                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-one"><img class="vcex-icon-box-image" style="width:40px;" alt="Strategic Mortgage Analysis" src="../images/graph-icon.png" data-no-retina width="40" height="40" />
                                                            <div class="vcex-icon-box-heading">Strategic Mortgage Analysis</div>
                                                            <div class="vcex-icon-box-content clr">
                                                                <p>We have the tools to point you in the right direction.</p>
                                                            </div>
                                                        </div>
                                                        <div class="vcex-module vcex-divider vcex-divider-solid" style="margin-top:20px;margin-bottom:20px;"></div>
                                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-one"><img class="vcex-icon-box-image" alt="Mortgage Planning" src="../images/case-icon.png" data-no-retina width="40" height="40" />
                                                            <div class="vcex-icon-box-heading">Mortgage Planning</div>
                                                            <div class="vcex-icon-box-content clr">
                                                                <p>Proper planning keeps your mortgage closing on track.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-one"><img class="vcex-icon-box-image" alt="Communication" src="../images/service-icon.png" data-no-retina width="40" height="40" />
                                                            <div class="vcex-icon-box-heading">Communication</div>
                                                            <div class="vcex-icon-box-content clr">
                                                                <p>Providing timely communication is important in the loan process.</p>
                                                            </div>
                                                        </div>
                                                        <div class="vcex-module vcex-divider vcex-divider-solid" style="margin-top:20px;margin-bottom:20px;"></div>
                                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-one"><img class="vcex-icon-box-image" alt="Speedy Approvals!" src="../images/hourglass-icon.png" data-no-retina width="40" height="40" />
                                                            <div class="vcex-icon-box-heading">Speedy Approvals!</div>
                                                            <div class="vcex-icon-box-content clr">
                                                                <p>We work to make the process smooth and quick.</p>
                                                            </div>
                                                        </div>
                                                        <div class="vcex-module vcex-divider vcex-divider-solid" style="margin-top:20px;margin-bottom:20px;"></div>
                                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-one"><img class="vcex-icon-box-image" alt="Competitive Rates &amp; Fees" src="../images/bullseye-icon.png" data-no-retina width="40" height="40" />
                                                            <div class="vcex-icon-box-heading">Competitive Rates &amp; Fees</div>
                                                            <div class="vcex-icon-box-content clr">
                                                                <p>Call for a quote, no obligation.</p>
                                                                <p>&nbsp;</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vcex-spacing" style="height:30px"></div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="textcenter theme-button-wrap clr"><a href="quote/index.html" class="vcex-button theme-button outline align-center inline animate-on-hover" style="font-size:16px;width:275px;"><span class="theme-button-inner">REQUEST A QUOTE<span class="vcex-icon-wrap theme-button-icon-right"><span class="fa fa-angle-double-right"></span></span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="textcenter theme-button-wrap clr"><a href="apply-online/index.html" class="vcex-button theme-button outline align-center inline animate-on-hover" style="font-size:16px;width:275px;"><span class="theme-button-inner">APPLY ONLINE<span class="vcex-icon-wrap theme-button-icon-right"><span class="fa fa-angle-double-right"></span></span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="textcenter theme-button-wrap clr"><a href="mailto:info@nexgenlend.com" class="vcex-button theme-button outline align-center inline animate-on-hover" style="font-size:16px;width:275px;"><span class="theme-button-inner">INFO@NEXGENLEND.COM<span class="vcex-icon-wrap theme-button-icon-right"><span class="fa fa-envelope-open-o"></span></span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="textcenter theme-button-wrap clr"><a href="tel:(208)%20480-1244" class="vcex-button theme-button outline align-center inline animate-on-hover" style="font-size:16px;width:275px;"><span class="theme-button-inner">(208) 480-1244<span class="vcex-icon-wrap theme-button-icon-right"><span class="vc_li vc_li-phone"></span></span></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax-image="../images/testimonial-back4.jpg" class="vc_row wpb_row vc_row-fluid vc_custom_1509049768308 wpex-vc-row-stretched wpex-parallax-bg-wrap wpex-vc_row-has-fill wpex-has-overlay">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div style="color:#ffffff;font-size:32px;text-align:center;" class="wpb_text_column has-custom-color wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>CLIENT REVIEWS</p>
                                            </div>
                                        </div>
                                        <div class="vcex-module vcex-testimonials-fullslider vcex-flexslider-wrap wpex-fs-21px light-skin has-controlnav ">
                                            <div class="wpex-slider slider-pro" data-fade-arrows="false" data-arrows="true" data-buttons="true" data-loop="true" data-auto-play-delay="5000" data-animation-speed="600" data-height-animation-duration="400">
                                                <div class="wpex-slider-slides sp-slides">
                                                    <div class="wpex-slider-slide sp-slide">
                                                        <div class="vcex-testimonials-fullslider-inner textcenter clr">
                                                            <div class="entry wpex-fw-300 clr" style="font-size:18px;">
                                                                <p>Experienced team who answered our questions with confidence and speed. They knew what they were doing through the whole process.</p>
                                                            </div>
                                                            <div class="vcex-testimonials-fullslider-author wpex-fs-14px clr">Sherwood B.
                                                                <div class="vcex-testimonials-fullslider-rating clr"><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="screen-reader-text">Rating: 5</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpex-slider-slide sp-slide">
                                                        <div class="vcex-testimonials-fullslider-inner textcenter clr">
                                                            <div class="entry wpex-fw-300 clr" style="font-size:18px;">
                                                                <p>The NexGen Team helped my wife and I purchase our retirement home. We are on a fixed income so our budget was limited. They considered that carefully and helped us choose the right loan for our needs.</p>
                                                            </div>
                                                            <div class="vcex-testimonials-fullslider-author wpex-fs-14px clr">Frank V.
                                                                <div class="vcex-testimonials-fullslider-rating clr"><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="screen-reader-text">Rating: 5</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpex-slider-slide sp-slide">
                                                        <div class="vcex-testimonials-fullslider-inner textcenter clr">
                                                            <div class="entry wpex-fw-300 clr" style="font-size:18px;">
                                                                <p>From the first call to the closing the experience was pleasurable and professional.</p>
                                                            </div>
                                                            <div class="vcex-testimonials-fullslider-author wpex-fs-14px clr">David H.
                                                                <div class="vcex-testimonials-fullslider-rating clr"><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="screen-reader-text">Rating: 5</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpex-bg-overlay-wrap"> <span class="wpex-bg-overlay color" style="background-color:#000000;opacity:.5;" data-style="background-color:#000000;opacity:.5;"></span></div>
                            <div class="wpex-parallax-bg not-mobile" data-direction="top" data-velocity="-0.3" style="background-image:url(../images/testimonial-back4.jpg );"></div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <link rel='stylesheet' id='vc_linecons-css' href='../css/vc_linecons_icons.min-5.5.2.css' type='text/css' media='all' />
    <script type='text/javascript' src='../js/jquery.cookie.min.js'></script>
    <script type='text/javascript' src='../js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='../js/jquery-confirm.min-3.2.0.js'></script>
    <script type='text/javascript' src='../js/home.js'></script>
    <script type='text/javascript' src='../js/wpex.min-4.7.js'></script>
    <script type='text/javascript' src='../js/wp-embed.min.js'></script>
    <script type='text/javascript' src='../js/js_composer_front.min-5.5.2.js'></script>
    <!--page level js ends-->
@stop
