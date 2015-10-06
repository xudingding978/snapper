@extends('layouts.master')
@section('css')
        <!-- Flexslider CSS-->
<link href="css/flexslider.css" rel="stylesheet">
@endsection
@section('content')

    <div class="container flex-slider">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider"> 
                        <ul class="slides"> 
                            <li><img src="images/s1.jpg" /></li>
                            <li><img src="images/s2.jpg" /></li>
                            <li><img src="images/s3.jpg" /></li> 
                            <li><img src="images/s4.jpg" /></li> 
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <div class="container catagory">
            <div class="row">
                <div class="col-md-4 img">
                    <img class="cat-img" src="images/p1.jpg"></img>
                </div>
                <div class="col-md-4 img">
                    <img class="cat-img" src="images/p1.jpg"></img>
                </div>
                <div class="col-md-4 img">
                    <img class="cat-img" src="images/p1.jpg"></img>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <section class="link-section">
                        <div class="row">
                            <p class="quick-type"><strong>留学国家</strong></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="quick-link" name="aus" href="">澳大利亚</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="quick-link" name="usa" href="">美国</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="quick-link" name="nzl" href="">新西兰</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="quick-link" name="eng" href="">英国</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="quick-type"><strong>热门学校</strong></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="quick-link" name="aus" href="">悉尼大学</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="quick-link" name="usa" href="">墨尔本大学</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="quick-link" name="nzl" href="">牛津大学</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="quick-link" name="eng" href="">哈佛大学</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="quick-type"><strong>热门业务</strong></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="quick-link" name="aus" href="">留学申请</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="quick-link" name="usa" href="">移民办理</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="quick-link" name="nzl" href="">签证申请</a>
                                </div>
                                <div class="col-md-6">
                                    <a class="quick-link" name="eng" href="">出国旅游</a>
                                </div>
                            </div>
                        </div>
                    </section>                     
                </div>
                <div class="col-md-9">
                    <div class="panel"> 
                        <div class="panel-body adv-panel">宣传页面</div>                         
                    </div>
                    <div class="push-links"> 
                        <h4 style="padding-left:20px;">留学移民资讯</h4>
                        <ul>
                            <li>
                                <a href="">澳洲技术移民打分新政</a>
                            </li>
                            <li>
                                <a href="">澳洲技术移民打分新政</a>
                            </li>
                            <li>
                                <a href="">澳洲技术移民打分新政</a>
                            </li>
                            <li>
                                <a href="">澳洲技术移民打分新政</a>
                            </li>
                            <li>
                                <a href="">澳洲技术移民打分新政</a>
                            </li>
                        </ul>                         
                    </div>                     
                </div>
            </div>
        </div>
@endsection


@section('javascript')
<script type="text/javascript">
    $(function() {
        $(".flexslider").flexslider({
            slideshowSpeed: 4000, //展示时间间隔ms
            animationSpeed: 400, //滚动时间ms
            touch: true //是否支持触屏滑动
        });
    });
</script>
@endsection