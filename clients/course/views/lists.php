<p class="py-3">Trang chủ > Khóa học</p>

<div>
    <?php if (!empty($data['course_category'])) :
        foreach ($data['course_category'] as $key => $value) :
    ?>
    <div class="title__text">
        <h4 class="text-left reset"><?php echo $value['title'] ?></h4>
        <a href="#"><button class="title__button">Xem tất cả >></button></a>
    </div>

    <div class="course">
        <?php if (!empty($data['course_detail'][$key])) :
                    foreach ($data['course_detail'][$key] as $item) : ?>
        <div class="course__content">
             <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/course1.jpg" alt="">
            <div class="course__padding">
                
                    <p><b><?php echo $item['title'] ?></b></p>
            
                <p><b><?php echo $value['title'] ?></b></p>
                <div class="course__item">
                    <p>Học phí:</p>
                    <b class="course__price"><?php echo $item['price'] ?> VNĐ</b>
                </div>
                <h6>Người Đứng Lớp: <b><?php echo $item['fullname'] ?></b></h6>
            </div>
        </div>
        <?php endforeach;
                else : ?>
        <p>Chưa có khóa học nào của danh mục này</p>
        <?php
                endif; ?>
    </div>
    <?php endforeach;
    endif; ?>
</div>
