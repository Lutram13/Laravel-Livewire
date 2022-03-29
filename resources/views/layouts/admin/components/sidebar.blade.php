
<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            {{-- <i class="lni lni-laravel"></i>
            <img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon"> --}}
            <img src="assets/images/livewire.png" class="logo-icon" alt="logo icon">

        </div>
        <div>
            <h4 class="logo-text">Livewire</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <ion-icon name="menu-sharp"></ion-icon>
        </div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">
        
        {{-- Start Dashboard --}}

        <li> 
            <a href="{{ route('index') }}">
                <div class="parent-icon">
                    <i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        {{-- Start Multiple Menu --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="lni lni-book"></i>
                </div>
                <div class="menu-title">Simple Aplication</div>
            </a>
            <ul>
                <li> <a href="{{ route('quickStart') }}">
                        <i class="lni lni-book"></i>Quick Start Tutorial
                    </a>
                </li>
                <li> <a href="{{ route('hello') }}">
                        <i class="lni lni-book"></i>Hello World
                    </a>
                </li>
                <li> <a href="{{ route('hellos') }}">
                        <i class="lni lni-book"></i>Hello Everybody
                    </a>
                </li>
            </ul>
        </li>
        {{-- End Multiple Menu --}}

        {{-- Start Multiple Menu --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="lni lni-book"></i>
                </div>
                <div class="menu-title">Basic Aplication</div>
            </a>
            <ul>
                <li> <a href="{{ route('student') }}">
                        <i class="lni lni-book"></i>CR Students
                    </a>
                </li>
                <li> <a href="{{ route('customer') }}">
                        <i class="lni lni-book"></i>CRUD Customers
                    </a>
                </li>
                
            </ul>
        </li>
        {{-- End Multiple Menu --}}













        {{-- Label --}}
        <li class="menu-label">Ini Label</li>

        {{-- Start Single Menu --}}
        <li>
            <a href="pages-user-profile.html">
                <div class="parent-icon">
                    <i class="bi bi-person"></i>
                </div>
                <div class="menu-title">Ini Single Menu</div>
            </a>
        </li>
        {{-- End Single Menu --}}

        {{-- Start Multiple Menu --}}
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="bi bi-handbag"></i>
                </div>
                <div class="menu-title">Ini Multiple Menu</div>
            </a>
            <ul>
                <li> <a href="javascript:;">
                        <i class="bi bi-circle"></i>Sub-Menu 1
                    </a>
                </li>
                <li> <a href="javascript:;">
                        <i class="bi bi-circle"></i>Sub-Menu 2
                    </a>
                </li>
            </ul>
        </li>
        {{-- End Multiple Menu --}}

        {{-- Start Level Menu --}}
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon">
                    <i class="bi bi-list-ul"></i>
                </div>
                <div class="menu-title">Menu Levels</div>
            </a>
            <ul>
                <li> <a class="has-arrow" href="javascript:;">
                        <i class="bi bi-circle"></i>Level One
                    </a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;">
                                <i class="bi bi-circle"></i>Level Two
                            </a>
                            <ul>
                                <li> <a href="javascript:;">
                                        <i class="bi bi-circle"></i>Level Three
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        {{-- End Level Menu --}}



    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
