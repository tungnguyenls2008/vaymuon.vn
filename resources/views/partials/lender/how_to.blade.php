<div id="product" class="text-center">
    <div class="container">
        <h4>Vay theo cách bạn muốn</h4>
        <div id="product_id">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">


                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(-950px, 0px, 0px); transition: all 0.25s ease 0s; width: 2850px;">
                        <?php
                        use App\LendingMethod;
                        $lendingMethods=LendingMethod::all();
                        ?>
                        @foreach($lendingMethods as $method)
                        <div class="owl-item cloned" style="width: 180px; margin-right: 10px;">
                            <div class="item">
                                <a href="vay_theo_the_sinh_vien" target="_blank">
                                    <img src="images/avatar/lender/{{$method->avatar}}" alt="">
                                </a>
                                <div class="card-body"><a href="vay_theo_the_sinh_vien" target="_blank">
                                        <h5 class="card-title">{{$method->name}}</h5>
                                        <p class="card-text">{{$method->description}}</p>
                                    </a><a href="vay_theo_the_sinh_vien" class="btn btn-product">Tìm hiểu thêm</a>
                                </div>

                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div>
                <div class="owl-dots disabled">
                    <div class="owl-dot active"><span></span></div>
                </div>
            </div>
        </div>

    </div>
</div>
