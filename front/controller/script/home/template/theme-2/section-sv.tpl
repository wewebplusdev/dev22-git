<div class="services-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-side">
                    <div class="h-title">
                        งานบริการ
                    </div>
                    <p class="desc">
                        เป็นองค์กรของรัฐในรูปแบบองค์การ
                        มหาชนตามพระราชบัญญัติองค์การ
                        มหาชน พ.ศ. 2542
                    </p>
                    <a href="" class="btn btn-lg btn-border-light" title="อ่านต่อ">อ่านต่อ</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="right-side">

                    <ul class="default-nav-tabs nav nav-tabs" id="updateTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="service-01-tab" data-toggle="tab" href="#service-01"
                                role="tab" aria-controls="service-01" aria-selected="true">บริการห้องปฏิบัติการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="service-02-tab" data-toggle="tab" href="#service-02" role="tab"
                                aria-controls="service-02" aria-selected="false">บริการฝึกอบรม</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="service-03-tab" data-toggle="tab" href="#service-03" role="tab"
                                aria-controls="service-03" aria-selected="false">บริการข้อมูลข่าวสาร</a>
                        </li>
                    </ul>
                    <div class="default-tab-content tab-content" id="updateTabContent">
                        <div class="tab-pane fade show active" id="service-01" role="tabpanel"
                            aria-labelledby="service-01-tab">
                            <div class="default-slider default-slider-dots slider">

                                {for $index=1 to 8}
                                    <div class="item">
                                        <a href="" class="link" title="ตรวจสอบอัญมณี">
                                            <figure class="cover">
                                                <img src="{$template}/assets/img/static/service-01.jpg" alt="ตรวจสอบอัญมณี">
                                            </figure>
                                            <div class="inner">
                                                <div class="title">
                                                    ตรวจสอบอัญมณี
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                {/for}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="service-02" role="tabpanel" aria-labelledby="service-02-tab">
                            service-02
                        </div>
                        <div class="tab-pane fade" id="service-03" role="tabpanel" aria-labelledby="service-03-tab">
                            service-03
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>