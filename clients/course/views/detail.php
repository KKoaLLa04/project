<p class="py-3">Trang chủ > Khóa học > Khóa học 0 đồng > lập trình cơ bản</p>

<div class="row">
    <div class="col-8">
        <iframe width="100%" height="500px" src="<?php echo !empty($data['video_url']) ? $data['video_url'] : 'https://www.youtube.com/embed/wZvoZuc0Hr4?si=2To-UTY6KlpvVbLy' ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="mb-3"></iframe>
        <b>Người Đứng Lớp: Duy Kiên</b>
        <p></p>
        <b>Facebook: <a href="#">Bấm vào đây</a></b>

        <h3 class="mt-5">Nội dung khóa học</h3>

        <?php if (!empty($data['module'])) :
            foreach ($data['module'] as $key => $value) : ?>

                <div class="module">
                    <div class="alert alert-danger menu-module">
                        <h6>Chương <?php echo $key + 1 ?>: <?php echo $value['title'] ?></h6>
                    </div>

                    <div class="menu-close">
                        <?php if (!empty($data['course_detail'][$key])) :
                            foreach ($data['course_detail'][$key] as $key => $item) : ?>
                                <p><a class="dropdown-item" href="?module=course&action=detail&course_id=<?php echo !empty($data['course_id']) ? $data['course_id'] : false ?>&video_url=<?php echo $item['video_url'] ?>"><?php echo $item['title'] ?></a>
                                </p>

                        <?php endforeach;
                        endif; ?>
                    </div>
                </div>

        <?php endforeach;
        endif; ?>
    </div>

    <div class="col-4">
        <h5>lập trình cơ bản</h5>

        <div class="course__item">
            <p>Giá:</p>
            <h2 style="color: red;">Miễn phí</h2>
        </div>
        <hr>
        <button class="btn btn-primary form-control py-3">Miễn phí</button>
        <div class="course__description py-3">
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/chap.svg" alt="">Chương:
                <?php echo (!empty($data['information'])) ? $data['information']['count_module'] : 1 ?> Chương</p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/clock.svg" alt="">Giáo trình: video bài giảng + tài
                liệu đi kèm
            </p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/play.svg" alt="">Thời lượng: nhiều giờ học</p>
            <!-- <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/khaigiang.svg" alt="">Ngày khai giảng: 01/01/2020 -->
            </p>
            <!-- <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/hsd.svg" alt="">Hạn sử dụng: 10/07/2030</p> -->
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/chap.svg" alt="">Thời lượng: nhiều giờ học</p>
            <p><img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/svg/clock.svg" alt="">Hệ thống bài giảng độc quyền của
                SONLINE</p>
        </div>
    </div>
</div>