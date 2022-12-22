<!-- Modal -->
<div class="modal modal-profile fade" id="profileBlock" tabindex="-1" role="dialog" aria-labelledby="profileBlockTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            </div> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="feather icon-x"></span>
            </button>
            <div class="modal-body">
                <div class="profile-block">
                    <div class="profile">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-thumbnail">
                                    <figure class="cover">
                                        <img src="<?php echo $core_template; ?>/assets/img/upload/profile-thumbnail.jpg" alt="profile thumbnail">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="profile-desc">
                                    <div class="profile-name">
                                        นางนันทวัลย์ ศกุนตนาค
                                    </div>

                                    <div class="profile-position">
                                        อดีตปลัดกระทรวงพาณิชย์
                                    </div>
                                    <div class="profile-timeline">
                                        (29 มิ.ย. 2564 - ปัจจุบัน)
                                    </div>
                                    <div class="profile-contact">
                                        <div class="email">
                                            อีเมล: rphusit@git.or.th
                                        </div>
                                        <div class="telephone">
                                            เบอร์โทร: 0-2634-4999 ต่อ 633
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="feather icon-x"></span>
            </button>
            <div class="modal-body">
                <form class="form-default">
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" id="keywords" class="form-control" placeholder="ค้นหา...">
                            <label class="visuallyhidden" for="keywords">Search</label>
                        </div>
                        <button type="button" class="btn btn-search">
                            <span class="feather icon-search"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>