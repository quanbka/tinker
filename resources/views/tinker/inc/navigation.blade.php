<?php
    \Debugbar::info($menu);
?>
<nav class="navigation-wrapper">
    <ul class="main-menu">
        <li class="main-menu-item is-mobile gotohome-item">
            <a href="/">
                <picture>
                    <source media="(min-width: 320px)" srcset="/themes/tinker/images/logo.svg">
                    <source src="/themes/tinker/images/blank.gif">
                    <img src="/themes/tinker/images/blank.gif" alt="Electic - Thiết bị điện tử, điện lạnh">
                </picture>
            </a>
        </li>
        @foreach ($menu as $submenu)
            <li class="main-menu-item">
                <a class="menu-item-link" href="#">
                    <div class="menu-icon">
                        <i class="hg-menu-fridge"></i>
                    </div>
                    <div class="menu-text">{{ $submenu->title }}</div>
                </a>

                <div class="main-submenu-wrapper">
                    @if (!empty($submenu->children))
                        @foreach ($submenu->children as $subsubmenu)
                            <aside>
                                <div class="submenu-item-box">
                                    <div class="menuitem-title">{{ $subsubmenu->title }}<a href="/{{ $subsubmenu->slug }}">Tất cả</a></div>
                                    @if (!empty($subsubmenu->children))
                                        @foreach ($subsubmenu->children as $item)
                                            <a href="/{{ $item->slug }}">{{ $item->title }}</a>
                                        @endforeach
                                    @endif
                                </div>
                            </aside>
                        @endforeach
                    @endif
                </div>
            </li>
        @endforeach 
    </ul>
</nav>
