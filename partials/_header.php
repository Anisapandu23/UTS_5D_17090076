<div class="app-header header-shadow">
    <div class="app-header__logo">
        <?php @require_once '_logo.php'; ?>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
            </button>
        </span>
    </div>    
    <div class="app-header__content">
    <div class="app-header-left">
        <div class="search-wrapper">
            <div class="input-holder">
                <input type="text" class="search-input" placeholder="Type to search">
                <button class="search-icon"><span></span></button>
            </div>
            <button class="close"></button>
        </div>
        <ul class="header-menu nav">
            <!-- <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                    <i class="nav-link-icon fa fa-database"> </i>
                    Statistics
                </a>
            </li>
            <li class="btn-group nav-item">
                <a href="javascript:void(0);" class="nav-link">
                    <i class="nav-link-icon fa fa-edit"></i>
                    Projects
                </a>
            </li>
            <li class="dropdown nav-item">
                <a href="javascript:void(0);" class="nav-link">
                    <i class="nav-link-icon fa fa-cog"></i>
                    Settings
                </a>
            </li> -->
        </ul>
    </div>
    <div class="app-header-right">
        <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                <img width="35" class="rounded-circle" src="assets/images/user.png" alt="">
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <a href="?travel=logout" tabindex="0" class="dropdown-item">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left  ml-3 header-user-info">
                        <div class="widget-heading">
                            <?= $_SESSION['nama']; ?>
                        </div>
                        <div class="widget-subheading">
                            VP People Manager
                        </div>
                    </div>
                    <div class="widget-content-right header-user-info ml-3">
                        <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>        <div class="ui-theme-settings">
<button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
<i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
</button>
<div class="theme-settings__inner">
    <div class="scrollbar-container">
        <div class="theme-settings__options-wrapper">
            <h3 class="themeoptions-heading">Layout Options
            </h3>
            <div class="p-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                        <div class="switch-animate switch-on">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="widget-heading">Fixed Header
                                    </div>
                                    <div class="widget-subheading">Makes the header top fixed, always visible!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                        <div class="switch-animate switch-on">
                                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="widget-heading">Fixed Sidebar
                                    </div>
                                    <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                        <div class="switch-animate switch-off">
                                            <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="widget-heading">Fixed Footer
                                    </div>
                                    <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <h3 class="themeoptions-heading">
            <div>
                Header Options
            </div>
            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
            Restore Default
            </button>
            </h3>
            <div class="p-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5 class="pb-2">Choose Color Scheme
                        </h5>
                        <div class="theme-settings-swatches">
                            <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                            </div>
                            <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                            </div>
                            <div class="divider">
                                
                                <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                </div>
                                <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                </div>
                                <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                </div>
                                <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                </div>
                                
                            </div>
                        </li>
                    </ul>
                </div>
                <h3 class="themeoptions-heading">
                <div>Sidebar Options</div>
                <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                Restore Default
                </button>
                </h3>
                <div class="p-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5 class="pb-2">Choose Color Scheme
                            </h5>
                            <div class="theme-settings-swatches">
                                <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                </div>
                                <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <h3 class="themeoptions-heading">
                <div>Main Content Options</div>
                <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                </button>
                </h3>
                <div class="p-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5 class="pb-2">Page Section Tabs
                            </h5>
                            <div class="theme-settings-swatches">
                                <div role="group" class="mt-2 btn-group">
                                    <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                    Line
                                    </button>
                                    <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                    Shadow
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>