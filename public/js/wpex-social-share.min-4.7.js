!function(e){"use strict";e(document).ready(function(e){e(".wpex-social-share li").click(function(t){var s=e(this),i=s.parents(".wpex-social-share").data(),a=i.title,r=i.url,l="",o=i.specs;if(i){var n=s.data("title")?s.data("title"):"";if(s.hasClass("wpex-twitter"))i.twitterTitle&&(a=i.twitterTitle),l="https://twitter.com/intent/tweet?text="+a+"&url="+r,i.twitterHandle&&(l+="&via="+i.twitterHandle);else if(s.hasClass("wpex-facebook"))l="https://www.facebook.com/sharer/sharer.php?u="+r;else if(s.hasClass("wpex-googleplus"))l="https://plus.google.com/share?url="+i.url;else if(s.hasClass("wpex-pinterest"))l="https://www.pinterest.com/pin/create/button/?url="+r,i.image&&(l+="&media="+i.image),i.summary&&(l+="&description="+i.summary);else if(s.hasClass("wpex-linkedin"))l="https://www.linkedin.com/shareArticle?mini=true&url="+r+"&title="+a,i.summary&&(l+="&summary="+i.summary),i.source&&(l+="&source="+i.source);else{if(s.hasClass("wpex-email"))return l="mailto:?subject="+i.emailSubject+"&body="+i.emailBody,void(window.location.href=l);s.children("a").attr("href")&&(l=s.children("a").attr("href"),o="")}l&&(t.preventDefault(),window.open(l,n,o).focus())}})})}(jQuery);