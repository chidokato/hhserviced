<!------------------- NAVIGATOR ------------------->
<header class="navhome header-page" id="header">
    <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Ninth navbar example">
        <div class="container new-menu">
            <a class="navbar-brand" href="{{asset('')}}"><img src="data/images/{{$setting->img}}" alt="" class="mw-100"></a>
            
            <!-- <div class="toggle-menu" data-bs-toggle="button">
                <button class="navbar-toggler ico-menu" id="navbarToggler">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div> -->

            <div class="navbar-collapse flex-grow-1" id="navbarsExample07XL">
                <ul class="collapse navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('')}}">{{__('lang.home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dat-phong">{{__('lang.menu_1')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ve-chung-thoi">{{__('lang.menu_2')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('')}}">{{__('lang.menu_3')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('')}}">{{__('lang.menu_4')}}</a>
                    </li>
                    <!-- @foreach($menu as $key => $val)
                        @if($val->parent == 0)
                            @if(count($menu->where('parent', $val->id)) == 0)
                            <li class="nav-item">
                                <a class="nav-link" href="{{$val->slug}}">{{$val->name}}</a>
                            </li>
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{$val->slug}}" data-bs-toggle="dropdown" onclick="myFunctLink(this)">{{$val->name}}</a>
                                <a class="expand dropdown-toggle d-lg-none" href="#" data-bs-toggle="dropdown"></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        @foreach($menu->where('parent', $val->id) as $sub)
                                        <li><a href="{{$sub->slug}}" class="submenu-link"><i class="icon-next me-2"></i>{{$sub->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            @endif
                            
                        @endif
                    @endforeach -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="news.htm" data-bs-toggle="dropdown" onclick="myFunctLink(this)">Tin tức</a>
                        <a class="expand dropdown-toggle d-lg-none" href="#" data-bs-toggle="dropdown"></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#" class="submenu-link"><i class="icon-next me-2"></i>Tin phong thủy</a></li>
                                <li><a href="#" class="submenu-link"><i class="icon-next me-2"></i>Thẩm định giá</a></li>
                                <li><a href="#" class="submenu-link"><i class="icon-next me-2"></i>Dịch vụ công chứng</a></li>
                                <li><a href="#" class="submenu-link"><i class="icon-next me-2"></i>Quy hoạch đô thị</a></li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </div>

            <div class="language-selector">
                <button class="lang-btn">
                    @if($currentLocale == 'vi')
                        <img src="assets/images/vn.jpg"> VIE
                    @elseif($currentLocale == 'en')
                        <img src="assets/images/en.jpg"> ENG
                    @elseif($currentLocale == 'cn')
                        <img src="assets/images/cn.jpg"> CHN
                    @endif
                </button>
                <ul class="lang-dropdown">
                    <li data-lang="en"><a href="lang/en"><img src="assets/images/en.jpg"> ENG</a></li>
                    <li data-lang="vi"><a href="lang/vi"><img src="assets/images/vn.jpg"> VIE</a></li>
                    <li data-lang="cn"><a href="lang/cn"><img src="assets/images/cn.jpg"> CHN</a></li>
                </ul>
            </div>

            <div class="toggle-menu" data-bs-toggle="button">
                <button class="navbar-toggler ico-menu" id="navbarToggler">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>

            <div class="menu-left">
                <div class="close"><button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"></button></div>
                <div class="menu-iteam">
                    <ul>
                        @foreach($menu as $key => $val)
                        <li><a href="">{{$val->name}}</a></li>
                        @endforeach
                        <li><a href="">Đăng ký/đăng nhập</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
</header>
<!------------------- END NAVIGATOR ------------------->