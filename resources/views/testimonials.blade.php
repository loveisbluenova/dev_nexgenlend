@extends('layouts/app')

{{-- Page title --}}
@section('title')
Testimonials
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

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
            <h1 class="page-header-title wpex-clr" itemprop="headline"><span>Testimonials</span></h1>
            <nav class="site-breadcrumbs wpex-clr hidden-phone position-absolute has-js-fix"><span class="breadcrumb-trail"><span><span><a href="/">Home</a> &raquo; <span class="breadcrumb_last">Testimonials</span></span>
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
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vcex-module vcex-testimonials-grid-wrap clr">
                                            <div class="wpex-row vcex-testimonials-grid clr">
                                                <div class="testimonial-entry span_1_of_1 col-1 col post-1438 entry type-testimonials no-media">
                                                    <div class="testimonial-entry-content clr"><span class="testimonial-caret"></span>
                                                        <div class="testimonial-entry-details clr">
                                                            <p>Experienced team who answered our questions with confidence and speed. They knew what they were doing through the whole process.</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-entry-bottom clr">
                                                        <div class="testimonial-entry-meta"><span class="testimonial-entry-author entry-title">Sherwood B.</span>
                                                            <div class="testimonial-entry-rating clr"><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="screen-reader-text">Rating: 5</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-entry span_1_of_1 col-1 col post-1439 entry type-testimonials no-media">
                                                    <div class="testimonial-entry-content clr"><span class="testimonial-caret"></span>
                                                        <div class="testimonial-entry-details clr">
                                                            <p>The NexGen Team helped my wife and I purchase our retirement home. We are on a fixed income so our budget was limited. They considered that carefully and helped us choose the right loan for...<a href="../testimonial/frank-v/index.html">Read More<span>&rarr;</span></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-entry-bottom clr">
                                                        <div class="testimonial-entry-meta"><span class="testimonial-entry-author entry-title">Frank V.</span>
                                                            <div class="testimonial-entry-rating clr"><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="screen-reader-text">Rating: 5</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-entry span_1_of_1 col-1 col post-1433 entry type-testimonials no-media">
                                                    <div class="testimonial-entry-content clr"><span class="testimonial-caret"></span>
                                                        <div class="testimonial-entry-details clr">
                                                            <p>From the first call to the closing the experience was pleasurable and professional.</p>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-entry-bottom clr">
                                                        <div class="testimonial-entry-meta"><span class="testimonial-entry-author entry-title">David H.</span>
                                                            <div class="testimonial-entry-rating clr"><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="fa fa-star" aria-hidden="true"></span><span class="screen-reader-text">Rating: 5</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                <div id="gform_widget-2" class="sidebar-box widget gform_widget clr">
                    <div class="widget-title">Submit A Testimonial</div>
                    <link rel='stylesheet' id='gforms_reset_css-css' href='../../plugins/gravityforms/css/formreset.min-2.3.3.css' type='text/css' media='all' />
					<link rel='stylesheet' id='gforms_formsmain_css-css' href='../../plugins/gravityforms/css/formsmain.min-2.3.3.css' type='text/css' media='all' />
					<link rel='stylesheet' id='gforms_ready_class_css-css' href='../../plugins/gravityforms/css/readyclass.min-2.3.3.css' type='text/css' media='all' />
					<link rel='stylesheet' id='gforms_browsers_css-css' href='../../plugins/gravityforms/css/browsers.min-2.3.3.css' type='text/css' media='all' />
					<script type='text/javascript' src='../../plugins/gravityforms/js/jquery.maskedinput.min-2.3.3.js'></script>
                    <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_6'>
                        <a id='gf_6' class='gform_anchor'></a>
                        <form method='post' enctype='multipart/form-data' id='gform_6' action='/testimonials/#gf_6'>
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
        </aside>
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type='text/javascript' src='../plugins/online-mortgage-plugin-application/public/js/jquery.cookie.min.js'></script>
    <script type='text/javascript' src='../plugins/online-mortgage-plugin-application/public/js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='../plugins/online-mortgage-plugin-application/public/js/jquery-confirm.min-3.2.0.js'></script>
    <script type='text/javascript' src='../js/home.js'></script>
    <script type='text/javascript' src='../js/wpex.min-4.7.js'></script>
    <script type='text/javascript' src='../js/wp-embed.min.js'></script>
    <script type='text/javascript' src='../js/js_composer_front.min-5.5.2.js'></script>
    <!--page level js ends-->
@stop
