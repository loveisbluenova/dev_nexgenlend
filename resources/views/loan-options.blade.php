@extends('layouts/app')

{{-- Page title --}}
@section('title')
Mortgage Calculator - NexGen Lending
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
            <h1 class="page-header-title wpex-clr" itemprop="headline"><span>Loan Options</span></h1>
            <nav class="site-breadcrumbs wpex-clr hidden-phone position-absolute has-js-fix"><span class="breadcrumb-trail"><span><span><a href="/">Home</a> &raquo; <span class="breadcrumb_last">Loan Options</span></span>
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
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1461870524206">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div style="font-size:32px;text-align:center;" class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>NexGen Lending Loan Options</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-two hvr hvr-float  vc_custom_1502283639083">
                                            <a href="http://199.250.195.28/~terryrobinson/loan-options/fixed-rate-mortgage/" class="vcex-icon-box-link"><img class="vcex-icon-box-image" style="width:100px;" alt="I Have At Least 5% Available For A Down Payment." src="../images/Conventional-Icon-100x100.png" data-no-retina width="100" height="100" />
                                                <div class="vcex-icon-box-heading" style="color:#020202;font-size:24px;">I have at least 5% available for a down payment.</div>
                                            </a>
                                            <div class="vcex-icon-box-content clr" style="color:#000000;">
                                                <p>Fixed Rate Mortgage</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-two hvr hvr-float  vc_custom_1496430550346">
                                            <a href="http://199.250.195.28/~terryrobinson/loan-options/fha-home-loan/" class="vcex-icon-box-link"><img class="vcex-icon-box-image" style="width:100px;" alt="I Have A Small Amount For Down Payment. " src="../images/FHA-Icon-100x100.png" data-no-retina width="100" height="100" />
                                                <div class="vcex-icon-box-heading" style="color:#020202;font-size:24px;">I have a small amount for down payment.</div>
                                            </a>
                                            <div class="vcex-icon-box-content clr" style="color:#000000;">
                                                <p>FHA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-two hvr hvr-float  vc_custom_1502283434405">
                                            <a href="http://199.250.195.28/~terryrobinson/loan-options/va-home-loan/" class="vcex-icon-box-link"><img class="vcex-icon-box-image" style="width:100px;" alt="I'm A Military Veteran Or Actively Serving. " src="../images/VA-Icon-100x100.png" data-no-retina width="100" height="100" />
                                                <div class="vcex-icon-box-heading" style="color:#020202;font-size:24px;">I'm a military veteran or actively serving.</div>
                                            </a>
                                            <div class="vcex-icon-box-content clr" style="color:#000000;">
                                                <p>VA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-two hvr hvr-float  vc_custom_1496431379696">
                                            <a href="http://199.250.195.28/~terryrobinson/refinance/consolidate-your-debt/" class="vcex-icon-box-link"><img class="vcex-icon-box-image" style="width:100px;" alt="I Want To Consolidate Debt Or Take Cash Out Of My Home. " src="../images/Consolidate-Icon-100x100.png" data-no-retina width="100" height="100" />
                                                <div class="vcex-icon-box-heading" style="color:#020202;font-size:24px;">I want to consolidate debt or take cash out of my home.</div>
                                            </a>
                                            <div class="vcex-icon-box-content clr" style="color:#000000;">
                                                <p>Cash-Out Refinance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-two hvr hvr-float  vc_custom_1496431623145">
                                            <a href="http://199.250.195.28/~terryrobinson/refinance/" class="vcex-icon-box-link"><img class="vcex-icon-box-image" style="width:100px;" alt="I Want To Payoff My Loan Faster." src="../images/Faster-Icon-100x100.png" data-no-retina width="100" height="100" />
                                                <div class="vcex-icon-box-heading" style="color:#020202;font-size:24px;">I want to payoff my loan faster.</div>
                                            </a>
                                            <div class="vcex-icon-box-content clr" style="color:#000000;">
                                                <p>Refinance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vcex-module vcex-icon-box clr vcex-icon-box-two hvr hvr-float  vc_custom_1496432025427">
                                            <a href="http://199.250.195.28/~terryrobinson/refinance/" class="vcex-icon-box-link"><img class="vcex-icon-box-image" style="width:100px;" alt="I Want To Reduce My Monthly Payment Or Rate. " src="../images/Reduce-Icon-100x100.png" data-no-retina width="100" height="100" />
                                                <div class="vcex-icon-box-heading" style="color:#020202;font-size:24px;">I want to reduce my monthly payment or rate.</div>
                                            </a>
                                            <div class="vcex-icon-box-content clr" style="color:#000000;">
                                                <p>Refinance</p>
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
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <link rel='stylesheet' id='wpex-hover-animations-css' href='../css/hover-css.min-2.0.1.css' type='text/css' media='all' />
    <script type='text/javascript' src='../js/jquery.cookie.min.js'></script>
    <script type='text/javascript' src='../js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='../js/jquery-confirm.min-3.2.0.js'></script>
    <script type='text/javascript' src='../js/home.js'></script>
    <script type='text/javascript' src='../js/wpex.min-4.7.js'></script>
    <script type='text/javascript' src='../js/wp-embed.min.js'></script>
    <script type='text/javascript' src='../js/js_composer_front.min-5.5.2.js'></script>
    <!--page level js ends-->
@stop
