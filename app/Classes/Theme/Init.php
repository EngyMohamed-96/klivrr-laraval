<?php
namespace App\Classes\Theme;

use App\Classes\Theme\Mimocodes;

class Init
{
    public static function run()
    {
        self::initPageLoader();
        self::initLayout();
        self::initHeader();
        self::initSubheader();
        self::initContent();
        self::initAside();
        self::initFooter();
    }

    private static function initLayout()
    {
        Mimocodes::addAttr('body', 'id', 'kt_body');

        // Offcanvas directions
        Mimocodes::addClass('body', 'quick-panel-right');
        Mimocodes::addClass('body', 'demo-panel-right');
        Mimocodes::addClass('body', 'offcanvas-right');
    }

    private static function initPageLoader()
    {
        if (!empty(config('layout.page-loader.type'))) {
            Mimocodes::addClass('body', 'page-loading-enabled');
            Mimocodes::addClass('body', 'page-loading');
        }
    }

    private static function initHeader()
    {
        if (config('layout.header.self.fixed.desktop')) {
            Mimocodes::addClass('body', 'header-fixed');
            Mimocodes::addClass('header', 'header-fixed');
        } else {
            Mimocodes::addClass('body', 'header-static');
        }

        if (config('layout.header.self.fixed.mobile')) {
            Mimocodes::addClass('body', 'header-mobile-fixed');
            Mimocodes::addClass('header-mobile', 'header-mobile-fixed');
        }

        // Menu
        if (config('layout.header.menu.self.display')) {
            Mimocodes::addClass('header_menu', 'header-menu-layout-' . config('layout.header.menu.self.layout'));

            if (config('layout.header.menu.self.root-arrow')) {
                Mimocodes::addClass('header_menu', 'header-menu-root-arrow');
            }
        }

        if (config('layout.header.self.width') === 'fluid') {
            Mimocodes::addClass('header-container', 'container-fluid');
        } else {
            Mimocodes::addClass('header-container', 'container');
        }
    }

    private static function initSubheader()
    {
        if (config('layout.subheader.display')) {
            Mimocodes::addClass('body', 'subheader-enabled');
        } else {
            return;
        }

        $subheader_style = config('layout.subheader.style');
        $subheader_fixed = config('layout.subheader.fixed');

        // Fixed content head
        if (config('layout.subheader.fixed') && config('layout.header.self.fixed.desktop')) {
            Mimocodes::addClass('body', 'subheader-fixed');
            $subheader_style = 'solid';
        } else {
            $subheader_fixed = false;
        }

        if ($subheader_style) {
            Mimocodes::addClass('subheader', 'subheader-'.$subheader_style);
        }

        if (config('layout.subheader.width') == 'fluid') {
            Mimocodes::addClass('subheader-container', 'container-fluid');
        } else {
            Mimocodes::addClass('subheader-container', 'container');
        }

        if (config('layout.subheader.clear')) {
            Mimocodes::addClass('subheader', 'subheader-clear');
        }
    }

    private static function initContent()
    {
        if (config('layout.content.fit-top')) {
            Mimocodes::addClass('content', 'pt-0');
        }

        if (config('layout.content.fit-bottom')) {
            Mimocodes::addClass('content', 'pt-0');
        }

        if (config('layout.content.width') == 'fluid') {
            Mimocodes::addClass('content-container', 'container-fluid');
        } else {
            Mimocodes::addClass('content-container', 'container');
        }
    }

    private static function initAside()
    {
        if (config('layout.aside.self.display') != true) {
            return;
        }

        // Enable Aside
        Mimocodes::addClass('body', 'aside-enabled');

        if (config('layout.aside.self.minimize.hoverable')){
            Mimocodes::addClass('body', 'aside-minimize-hoverable');
        }

        // Fixed Aside
        if (config('layout.aside.self.fixed')) {
            Mimocodes::addClass('body', 'aside-fixed');
            Mimocodes::addClass('aside', 'aside-fixed');
        } else {
            Mimocodes::addClass('body', 'aside-static');
        }

        // Check Aside
        if (config('layout.aside.self.display') != true) {
            return;
        }

        // Default fixed
        if (config('layout.aside.self.minimize.default')) {
            Mimocodes::addClass('body', 'aside-minimize');
        }

        // Menu
        // Dropdown Submenu
        if (config('layout.aside.menu.dropdown') == true) {
            Mimocodes::addClass('aside_menu', 'aside-menu-dropdown');
            Mimocodes::addAttr('aside_menu', 'data-menu-dropdown', '1');
        }

        // Scrollable Menu
        if (config('layout.aside.menu.dropdown') != true) {
            Mimocodes::addAttr('aside_menu', 'data-menu-scroll', "1");
        } else {
            Mimocodes::addAttr('aside_menu', 'data-menu-scroll', "0");
        }

        if (config('layout.aside.menu.submenu.dropdown.hover-timeout')) {
            Mimocodes::addAttr('aside_menu', 'data-menu-dropdown-timeout', config('layout.aside.menu.submenu.dropdown.hover-timeout'));
        }
    }

    private static function initFooter()
    {
        // Fixed header
        if (config('layout.footer.fixed') == true) {
            Mimocodes::addClass('body', 'footer-fixed');
        }

        if (config('layout.footer.width') == 'fluid') {
            Mimocodes::addClass('footer-container', 'container-fluid');
        } else {
            Mimocodes::addClass('footer-container', 'container');
        }
    }

}
