<header>

    <div class="header-all">
        <div class="container">
            <div class="row">
                <div class="header-logo pull-left">
                    <!--                    <a href="https://vaymuon.vn/"><img src="images/logo_fastlend.png" alt=""></a>-->
                    <a href="{{route('home')}}"><img src={{asset("images/image.png")}} alt=""></a>
                </div>
                <div class="header-navs pull-right">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                                    <span class="sr-only"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse menu-top" id="menu">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{route('lender')}}">Người vay</a></li>
                                    <li><a href="{{route('investor')}}">Nhà đầu tư</a></li>
                                    <li><a href="{{route('payments')}}">Thanh toán khoản vay</a></li>
                                    <li><a href="{{route('promotion')}}">Khuyến Mãi</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


</header>
