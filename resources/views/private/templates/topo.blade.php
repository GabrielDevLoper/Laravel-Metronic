<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

    <!-- begin:: Header Menu -->
    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
            class="la la-close"></i></button>
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

        <div id="kt_header_menu"
             class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here kt-menu__item--active"
                    data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                               class="kt-menu__link kt-menu__toggle"><span
                            class="kt-menu__link-text">Inicio</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>

                </li>
                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                    data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                               class="kt-menu__link kt-menu__toggle"><span
                            class="kt-menu__link-text">Acesso ao site da CGJ</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                </li>
                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                    data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                               class="kt-menu__link kt-menu__toggle"><span
                            class="kt-menu__link-text">Acesso ao Email</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end:: Header Menu -->        <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">
        <!--begin: Quick panel toggler -->
        <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip"
             title="Quick panel" data-placement="right">
	<span class="kt-header__topbar-icon" id="kt_quick_panel_toggler_btn">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                         height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
        <path
            d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
            id="Combined-Shape" fill="#000000" opacity="0.3"/>
    </g>
</svg>        	</span>
        </div>
        <!--end: Quick panel toggler -->
        <!--begin: User Bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                <div class="kt-header__topbar-user">
                    <span class="kt-header__topbar-welcome kt-hidden-mobile">Ola,</span>
                    <span class="kt-header__topbar-username kt-hidden-mobile">{{Auth::user()->nome}}</span>
                    <img class="kt-hidden" alt="Pic" src="./assets/media/users/300_25.jpg"/>
                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                            </div>
            </div>

            <div
                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                     style="background-image: url(./assets/media/misc/bg-1.jpg)">
                    <div class="kt-user-card__avatar">
                        <img class="kt-hidden" alt="Pic" src="./assets/media/users/300_25.jpg"/>
                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span
                            class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                    </div>
                    <div class="kt-user-card__name">
                        Sean Stone
                    </div>
                    <div class="kt-user-card__badge">
                        <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                    </div>
                </div>
                <!--end: Head -->

                <!--begin: Navigation -->
                <div class="kt-notification">
                    <a href="demo1/custom/apps/user/profile-1/personal-information.html"
                       class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-calendar-3 kt-font-success"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Profile
                            </div>
                            <div class="kt-notification__item-time">
                                Account settings and more
                            </div>
                        </div>
                    </a>
                    <a href="demo1/custom/apps/user/profile-3.html" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-mail kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Messages
                            </div>
                            <div class="kt-notification__item-time">
                                Inbox and tasks
                            </div>
                        </div>
                    </a>
                    <a href="demo1/custom/apps/user/profile-2.html" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-rocket-1 kt-font-danger"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Activities
                            </div>
                            <div class="kt-notification__item-time">
                                Logs and notifications
                            </div>
                        </div>
                    </a>
                    <a href="demo1/custom/apps/user/profile-3.html" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-hourglass kt-font-brand"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                My Tasks
                            </div>
                            <div class="kt-notification__item-time">
                                latest tasks and projects
                            </div>
                        </div>
                    </a>

                    <a href="demo1/custom/apps/user/profile-1/overview.html" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <i class="flaticon2-cardiogram kt-font-warning"></i>
                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title kt-font-bold">
                                Billing
                            </div>
                            <div class="kt-notification__item-time">
                                billing & statements <span
                                    class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                            </div>
                        </div>
                    </a>
                    <div class="kt-notification__custom kt-space-between">
                        <a href="demo1/custom/user/login-v2.html" target="_blank"
                           class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

                        <a href="demo1/custom/user/login-v2.html" target="_blank"
                           class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
                    </div>
                </div>
                <!--end: Navigation -->
            </div>
        </div>
        <!--end: User Bar -->
    </div>
    <!-- end:: Header Topbar --></div>
