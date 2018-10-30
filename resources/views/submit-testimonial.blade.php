@extends('layouts/app')

{{-- Page title --}}
@section('title')
Submit Feedback
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link rel='stylesheet' id='gforms_reset_css-css' href='../../plugins/gravityforms/css/formreset.min-2.3.3.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_formsmain_css-css' href='../../plugins/gravityforms/css/formsmain.min-2.3.3.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_ready_class_css-css' href='../../plugins/gravityforms/css/readyclass.min-2.3.3.css' type='text/css' media='all' />
<link rel='stylesheet' id='gforms_browsers_css-css' href='../../plugins/gravityforms/css/browsers.min-2.3.3.css' type='text/css' media='all' />
<script type='text/javascript' src='../../plugins/gravityforms/js/jquery.maskedinput.min-2.3.3.js'></script>

<link rel='stylesheet' id='shmac-frontend-css' href='../css/frontend-1.2.css' type='text/css' media='all' />
<link rel='stylesheet' id='mprogress-css' href='../css/mprogress.min-1.0.css' type='text/css' media='all' />
<link rel='stylesheet' id='shmac-custom-scrollbar-css' href='../css/jquery.mCustomScrollbar.min-3.0.9.css' type='text/css' media='all' />
<link rel='stylesheet' id='nouislider-css' href='../css/nouislider.min-920.css' type='text/css' media='all' />
<link rel='stylesheet' id='wpex-style-css' href='../../css/purchase.css' type='text/css' media='all' />

@stop

{{-- slider --}}
@section('top')
    <header class="page-header wpex-supports-mods">
        <div class="page-header-inner container clr">
            <h1 class="page-header-title wpex-clr" itemprop="headline"><span>Submit Feedback</span></h1>
            <nav class="site-breadcrumbs wpex-clr hidden-phone position-absolute has-js-fix"><span class="breadcrumb-trail"><span><span><a href="/">Home</a> &raquo; <span class="breadcrumb_last">Submit Feedback</span></span>
                </span>
                </span>
            </nav>
        </div>
    </header>
@stop

{{-- content --}}
@section('content')
    <div id="content-wrap" class="container clr">
        <div id="primary" class="content-area clr">
            <div id="content" class="site-content clr">
                <article id="single-blocks" class="single-page-article wpex-clr">
                    <div class="single-page-content entry clr">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p><span style="font-size: 18pt;">NexGen Lending Client Feedback!</span></p>
                                                <p>We want to hear from you! We love to hear from our clients and review all feedback submitted in an attempt to ensure that we are providing professional and efficient service.</p>
                                                <p>If you need immediate assistance please call us (208) 480-1244</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8 wpex-vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1447719892227">
                                    <div class="wpb_wrapper">
                                        <div style="font-size:24px;text-align:center;" class="wpb_text_column wpb_content_element  vc_custom_1491492500501">
                                            <div class="wpb_wrapper">
                                                <p>Submit A Testimonial!</p>
                                            </div>
                                        </div>
                                        <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_6'>
                                            <a id='gf_6' class='gform_anchor'></a>
                                            <form method='post' enctype='multipart/form-data' id='gform_6' action='/submit-testimonial/#gf_6'>
                                                <div class='gform_body'>
                                                    <ul id='gform_fields_6' class='gform_fields top_label form_sublabel_below description_below'>
                                                        <li id='field_6_1' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label gfield_label_before_complex' for='input_6_1_3'>Name<span class='gfield_required'>*</span></label>
                                                            <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name' id='input_6_1'> <span id='input_6_1_3_container' class='name_first'> <input type='text' name='input_1.3' id='input_6_1_3' value='' aria-label='First name' tabindex='1000'  aria-required="true" aria-invalid="false" /> <label for='input_6_1_3' >First</label> </span> <span id='input_6_1_6_container' class='name_last'> <input type='text' name='input_1.6' id='input_6_1_6' value='' aria-label='Last name' tabindex='1001'  aria-required="true" aria-invalid="false" /> <label for='input_6_1_6' >Last</label> </span>
                                                                <div class='gf_clear gf_clear_complex'></div>
                                                            </div>
                                                        </li>
                                                        <li id='field_6_2' class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label' for='input_6_2'>Phone<span class='gfield_required'>*</span></label>
                                                            <div class='ginput_container ginput_container_phone'>
                                                                <input name='input_2' id='input_6_2' type='text' value='' class='medium' tabindex='1002' aria-required="true" aria-invalid="false" />
                                                            </div>
                                                        </li>
                                                        <li id='field_6_3' class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label' for='input_6_3'>Email<span class='gfield_required'>*</span></label>
                                                            <div class='ginput_container ginput_container_email'>
                                                                <input name='input_3' id='input_6_3' type='text' value='' class='medium' tabindex='1003' aria-required="true" aria-invalid="false" />
                                                            </div>
                                                        </li>
                                                        <li id='field_6_4' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label' for='input_6_4'>Rating<span class='gfield_required'>*</span></label>
                                                            <div class='ginput_container ginput_container_select'>
                                                                <select name='input_4' id='input_6_4' class='medium gfield_select' tabindex='1004' aria-required="true" aria-invalid="false">
                                                                    <option value='No Rating'>No Rating</option>
                                                                    <option value='1 Star'>1 Star</option>
                                                                    <option value='2 Stars'>2 Stars</option>
                                                                    <option value='3 Stars'>3 Stars</option>
                                                                    <option value='4 Stars'>4 Stars</option>
                                                                    <option value='5 Stars'>5 Stars</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li id='field_6_5' class='gfield field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label' for='input_6_5'>Describe in detail your experience with us.</label>
                                                            <div class='ginput_container ginput_container_textarea'>
                                                                <textarea name='input_5' id='input_6_5' class='textarea medium' tabindex='1005' aria-invalid="false" rows='10' cols='50'></textarea>
                                                            </div>
                                                        </li>
                                                        <li id='field_6_6' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label'><span class='gfield_required'>*</span></label>
                                                            <div class='ginput_container ginput_container_checkbox'>
                                                                <ul class='gfield_checkbox' id='input_6_6'>
                                                                    <li class='gchoice_6_6_1'>
                                                                        <input name='input_6.1' type='checkbox' value='I promise this review is honest and respectful' id='choice_6_6_1' tabindex='1006' />
                                                                        <label for='choice_6_6_1' id='label_6_6_1'>I promise this review is honest and respectful</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class='gform_footer top_label'>
                                                    <input type='submit' id='gform_submit_button_6' class='gform_button button' value='Submit' tabindex='1007' onclick='if(window["gf_submitting_6"]){return false;}  window["gf_submitting_6"]=true;  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_6"]){return false;} window["gf_submitting_6"]=true;  jQuery("#gform_6").trigger("submit",[true]); }' />
                                                    <input type='hidden' class='gform_hidden' name='is_submit_6' value='1' />
                                                    <input type='hidden' class='gform_hidden' name='gform_submit' value='6' />
                                                    <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                                                    <input type='hidden' class='gform_hidden' name='state_6' value='WyJbXSIsIjhkZmY1NTE2NWJkYjZmYWNjNjg3MzA0NTYwNTMwNmE4Il0=' />
                                                    <input type='hidden' class='gform_hidden' name='gform_target_page_number_6' id='gform_target_page_number_6' value='0' />
                                                    <input type='hidden' class='gform_hidden' name='gform_source_page_number_6' id='gform_source_page_number_6' value='1' />
                                                    <input type='hidden' name='gform_field_values' value='' />
                                                </div>
                                            </form>
                                        </div>
                                        <script type='text/javascript'>
                                            jQuery(document).bind('gform_post_render', function(event, formId, currentPage) {
                                                if (formId == 6) {
                                                    jQuery('#input_6_2').mask('(999) 999-9999').bind('keypress', function(e) {
                                                        if (e.which == 13) {
                                                            jQuery(this).blur();
                                                        }
                                                    });
                                                }
                                            });
                                            jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {});
                                        </script>
                                        <script type='text/javascript'>
                                            jQuery(document).ready(function() {
                                                jQuery(document).trigger('gform_post_render', [6, 1])
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <aside id="sidebar" class="sidebar-container sidebar-primary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
            <div id="sidebar-inner" class="clr">
                <div id="gform_widget-3" class="sidebar-box widget gform_widget clr">
                    <div class="widget-title">CONTACT US / (888) 455-9088</div>
                    <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_2'>
                        <a id='gf_2' class='gform_anchor'></a>
                        <form method='post' enctype='multipart/form-data' id='gform_2' action='/submit-testimonial/#gf_2'>
                            <div class='gform_body'>
                                <ul id='gform_fields_2' class='gform_fields top_label form_sublabel_below description_below'>
                                    <li id='field_2_1' class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                        <label class='gfield_label' for='input_2_1'>First Name<span class='gfield_required'>*</span></label>
                                        <div class='ginput_container ginput_container_text'>
                                            <input name='input_1' id='input_2_1' type='text' value='' class='medium' tabindex='1008' aria-required="true" aria-invalid="false" />
                                        </div>
                                    </li>
                                    <li id='field_2_2' class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                        <label class='gfield_label' for='input_2_2'>Last Name<span class='gfield_required'>*</span></label>
                                        <div class='ginput_container ginput_container_text'>
                                            <input name='input_2' id='input_2_2' type='text' value='' class='medium' tabindex='1009' aria-required="true" aria-invalid="false" />
                                        </div>
                                    </li>
                                    <li id='field_2_3' class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                        <label class='gfield_label' for='input_2_3'>Email<span class='gfield_required'>*</span></label>
                                        <div class='ginput_container ginput_container_email'>
                                            <input name='input_3' id='input_2_3' type='text' value='' class='medium' tabindex='1010' aria-required="true" aria-invalid="false" />
                                        </div>
                                    </li>
                                    <li id='field_2_4' class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                        <label class='gfield_label' for='input_2_4'>Phone<span class='gfield_required'>*</span></label>
                                        <div class='ginput_container ginput_container_phone'>
                                            <input name='input_4' id='input_2_4' type='text' value='' class='medium' tabindex='1011' aria-required="true" aria-invalid="false" />
                                        </div>
                                    </li>
                                    <li id='field_2_5' class='gfield field_sublabel_below field_description_below gfield_visibility_visible'>
                                        <label class='gfield_label' for='input_2_5'>Comments</label>
                                        <div class='ginput_container ginput_container_textarea'>
                                            <textarea name='input_5' id='input_2_5' class='textarea medium' tabindex='1012' aria-invalid="false" rows='10' cols='50'></textarea>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class='gform_footer top_label'>
                                <input type='submit' id='gform_submit_button_2' class='gform_button button' value='Submit' tabindex='1013' onclick='if(window["gf_submitting_2"]){return false;}  window["gf_submitting_2"]=true;  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_2"]){return false;} window["gf_submitting_2"]=true;  jQuery("#gform_2").trigger("submit",[true]); }' />
                                <input type='hidden' class='gform_hidden' name='is_submit_2' value='1' />
                                <input type='hidden' class='gform_hidden' name='gform_submit' value='2' />
                                <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                                <input type='hidden' class='gform_hidden' name='state_2' value='WyJbXSIsIjhkZmY1NTE2NWJkYjZmYWNjNjg3MzA0NTYwNTMwNmE4Il0=' />
                                <input type='hidden' class='gform_hidden' name='gform_target_page_number_2' id='gform_target_page_number_2' value='0' />
                                <input type='hidden' class='gform_hidden' name='gform_source_page_number_2' id='gform_source_page_number_2' value='1' />
                                <input type='hidden' name='gform_field_values' value='' />
                            </div>
                        </form>
                    </div>
                    <script type='text/javascript'>
                        jQuery(document).bind('gform_post_render', function(event, formId, currentPage) {
                            if (formId == 2) {
                                jQuery('#input_2_4').mask('(999) 999-9999').bind('keypress', function(e) {
                                    if (e.which == 13) {
                                        jQuery(this).blur();
                                    }
                                });
                            }
                        });
                        jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {});
                    </script>
                    <script type='text/javascript'>
                        jQuery(document).ready(function() {
                            jQuery(document).trigger('gform_post_render', [2, 1])
                        });
                    </script>
                </div>
                <div id="shmac_widget-2" class="sidebar-box widget widget_shmac_widget clr">
                    <div class="shmac-holder calc">
                        <div class="mui-panel shmac-sc form-1">
                            <form class="shmac-form" data-currencysymbol="$" data-currencyside="left" data-downpaytype="percent">
                                <legend>Amortization Calculator</legend>
                                <div class="mui-form-group shmac-amount">
                                    <a href="#" class="shmac-tip" title=" " data-title="The total purchase price of the home you wish to buy."> <span> <img src="../../images/info.png" class="shmac-info" /> </span> </a>
                                    <div class="shmac-symbol ">$</div>
                                    <input type="text" class="mort-amount mui-form-control  amountinput_1" value="224,000.00" data-a-dec="." data-a-sep="," />
                                    <label class="mui-form-floating-label">Mortgage Amount</label>
                                    <div class="err-msg"></div>
                                </div>
                                <div class="mui-form-group shmac-interest">
                                    <a href="#" class="shmac-tip" title=" " data-title="The expected percent interest rate you will get on your mortgage."> <span> <img src="../../images/info.png" class="shmac-info" /> </span> </a>
                                    <input type="text" class="interest mui-form-control interestinput_1" value="4.5" data-v-min="0.000" data-v-max="100.000" data-a-pad="false" />
                                    <label class="mui-form-floating-label">Interest Rate (%)</label>
                                    <div class="err-msg"></div>
                                </div>
                                <div class="mui-form-group shmac-down">
                                    <a href="#" class="shmac-tip" title=" " data-title="The percent down payment you wish to put towards the home."> <span> <img src="../../images/info.png" class="shmac-info" /> </span> </a>
                                    <input type="text" class="downpay  mui-form-control  downpayinput_1" value="10" data-v-min="0.000" data-v-max="100.000" data-a-pad="false" />
                                    <label class="mui-form-floating-label">Down Payment (%)</label>
                                    <div class="err-msg"></div>
                                </div>
                                <div class="mui-form-group shmac-term">
                                    <div class="shmac-term-years">
                                        <input type="checkbox" id="term-years-1" class="term-years term-group" checked="checked" />
                                        <label for="term-years-1">Years</label>
                                    </div>
                                    <div class="shmac-term-months">
                                        <input type="checkbox" id="term-months-1" class="term-months term-group" />
                                        <label for="term-months-1">Months</label>
                                    </div>
                                    <a href="#" class="shmac-tip" title=" " data-title="The length of time it will take to repay the loan amount (30 years is common)."> <span> <img src="../../images/info.png" class="shmac-info" /> </span> </a>
                                    <input type="text" class="term mui-form-control terminput_1" value="30" data-a-pad="false" />
                                    <label class="mui-form-floating-label">Term</label>
                                    <div class="err-msg"></div>
                                </div>
                                <div class="progresso"> &nbsp;</div>
                                <div class="buttonRow">
                                    <button class="mui-btn submit-shmac" data-mui-color="#a4d06e">Calculate</button>
                                    <button class="mui-btn shmac-reset_1" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="text-5" class="sidebar-box widget widget_text clr">
                    <div class="textwidget">
                        <section class="vc_cta3-container">
                            <div class="vc_general vc_cta3 vc_cta3-style-3d vc_cta3-shape-rounded vc_cta3-align-center vc_cta3-color-classic vc_cta3-icon-size-md vc_cta3-actions-bottom">
                                <div class="vc_cta3_content-container">
                                    <div class="vc_cta3-content">
                                        <header class="vc_cta3-content-header">
                                            <h2>I am ready to get started with my no obligation loan consultation!</h2></header>
                                    </div>
                                    <div class="vc_cta3-actions">
                                        <div class="vc_btn3-container vc_btn3-center"> <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-block vc_btn3-icon-left vc_btn3-color-success" href="../quote/index.html" title=""><i class="vc_btn3-icon fa fa-hand-o-up"></i> LETS GET STARTED</a></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div id="wpex_info_widget-2" class="sidebar-box widget widget_wpex_info_widget clr">
                    <div class="widget-title">Contact Us</div>
                    <div class="wpex-info-widget wpex-clr">
                        <div class="wpex-info-widget-address wpex-clr"><span class="fa fa-map-marker"></span>
                            <p>3724 N Plantation River Drive
                                <br /> Suite 102
                                <br /> Boise, ID 83703</p>
                        </div>
                        <div class="wpex-info-widget-phone wpex-clr"><span class="fa fa-phone"></span><a href="tel:(888) 455-9088">(888) 455-9088</a></div>
                        <div class="wpex-info-widget-email wpex-clr"><span class="fa fa-envelope"></span><a href="mailto:i&#110;&#102;&#111;&#64;&#110;e&#120;&#103;&#101;nle&#110;d&#46;c&#111;&#109;" title="i&#110;&#102;&#111;&#064;&#110;e&#120;&#103;&#101;nle&#110;d&#046;c&#111;&#109;">i&#110;&#102;&#111;&#64;&#110;e&#120;&#103;&#101;nle&#110;d&#46;c&#111;&#109;</a></div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <link rel='stylesheet' id='shmac-frontend-css' href='../css/frontend-1.2.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mprogress-css' href='../css/mprogress.min-1.0.css' type='text/css' media='all' />
    <link rel='stylesheet' id='shmac-custom-scrollbar-css' href='../css/jquery.mCustomScrollbar.min-3.0.9.css' type='text/css' media='all' />
    <link rel='stylesheet' id='nouislider-css' href='../css/nouislider.min-920.css' type='text/css' media='all' />
    <script type='text/javascript' src='../plugins/online-mortgage-plugin-application/public/js/jquery.cookie.min.js'></script>
    <script type='text/javascript' src='../plugins/online-mortgage-plugin-application/public/js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='../plugins/online-mortgage-plugin-application/public/js/jquery-confirm.min-3.2.0.js'></script>
    <script type='text/javascript' src='../js/home.js'></script>
    <script type='text/javascript' src='../js/wpex.min-4.7.js'></script>
    <script type='text/javascript' src='../js/wp-embed.min.js'></script>
    <script type='text/javascript' src='../js/js_composer_front.min-5.5.2.js'></script>
    <script type='text/javascript' src='../plugins/shmac/assets/js/autoNumeric-1.9.26.js'></script>
    <script type='text/javascript' src='../plugins/shmac/assets/js/mui-0.1.22-rc1.js'></script>
    <script type='text/javascript' src='../plugins/shmac/assets/js/jquery.mCustomScrollbar.concat.min-3.0.9.js'></script>
    <script type='text/javascript' src='../plugins/shmac/assets/js/mprogress.min-1.0.js'></script>
    <script type='text/javascript' src='../plugins/shmac/assets/js/frontend-ajax-1.2.js'></script>
    <script type='text/javascript' src='../plugins/shmac/assets/js/nouislider.min-920.js'></script>
    <script type='text/javascript' src='../plugins/shmac/assets/js/wNumb-110.js'></script>
    <!--page level js ends-->
@stop
