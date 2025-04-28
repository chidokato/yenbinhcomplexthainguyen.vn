<!------------------- NAVIGATOR ------------------->
<header class="navhome" id="header">
    <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Ninth navbar example">
        <div class="container new-menu">
            <a class="navbar-brand" href="{{asset('')}}"><img src="data/images/{{$setting->img}}" alt="" class="mw-100"></a>
            
            <div class="navbar-collapse flex-grow-1" id="navbarsExample07XL">
                <ul class="collapse navbar-nav mb-lg-0">
                    @foreach($menu as $key => $val)
                        <li class="nav-item">
                            <a class="nav-link" href="{{$val->slug}}">{{$val->name}}</a>
                        </li>
                    @endforeach
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
                        <li><a href="{{$val->slug}}">{{$val->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </nav>
</header>
<!------------------- END NAVIGATOR ------------------->