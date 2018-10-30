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
            <h1 class="page-header-title wpex-clr" itemprop="headline"><span>Mortgage Calculator</span></h1>
            <nav class="site-breadcrumbs wpex-clr hidden-phone position-absolute has-js-fix"><span class="breadcrumb-trail"><span><span><a href="/">Home</a> &raquo; <span class="breadcrumb_last">Mortgage Calculator</span></span>
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
                                        <div class="shmac-holder ">
                                            <div class="mui-panel shmac-sc form-1">
                                                <form class="shmac-form" data-currencysymbol="$" data-currencyside="left" data-downpaytype="percent">
                                                    <legend>Amortization Calculator</legend>
                                                    <div class="mui-form-group shmac-amount">
                                                        <a href="#" class="shmac-tip" title=" " data-title="The total purchase price of the home you wish to buy."> <span> <img src="../images/info.png" class="shmac-info" /> </span> </a>
                                                        <div class="shmac-symbol ">$</div>
                                                        <input type="text" class="mort-amount mui-form-control  amountinput_1" value="224,000.00" data-a-dec="." data-a-sep="," />
                                                        <label class="mui-form-floating-label">Mortgage Amount</label>
                                                        <div class="err-msg"></div>
                                                    </div>
                                                    <div class="mui-form-group shmac-interest">
                                                        <a href="#" class="shmac-tip" title=" " data-title="The expected percent interest rate you will get on your mortgage."> <span> <img src="../images/info.png" class="shmac-info" /> </span> </a>
                                                        <input type="text" class="interest mui-form-control interestinput_1" value="4.5" data-v-min="0.000" data-v-max="100.000" data-a-pad="false" />
                                                        <label class="mui-form-floating-label">Interest Rate (%)</label>
                                                        <div class="err-msg"></div>
                                                    </div>
                                                    <div class="mui-form-group shmac-down">
                                                        <a href="#" class="shmac-tip" title=" " data-title="The percent down payment you wish to put towards the home."> <span> <img src="../images/info.png" class="shmac-info" /> </span> </a>
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
                                                        <a href="#" class="shmac-tip" title=" " data-title="The length of time it will take to repay the loan amount (30 years is common)."> <span> <img src="../images/info.png" class="shmac-info" /> </span> </a>
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
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Disclaimer:</p>
                                                <p>Results received from this calculator are designed for comparative purposes only, and accuracy is not guaranteed. NexGen Lending does not guarantee the accuracy of any information or inputs by users of the software.</p>
                                                <p>This calculator does not have the ability to pre-qualify you for any loan program which should be verified independently with one of our Loan Consultants. Qualification for loan programs may require additional information such as credit scores and cash reserves which is not gathered in this calculator. Information such as interest rates and pricing are subject to change at any time and without notice. Additional fees such as HOA dues are not included in calculations. All information such as interest rates, taxes, insurance, PMI payments, etc. are estimates and should be used for comparison only. NexGen Lending does not guarantee any of the information obtained by this calculator.</p>
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
    <!--page level js ends-->
@stop
