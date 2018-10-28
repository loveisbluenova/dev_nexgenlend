@extends('layouts/app')

{{-- Page title --}}
@section('title')
Mortgage Rates in Boise Idaho
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

@stop

{{-- slider --}}
@section('top')
    <div class="page-slider clr">
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                <ul>
                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="../images/slidethumb-100x50.jpg" data-delay="7000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="../../images/slidethumb.jpg" alt="" title="slidethumb" width="1773" height="995" data-bgposition="center center" data-bgfit="cover" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="../video/happy-couple.mp4" data-videopreload="auto" data-videoloop="none" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false"></div>
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-1-layer-5" data-x="['center','center','center','center']" data-hoffset="['-2','-2','-2','-2']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontweight="['100','400','400','400']" data-width="4000" data-height="4000" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(0,0,0,0.4);"></div>
                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="['center','center','center','center']" data-hoffset="['-2','-2','2','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-77','-77','-112','-145']" data-fontsize="['55','55','45','45']" data-lineheight="['65','65','60','60']" data-color="['rgb(255,255,255)','rgb(255,255,255)','rgba(255,255,255,1)','rgba(255,255,255,1)']" data-width="['936','936','534','451']" data-height="['none','none','none','121']" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","ease":"nothing"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 936px; max-width: 936px; white-space: normal; font-size: 55px; line-height: 65px; font-weight: 700; color: #ffffff; letter-spacing: px;font-family:Montserrat;">Home Financing Made Simple</div>
                        <div class="tp-caption rev-btn " id="slide-1-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['43','43','43','43']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/apply-online\/","delay":""}]' data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 8; white-space: nowrap; font-size: 35px; line-height: 35px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: px;font-family:Montserrat;background-color:rgba(212,97,31,0.75);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Let's Begin</div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
            <script>
                var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                var htmlDivCss = "";
                if (htmlDiv) {
                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                } else {
                    var htmlDiv = document.createElement("div");
                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                }
            </script>
            <script type="text/javascript">
                if (setREVStartSize !== undefined) setREVStartSize({
                    c: '#rev_slider_1_1',
                    responsiveLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [900, 800, 960, 720],
                    sliderLayout: 'fullwidth'
                });

                var revapi1,
                    tpj;
                (function() {
                    if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
                    else onLoad();

                    function onLoad() {
                        if (tpj === undefined) {
                            tpj = jQuery;
                            if ("off" == "on") tpj.noConflict();
                        }
                        if (tpj("#rev_slider_1_1").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_1_1");
                        } else {
                            revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                sliderType: "hero",
                                jsFileLocation: "//www.nexgenlend.com/wp-content/plugins/revslider/public/assets/js/",
                                // jsFileLocation: "js/revslider/assets/js/",
                                sliderLayout: "fullwidth",
                                dottedOverlay: "none",
                                delay: 7000,
                                responsiveLevels: [1240, 1024, 778, 480],
                                visibilityLevels: [1240, 1024, 778, 480],
                                gridwidth: [1240, 1024, 778, 480],
                                gridheight: [900, 800, 960, 720],
                                lazyType: "none",
                                parallax: {
                                    type: "mouse",
                                    origo: "enterpoint",
                                    speed: 400,
                                    speedbg: 0,
                                    speedls: 0,
                                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                                },
                                shadow: 0,
                                spinner: "spinner0",
                                autoHeight: "off",
                                disableProgressBar: "on",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    disableFocusListener: false,
                                }
                            });
                        }; /* END OF revapi call */

                    }; /* END OF ON LOAD FUNCTION */
                }()); /* END OF WRAPPING FUNCTION */
            </script>
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
