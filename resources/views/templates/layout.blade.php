<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Admin</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->

    <link rel="stylesheet" href="{{ asset('assets/css/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">
    {{-- <link rel="stylesheet" href="../../../../public/assets/css/vendor.min.css">
    <link rel="stylesheet" href="../../../../public/assets/vendor/icon-set/style.css"> --}}



    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css?v=1.0') }}">
    {{-- <link rel="stylesheet" href="../../../../public/assets/css/theme.min.css?v=1.0"> --}}
</head>

<body class="footer-offset footer-offset has-navbar-vertical-aside navbar-vertical-aside-show-xl">
    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered default navbar-vertical-aside-initialized">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <div class="navbar-brand-wrapper justify-content-between">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html" aria-label="Front">
                        <img class="navbar-brand-logo" src="assets\svg\logos\logo.svg" alt="Logo">
                    </a>
                    <!-- End Logo -->
                    <!-- Navbar Vertical Toggle -->
                    <button type="button"
                        class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                    </button>
                    <!-- End Navbar Vertical Toggle -->
                </div>

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        <!-- Dashboards -->
                        <li class="navbar-vertical-aside-has-menu ">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;"
                                title="Dashboards">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                <li class="nav-item">
                                    <a class="nav-link " href="index.html" title="Default">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Month</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="dashboard-alternative.html" title="Alternative">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Year</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Dashboards -->

                        <li class="nav-item">
                            <small class="nav-subtitle" title="Pages">Pages</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <!-- Apps -->
                        <li class="navbar-vertical-aside-has-menu ">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;"
                                title="Apps">
                                <i class="tio-apps nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Course
                                </span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                <li class="nav-item">
                                    <a class="nav-link " href="/add_course" title="Kanban">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Course</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="apps-calendar.html" title="Calendar">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Categories</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="/list_instructor" title="Invoice Generator">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">Instructors</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Apps -->

                        <!-- Authentication -->
                        <li class="navbar-vertical-aside-has-menu ">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;"
                                title="Authentication">
                                <i class="tio-lock-outlined nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Account</span>
                            </a>

                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                <li class="navbar-vertical-aside-has-menu ">
                                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle"
                                        href="/list_users">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">List Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Authentication -->

                        <li class="nav-item">
                            <div class="nav-divider"></div>
                        </li>

                        <li class="nav-item">
                            <small class="nav-subtitle" title="Documentation">Documentation</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="nav-item ">
                            <a class="js-nav-tooltip-link nav-link" href="documentation\index.html" title=""
                                data-placement="left" data-original-title="Documentation">
                                <i class="tio-book-opened nav-icon"></i>
                                <span
                                    class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </aside>

    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            @yield('content')
        </div>
        <!-- End Content -->

        <!-- Footer -->

        <div class="footer">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <p class="font-size-sm mb-0">© Front. <span class="d-none d-sm-inline-block">2020
                            Htmlstream.</span>
                    </p>
                </div>
                <div class="col-auto">
                    <div class="d-flex justify-content-end">
                        <!-- List Dot -->
                        <ul class="list-inline list-separator">
                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">FAQ</a>
                            </li>

                            <li class="list-inline-item">
                                <a class="list-separator-link" href="#">License</a>
                            </li>

                            <li class="list-inline-item">
                                <!-- Keyboard Shortcuts Toggle -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                        href="javascript:;"
                                        data-hs-unfold-options="{
                                &quot;target&quot;: &quot;#keyboardShortcutsSidebar&quot;,
                                &quot;type&quot;: &quot;css-animation&quot;,
                                &quot;animationIn&quot;: &quot;fadeInRight&quot;,
                                &quot;animationOut&quot;: &quot;fadeOutRight&quot;,
                                &quot;hasOverlay&quot;: true,
                                &quot;smartPositionOff&quot;: true
                               }"
                                        data-hs-unfold-target="#keyboardShortcutsSidebar" data-hs-unfold-invoker="">
                                        <i class="tio-command-key"></i>
                                    </a>
                                </div>
                                <!-- End Keyboard Shortcuts Toggle -->
                            </li>
                        </ul>
                        <!-- End List Dot -->
                    </div>
                </div>
            </div>
        </div>



        <!-- End Footer -->
    </main>
    <!-- JS Implementing Plugins -->

    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    {{-- <script src="../../../../public/assets/js/vendor.min.js"></script> --}}
    <!-- JS Front -->

    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    {{-- <script src="../../../../public//assets/js/theme.min.js"></script> --}}
    {{-- <script>
        $(document).on('ready', function() {
            // ONLY DEV
            // =======================================================

            if (window.localStorage.getItem('hs-builder-popover') === null) {
                $('#builderPopover').popover('show')
                    .on('shown.bs.popover', function() {
                        $('.popover').last().addClass('popover-dark')
                    });

                $(document).on('click', '#closeBuilderPopover', function() {
                    window.localStorage.setItem('hs-builder-popover', true);
                    $('#builderPopover').popover('dispose');
                });
            } else {
                $('#builderPopover').on('show.bs.popover', function() {
                    return false
                });
            }

            // END ONLY DEV
            // =======================================================


            // BUILDER TOGGLE INVOKER
            // =======================================================
            $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
                $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
            });


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();



            // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
            // =======================================================
            var sidebar = $('.js-navbar-vertical-aside');
            sidebar.hsSideNav({
                mobileOverlayClass: 'd-print-none'
            });

            $('.js-navbar-vertical-aside').addClass('d-print-none');


            // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
            // =======================================================
            $('.js-nav-tooltip-link').tooltip({
                boundary: 'window'
            })

            $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
                if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                    return false;
                }
            });


            // INITIALIZATION OF UNFOLD
            // =======================================================
            $('.js-hs-unfold-invoker').each(function() {
                var unfold = new HSUnfold($(this)).init();
            });


            // INITIALIZATION OF FORM SEARCH
            // =======================================================
            $('.js-form-search').each(function() {
                new HSFormSearch($(this)).init()
            });
        });
    </script> --}}
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>

    <script>
        $(document).on('ready', function() {
            // ONLY DEV
            // =======================================================

            if (window.localStorage.getItem('hs-builder-popover') === null) {
                $('#builderPopover').popover('show')
                    .on('shown.bs.popover', function() {
                        $('.popover').last().addClass('popover-dark')
                    });

                $(document).on('click', '#closeBuilderPopover', function() {
                    window.localStorage.setItem('hs-builder-popover', true);
                    $('#builderPopover').popover('dispose');
                });
            } else {
                $('#builderPopover').on('show.bs.popover', function() {
                    return false
                });
            }

            // END ONLY DEV
            // =======================================================


            // BUILDER TOGGLE INVOKER
            // =======================================================
            $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
                $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
            });


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();



            // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
            // =======================================================
            var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


            // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
            // =======================================================
            $('.js-nav-tooltip-link').tooltip({
                boundary: 'window'
            })

            $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
                if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                    return false;
                }
            });


            // INITIALIZATION OF UNFOLD
            // =======================================================
            $('.js-hs-unfold-invoker').each(function() {
                var unfold = new HSUnfold($(this)).init();
            });


            // INITIALIZATION OF FORM SEARCH
            // =======================================================
            $('.js-form-search').each(function() {
                new HSFormSearch($(this)).init()
            });


            // INITIALIZATION OF FILE ATTACH
            // =======================================================
            $('.js-file-attach').each(function() {
                var customFile = new HSFileAttach($(this)).init();
            });


            // INITIALIZATION OF STEP FORM
            // =======================================================
            $('.js-step-form').each(function() {
                var stepForm = new HSStepForm($(this), {
                    finish: function() {
                        $("#addUserStepFormProgress").hide();
                        $("#addUserStepFormContent").hide();
                        $("#successMessageContent").show();
                    }
                }).init();
            });


            // INITIALIZATION OF MASKED INPUT
            // =======================================================
            $('.js-masked-input').each(function() {
                var mask = $.HSCore.components.HSMask.init($(this));
            });


            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-select2-custom').each(function() {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });


            // INITIALIZATION OF ADD INPUT FILED
            // =======================================================
            $('.js-add-field').each(function() {
                new HSAddField($(this), {
                    addedField: function() {
                        $('.js-add-field .js-select2-custom-dynamic').each(function() {
                            var select2dynamic = $.HSCore.components.HSSelect2.init($(
                                this));
                        });
                    }
                }).init();
            });
        });
    </script>
</body>
