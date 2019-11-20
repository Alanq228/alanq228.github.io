<?php
$GLOBALS['_ta_campaign_key'] = '4785267e429fc1d88125346bc1fe1f15';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=4785267e429fc1d88125346bc1fe1f15' parameter

require 'bootloader_ed4a45bd793715392bc1e871d8ba9aad.php';

$campaign_id = 'a86bo1';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="What follows is a conversation with Richard Branson, founder of the international conglomerate the Virgin Group. Stephen J. Dubner spoke with Branson in November for our special series">
    <meta name="description" content="What follows is a conversation with Richard Branson, founder of the international conglomerate the Virgin Group. Stephen J. Dubner spoke with Branson in November for our special series">
    <title>Richard Branson </title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="index.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|oswald">







    <script type="application/ld+json">
        {
        		"@context": "http://schema.org",
        		"@type": "Organization",
        		"name": "",
        		"url": "index.html",
        		"logo": "images/default-logo.png"
        }
    </script>
    <meta property="og:title" content="Richard Branson ">
    <meta property="og:type" content="website">
    <meta property="og:description" content="What follows is a conversation with Richard Branson, founder of the international conglomerate the Virgin Group. Stephen J. Dubner spoke with Branson in November for our special series">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>

<body data-home-page-name='index' class="u-body">

    <section class="u-clearfix u-image u-shading u-section-1" id="sec-e15b" data-image-width="3000" data-image-height="2000">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-right u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
                <div class="u-container-layout">
                    <h1 class="u-custom-font u-font-oswald u-text u-title u-text-1">Richard Branson&nbsp;

                        <br>
                        <br>
                    </h1>
                    <h4 class="u-text u-text-2">interview
                        <br>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-2" id="sec-d569">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" data-image-width="1600" data-image-height="900">
                            <div class="u-container-layout"></div>
                        </div>
                        <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                            <div class="u-container-layout">
                                <h2 class="u-text u-text-1">Stephen Dubner’s conversation with the Virgin Group founder</h2>
                                <p class="u-text u-text-2">
                                    <br>What follows is a conversation with Richard Branson, founder of the international conglomerate the Virgin Group. Stephen J. Dubner spoke with Branson in November for our special series
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-3" id="carousel_bb6b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-1">
                            <div class="u-container-layout u-valign-middle">
                                <p class="u-text u-text-1">
                                    <b>Stephen DUBNER: Hello this is Stephen Dubner. Is that Richard Branson?</b>
                                    <br>
                                    <i>Richard BRANSON: I am. I’m Richard Branson. Yeah. Nice to talk to you
                      <br>
                    </i>
                                    <br>
                                    <b>DUBNER: It’s nice to talk to you, too. Thank you so much for making the time. How’s things?</b>
                                    <br>
                                    <i>BRANSON: Everything’s very good, thank you. I’m sitting here with a cup of tea in my hand and I wish we were talking in person. But anyway, nice to talk to you.</i>
                                </p>
                            </div>
                        </div>
                        <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" data-image-width="1200" data-image-height="881">
                            <div class="u-container-layout"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-palette-4-dark-3 u-section-4" id="sec-1bf7">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-48 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <p class="u-text u-text-1">
                                    <b>DUBNER: All right, so let’s begin. If you would just literally say your name and what you do.</b>
                                    <br>
                                    <i>BRANSON: Yeah. My name is Richard Branson and what do I do? I do everything Virgin.</i>
                                    <br>
                                    <br>
                                    <b>DUBNER: Now, I’m sure most of our listeners are quite familiar with you, but just pretend there’s someone out there who lives in a cave who’s never heard of Richard Branson. How would you describe yourself to them — at least your professional self?</b>
                                    <br>
                                    <i>BRANSON: Well, I am an entrepreneur, I suppose you would also categorize me as an adventurer, and, hopefully, a philanthropist. So those are sort of my three main areas of occupation these days</i>.
                                </p>
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-12 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-image u-section-5" id="sec-ad76" data-image-width="1000" data-image-height="600">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-6" id="sec-ce89">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width-xs u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-col">
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                                    <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs">
                                        <div alt="" class="u-align-left u-image u-image-circle u-image-1" data-image-width="1600" data-image-height="960"></div>
                                    </div>
                                </div>
                                <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-right-cell u-size-40 u-layout-cell-2">
                                    <div class="u-container-layout u-container-layout-2">
                                        <p class="u-text u-text-1">
                                            <b>DUBNER: A tangential and very small question but one that I am curious to know. The Virgin logo is one of the most recognizable in the world, and I would argue one of the most elegant, as well. I’ve read a little bit about its history — I know it came from Virgin Records, and Roger Dean was the original designer, and then it morphed over the years. But can you just talk for a moment about the logo itself, and what it means to you, I guess?</b>
                                            <br>
                                            <br>
                                            <i>BRANSON: Yes. I mean, I was 16 when I started off in business. So I was a virgin at business. And we were either going to call the company Slipped Disc records or Virgin Records. And fortunately we went Virgin, because Slipped Disc Airlines would not have been a great success, I think. And we started with a fairly, sort of hippie-based looking logo by Roger Dean. And then when we signed the Sex Pistols, we felt the logo was not going to be appropriate. And so we got somebody into the office, and we talked at great lengths about what we wanted. And I stood up to go to the loo, and I walked past him and he just scribbled on a napkin the Virgin logo. He just signed the word “Virgin,” and I said, “You don’t have to do anything more. We have our logo.” And it became the iconic logo of the last 50 years.</i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-30">
                            <div class="u-layout-row">
                                <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-40 u-layout-cell-3">
                                    <div class="u-container-layout u-container-layout-3">
                                        <p class="u-text u-text-2">
                                            <b>DUBNER: Was it in red originally?</b>
                                            <br>
                                            <br>
                                            <i>BRANSON: I think the original scribble — I can’t remember whether he scribbled it in — with a red biro or a black biro. But anyway, it became red from day one. And we were fortunate to get that bold, bold, bold, color and the bold logo. Just very simple. I mean, it can be used tiny. It can be used large. You know, we’re just building three enormous cruise ships. And I’ve just seen the logo on the side. And it works, really, whatever size.</i>
                                        </p>
                                    </div>
                                </div>
                                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-4">
                                    <div class="u-container-layout">
                                        <div alt="" class="u-align-left u-image u-image-circle u-image-2" data-image-width="1144" data-image-height="1600"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-7" id="sec-b4e1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-spacing-top u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-grey-5 u-layout-cell u-left-cell u-size-27 u-layout-cell-1" src="">
                        <div class="u-container-layout u-container-layout-1">
                            <p class="u-text u-text-1">
                                <b>DUBNER: You know, obviously it’s not your last name. It doesn’t say&nbsp;Branson. But Virgin has come to mean almost Branson. I’m just curious, what is it — what does it feel like for you to see that logo on all these different things, whether small or you know, cruise ship size?</b>
                                <br>
                                <br>
                                <i>BRANSON: Well, I still pinch myself. I mean, I still get enormous satisfaction if somebody comes up to me and, say, they’ve just flown on a Virgin Atlantic or a Virgin America plane, and had a wonderful experience, or you know, worked out in about a Virgin Active club or being on a Virgin train, or booked a ticket on Virgin Galactic. And you know, I must admit, I sometimes think I’m going to wake up one day and just realize I’ve just had the most incredible dream. And I’ll be — you know, well, hopefully back as a poor student again one day. And starting all over again. But, yes, I’ve been very fortunate. I’ve had a extraordinary life. Just finished publishing my second autobiography, so that’s — I suppose — says it’s been pretty full. And yeah, it’s been an incredible ride, so yes. But — I appreciate every minute of it.</i>
                            </p>
                        </div>
                    </div>
                    <div class="u-container-style u-image u-layout-cell u-right-cell u-size-33 u-image-1" src="" data-image-width="1200" data-image-height="799">
                        <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="top-margin-for-add-section-widget-small u-clearfix u-footer u-grey-80" id="sec-4f80">
        <div class="u-clearfix u-sheet u-sheet-1">
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="SM">
                <div class="menu-collapse">
                    <a class="u-button-style u-nav-link" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled">
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link" href="index.html">Home </a>
                        </li>
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link" href="Policy.html">Privacy Policy   </a>
                        </li>
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link" href="Terms.html">Terms</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="u-button-style u-nav-link" href="Cookie.html">Cookie Policy   </a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="index.html">Home </a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="Policy.html">Privacy Policy   </a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="Terms.html">Terms</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link" href="Cookie.html">Cookie Policy   </a>
                            </li>
                        </ul>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <p class="u-text u-text-1">© Copyright 2019- All Rights Reserved</p>
        </div>
    </footer>

</body>

</html>