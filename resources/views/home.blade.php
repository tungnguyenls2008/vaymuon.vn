@extends('layouts.master')
@section('content')
    <div class="banner-top">
        <div class="container">
            <div class="row">
                <div class="banner-text col-md-12 text-center">
                            <span style="color: white; font-weight: bolder; font-size: 18px">
                               Dịch vụ đổi mới sáng tạo do người Việt Nam phát triển, đang trong quá trình thí điểm chờ gia nhập cơ chế thử nghiệm có kiểm soát (Sandbox) cho hoạt động công nghệ tài chính (Fintech) trong lĩnh vực ngân hàng. <br>Đã nộp hồ sơ lên Văn phòng Chính phủ và Ngân hàng Nhà nước từ đầu năm 2019.
                            </span>
                    <br><br><br>
                    <h2>Vay tiền nhanh trong 30p chỉ với 3 lần chạm</h2>
                    <h3>Vay nhanh từ 1 - 10Tr</h3>
                    <a href="#ins-app">Muốn vay tiền</a><a href="#ins-app">Muốn đầu tư</a><a
                        href="thanh_toan_khoan_vay">Muốn thanh toán</a>

                    <!--                            <h3 style="margin-top: 25px; margin-bottom: 20px">Hoặc</h3>-->
                    <!--                           <a href="https://vaynhanh.vaymuon.vn/" target="_blank" style="background: none; width: 0px;display: contents;">-->
                    <!--                                   <img src="image/button-ds.png" style="width: 250px">-->
                    <!--                                </a>-->
                </div>
            </div>
        </div>
    </div>
    <div class="box-detail">

        <div class="box-tite text-center">
            <h1>Mô hình hoạt động</h1>
        </div>
        <div class="box-content text-center">
            <p class="text-about">
                <b>Vay Mượn</b> không phải ngân hàng, không phải công ty tài chính<br>
                Vay mượn ứng dụng mô hình P2P LENDING, sử dụng công nghệ để kết nối nhu cầu của người vay và nhà đầu tư
                bằng cách cung cấp <br>
                cho người vay mức giá tốt nhất, nhà đầu tư lợi nhuận cao nhất.
            </p>


        </div>
    </div>
    <div class="box-detail">
        <!-- <div class="box-tite text-center">
            <h1>Mô hình hoạt động</h1>
        </div> -->
        <div class="box-content bg-f9f9f9">
            <div class="step-loan row">
                <div class="step-detail step-left">
                    <div class="st-text text-right">
                        <p>
                            Làm sao để vay tiền nhanh<br>
                            trong 30 phút không gặp mặt
                        </p>
                        <a href="#">Tìm hiểu ngay</a>
                    </div>
                    <div class="st-img">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                </div>
                <div class="step-detail step-center">
                    <div class="st-img">
                        <img src="images/step-loan.png" alt="">
                    </div>
                </div>
                <div class="step-detail step-right">
                    <div class="st-text text-left">
                        <p>
                            Đầu tư tiền như thế nào <br>
                            để có lãi suất lên đến 20% 1 năm?
                        </p>
                        <a href="#">Tìm hiểu ngay</a>
                    </div>
                    <div class="st-img">
                        <img src="images/banner2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box-detail">
        <div class="box-tite text-center">
            <h1>Câu chuyện thành công</h1>
        </div>
        <div class="box-content">
            <div class="container">
                <div class="cb-detail-all owl-carousel row owl-loaded owl-drag" id="cb-detail-slide">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                             style="transform: translate3d(-1455px, 0px, 0px); transition: all 0s ease 0s; width: 5820px;">
                            <?php
                            use App\Story;
                            $stories = Story::all();
                            ?>
                            @foreach($stories as $story)
                            <div class="owl-item" style="width: 455px; margin-right: 30px;">
                                <div class="cb-detail">
                                    <div class="cb-detail-box">
                                        <div class="cbd-img">
                                            <img src="{{asset('images/avatar/'.$story->avatar)}}" alt="">
                                        </div>
                                        <div class="cbd-text">
                                            <div class="cbd-title">
                                                @if ($story->role==1)
                                                <span class="bg-f3801b">Nhà Đầu tư</span><br>
                                                @elseif($story->role==2)
                                                    <span class="bg-10592d">Người vay</span><br>
                                                @endif
                                                <label for="">{{$story->name}}</label>
                                                <p>({{$story->career}})</p>
                                                <span class="line bg-f3801b"></span>
                                            </div>
                                            <div class="cbd-content">
                                                <p>
                                                    {{$story->story}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                    <div class="owl-nav">
                        <div class="owl-prev"></div>
                        <div class="owl-next"></div>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-detail bg-f0f4f5 p-tb-30" id="ins-app">
        <div class="step-loan row">
            <div class="step-details sd-left text-right">
                <div class="st-note">
                    <strong>Để yêu cầu vay ngay hôm nay</strong>
                    <h3>Cài ứng dụng - <u class="color-10592d">Vay Mượn</u></h3>
                    <ul>
                        <li><p><i class="fa fa-circle m-l-10 pull-right"></i> Vay nhanh trong 30p </p></li>
                        <li><p><i class="fa fa-circle m-l-10 pull-right"></i> Mức giá tốt nhất </p></li>
                        <li><p><i class="fa fa-circle m-l-10 pull-right"></i> Vay tiền online từ xa </p></li>
                        <li><p><i class="fa fa-circle m-l-10 pull-right"></i> Không gặp mặt </p></li>
                        <li><p><i class="fa fa-circle m-l-10 pull-right"></i> Không thế chấp </p></li>
                    </ul>
                    <div class="st-app">
                        <a href="https://play.google.com/store/apps/details?id=asia.nexttech.vaymuon&amp;hl=vi"
                           target="_blank"><img src="images/google-play.png" alt=""></a>
                        <a href="https://goo.gl/TNm49S" target="_blank"><img src="images/app-store.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="step-details sd-center">
                <div class="st-img">
                    <img src="images/banner3.png" alt="">
                </div>
            </div>
            <div class="step-details sd-right text-left">
                <div class="st-note">
                    <strong>Để thành nhà đầu tư ngay hôm nay</strong>
                    <h3>Cài ứng dụng - <u class="color-f3801b">Nhà Đầu Tư</u></h3>
                    <ul>
                        <li><p><i class="fa fa-circle m-r-10"></i> Lợi nhuận cao nhất</p></li>
                        <li><p><i class="fa fa-circle m-r-10"></i> An toàn khoản vay</p></li>
                        <li><p><i class="fa fa-circle m-r-10"></i> Thu hồi đúng hạn</p></li>
                        <li><p><i class="fa fa-circle m-r-10"></i> Quản lý dễ dàng</p></li>
                        <li><p><i class="fa fa-circle m-r-10"></i> Tận dụng khoản tiền nhỏ</p></li>
                    </ul>
                    <div class="st-app">
                        <a href="https://play.google.com/store/apps/details?id=lenderandroid.nexttech.asia.lenderandroid"
                           target="_blank"><img src="images/google-play.png" alt=""></a>
                        <a href="https://itunes.apple.com/vn/app/vaymuon-nh%C3%A0-%C4%91%E1%BA%A7u-t%C6%B0/id1241145303?mt=8"
                           target="_blank"><img src="images/app-store.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="bao_chi">
        <h4 class="text-center">Báo chí nói gì về Vay Mượn</h4>
        <div class="container">
            <div class="row">
                <div id="demos">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag">


                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-1633px, 0px, 0px); transition: all 0s ease 0s; width: 3267px;">
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://baocongthuong.com.vn/vay-tieu-dung-tin-chap-khong-can-co-mat.html"
                                           target="_blank">
                                            <img src="images/baochi/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://www.vnmedia.vn/kinh-te/201712/san-giao-dich-vay-muon-tai-chinh-khong-gap-mat-dau-tien-o-viet-nam-588223/"
                                           target="_blank">
                                            <img src="images/baochi/4.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://mobile.thesaigontimes.vn/tinbaichitiet/265919/" target="_blank">
                                            <img src="images/baochi/5.gif" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://vccinews.vn/news/19100/ra-mat-san-giao-dich-vay-tieu-dung-tin-chap-khong-gap-mat-dau-tien-tai-viet-nam.html"
                                           target="_blank">
                                            <img src="images/baochi/6.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="https://vtv.vn/tam-long-viet/nguoi-viet-tre-chuong-trinh-hien-mau-tinh-nguyen-trong-hanh-trinh-do-2018-20181001110046541.htm"
                                           target="_blank">
                                            <img src="images/baochi/img4.jpg" alt=""
                                                 style="height: 100%;width:100%;padding-top:0;margin-left: 0;border-radius: 4px">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item" style="background-color: #003865">
                                        <a href="https://vietnambiz.vn/giam-doc-vay-muon-chung-toi-la-canh-tay-noi-dai-cua-ngan-hang-111577.html?fbclid=IwAR1-IGLd2hremj9ZqwtnKcYj6JkxlOgWyvmmWCaVQPFXYBgN1ucHW9UbJfg"
                                           target="_blank">
                                            <img src="images/baochi/vietmanbiz.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://vtv.vn/cong-nghe/da-co-mo-hinh-nhu-uber-trong-linh-vuc-tai-chinh-ca-nhan-20171205122252392.htm"
                                           target="_blank">
                                            <img src="images/baochi/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://infomoney.vn/ra-mat-san-giao-dich-vay-tieu-dung-tin-chap-khong-can-gap-mat-d73758.html"
                                           target="_blank">
                                            <img src="images/baochi/2.1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://baocongthuong.com.vn/vay-tieu-dung-tin-chap-khong-can-co-mat.html"
                                           target="_blank">
                                            <img src="images/baochi/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://www.vnmedia.vn/kinh-te/201712/san-giao-dich-vay-muon-tai-chinh-khong-gap-mat-dau-tien-o-viet-nam-588223/"
                                           target="_blank">
                                            <img src="images/baochi/4.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://mobile.thesaigontimes.vn/tinbaichitiet/265919/" target="_blank">
                                            <img src="images/baochi/5.gif" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://vccinews.vn/news/19100/ra-mat-san-giao-dich-vay-tieu-dung-tin-chap-khong-gap-mat-dau-tien-tai-viet-nam.html"
                                           target="_blank">
                                            <img src="images/baochi/6.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="https://vtv.vn/tam-long-viet/nguoi-viet-tre-chuong-trinh-hien-mau-tinh-nguyen-trong-hanh-trinh-do-2018-20181001110046541.htm"
                                           target="_blank">
                                            <img src="images/baochi/img4.jpg" alt=""
                                                 style="height: 100%;width:100%;padding-top:0;margin-left: 0;border-radius: 4px">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item" style="background-color: #003865">
                                        <a href="https://vietnambiz.vn/giam-doc-vay-muon-chung-toi-la-canh-tay-noi-dai-cua-ngan-hang-111577.html?fbclid=IwAR1-IGLd2hremj9ZqwtnKcYj6JkxlOgWyvmmWCaVQPFXYBgN1ucHW9UbJfg"
                                           target="_blank">
                                            <img src="images/baochi/vietmanbiz.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://vtv.vn/cong-nghe/da-co-mo-hinh-nhu-uber-trong-linh-vuc-tai-chinh-ca-nhan-20171205122252392.htm"
                                           target="_blank">
                                            <img src="images/baochi/1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://infomoney.vn/ra-mat-san-giao-dich-vay-tieu-dung-tin-chap-khong-can-gap-mat-d73758.html"
                                           target="_blank">
                                            <img src="images/baochi/2.1.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://baocongthuong.com.vn/vay-tieu-dung-tin-chap-khong-can-co-mat.html"
                                           target="_blank">
                                            <img src="images/baochi/3.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://www.vnmedia.vn/kinh-te/201712/san-giao-dich-vay-muon-tai-chinh-khong-gap-mat-dau-tien-o-viet-nam-588223/"
                                           target="_blank">
                                            <img src="images/baochi/4.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://mobile.thesaigontimes.vn/tinbaichitiet/265919/" target="_blank">
                                            <img src="images/baochi/5.gif" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 153.333px; margin-right: 10px;">
                                    <div class="item">
                                        <a href="http://vccinews.vn/news/19100/ra-mat-san-giao-dich-vay-tieu-dung-tin-chap-khong-gap-mat-dau-tien-tai-viet-nam.html"
                                           target="_blank">
                                            <img src="images/baochi/6.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <div class="owl-prev">prev</div>
                            <div class="owl-next">next</div>
                        </div>
                        <div class="owl-dots">
                            <div class="owl-dot active"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
