@extends('layouts/app')

{{-- Page title --}}
@section('title')
Contact Us
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
    
@stop

{{-- content --}}
@section('content')
    <div id="content-wrap" class="container clr">
        <div id="primary" class="content-area clr">
            <div id="content" class="site-content clr">
                <article id="single-blocks" class="single-page-article wpex-clr">
                    <div class="single-page-content entry clr">
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding wpex-vc-row-stretched">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_gmaps_widget wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_map_wraper">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.7042415758074!2d-116.26051648450219!3d43.65432137912123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54aeff139c52ab49:0xd8fb8c0b3cb4b8a0!2s3724+N+Plantation+River+Dr+%23102,+Garden+City,+ID+83703!5e0!3m2!1sen!2sus!4v1529594088805" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1497039284598">
                            <div class="wpb_column vc_column_container vc_col-sm-4 wpex-vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1497039409541">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1529594113888">
                                            <div class="wpb_wrapper">
                                                <p><span class="vcex-heading-inner clr" style="font-size: 32px;">NexGen Lending</span></p>
                                                <p><strong>HOURS:</strong></p>
                                                <p>Monday-Friday, from 8am-6pm.</p>
                                                <p><strong>ADDRESS:</strong></p>
                                                <p>3724 N Plantation River Drive
                                                    <br /> Suite 102
                                                    <br /> Boise, ID 83703</p>
                                                <p><strong>CONTACT:</strong></p>
                                                <p><a href="mailto:info@nexgenlend.com">info@nexgenlend.com</a>
                                                    <br /> <a href="tel:(208) 480-1244">(208) 480-1244</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-8 wpex-vc_col-has-fill">
                                <div class="vc_column-inner vc_custom_1496761450970">
                                    <div class="wpb_wrapper">
                                        <div style="font-size:24px;text-align:center;" class="wpb_text_column wpb_content_element  vc_custom_1496761686988">
                                            <div class="wpb_wrapper">
                                                <p>CONTACT US</p>
                                            </div>
                                        </div>
                                        <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_2'>
                                            <a id='gf_2' class='gform_anchor'></a>
                                            <form method='post' enctype='multipart/form-data' id='gform_2' action='/contact-us/#gf_2'>
                                                <div class='gform_body'>
                                                    <ul id='gform_fields_2' class='gform_fields top_label form_sublabel_below description_below'>
                                                        <li id='field_2_1' class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label' for='input_2_1'>First Name<span class='gfield_required'>*</span></label>
                                                            <div class='ginput_container ginput_container_text'>
                                                                <input name='input_1' id='input_2_1' type='text' value='' class='medium' tabindex='1000' aria-required="true" aria-invalid="false" />
                                                            </div>
                                                        </li>
                                                        <li id='field_2_2' class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label' for='input_2_2'>Last Name<span class='gfield_required'>*</span></label>
                                                            <div class='ginput_container ginput_container_text'>
                                                                <input name='input_2' id='input_2_2' type='text' value='' class='medium' tabindex='1001' aria-required="true" aria-invalid="false" />
                                                            </div>
                                                        </li>
                                                        <li id='field_2_3' class='gfield gf_left_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label' for='input_2_3'>Email<span class='gfield_required'>*</span></label>
                                                            <div class='ginput_container ginput_container_email'>
                                                                <input name='input_3' id='input_2_3' type='text' value='' class='medium' tabindex='1002' aria-required="true" aria-invalid="false" />
                                                            </div>
                                                        </li>
                                                        <li id='field_2_4' class='gfield gf_right_half gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label' for='input_2_4'>Phone<span class='gfield_required'>*</span></label>
                                                            <div class='ginput_container ginput_container_phone'>
                                                                <input name='input_4' id='input_2_4' type='text' value='' class='medium' tabindex='1003' aria-required="true" aria-invalid="false" />
                                                            </div>
                                                        </li>
                                                        <li id='field_2_5' class='gfield field_sublabel_below field_description_below gfield_visibility_visible'>
                                                            <label class='gfield_label' for='input_2_5'>Comments</label>
                                                            <div class='ginput_container ginput_container_textarea'>
                                                                <textarea name='input_5' id='input_2_5' class='textarea medium' tabindex='1004' aria-invalid="false" rows='10' cols='50'></textarea>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class='gform_footer top_label'>
                                                    <input type='submit' id='gform_submit_button_2' class='gform_button button' value='Submit' tabindex='1005' onclick='if(window["gf_submitting_2"]){return false;}  window["gf_submitting_2"]=true;  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_2"]){return false;} window["gf_submitting_2"]=true;  jQuery("#gform_2").trigger("submit",[true]); }' />
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
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
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
