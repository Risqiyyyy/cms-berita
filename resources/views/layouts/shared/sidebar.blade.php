<div class="app-menu">

    <!-- Sidenav Brand Logo -->
    <a href="{{ route('any', 'index') }}" class="logo-box">
        <!-- Light Brand Logo -->
        <div class="logo-light">
            <img src="{{ asset('/images/Logo-FTNews-New-dark3.png')}}" class="logo-lg h-6" alt="Light logo">
            <img src="{{ asset('/images/icon-ftnews.png')}}" class="logo-sm" alt="Small logo">
        </div>

        <!-- Dark Brand Logo -->
        <div class="logo-dark">
            <img src="{{ asset('/images/Logo-FTNews-New-dark3.png')}}" class="logo-lg h-6" alt="Dark logo">
            <img src="{{ asset('/images/icon-ftnews.png')}}" class="logo-sm" alt="Small logo">
        </div>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
        <span class="sr-only">Menu Toggle Button</span>
        <i class="mgc_round_line text-xl"></i>
    </button>

    <!--- Menu -->
    <div class="srcollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Menu</li>

            <li class="menu-item">
                <a href="{{ route('any', 'home') }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <a href="{{ route('second', ['apps', 'categori']) }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_list_check_3_line"></i></span>
                    <span class="menu-text"> Category </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{ route('second', ['apps', 'tags']) }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_hashtag_line"></i></span>
                    <span class="menu-text"> Tags </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_rocket_line"></i></span>
                    <span class="menu-text"> Post </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'create']) }}" class="menu-link">
                            <span class="menu-text">Add Post</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'list']) }}" class="menu-link">
                            <span class="menu-text">List Post</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['project', 'detail']) }}" class="menu-link">
                            <span class="menu-text">Detail Post</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon"><i class="mgc_user_3_line"></i></span>
                    <span class="menu-text"> Member </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="{{ route('second', ['member', 'author']) }}" class="menu-link">
                            <span class="menu-text">Author</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('second', ['member', 'admin']) }}" class="menu-link">
                            <span class="menu-text">Admin</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Setting</li>

            <li class="menu-item">
                <a href="{{ route('second', ['setting', 'media']) }}" class="menu-link">
                    <span class="menu-icon"><i class="mgc_camera_line"></i></span>
                    <span class="menu-text"> Media </span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- Sidenav Menu End  -->
