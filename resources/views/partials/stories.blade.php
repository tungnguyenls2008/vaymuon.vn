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
                                            <img src="{{asset('images/avatar/story/'.$story->avatar)}}" alt="">
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
