<?php

require_once './course/model/course.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $courseDetail = getCourseDetail($id);
} else {
    setFlashData('msg', 'Liên kết không tồn tại hoặc đã hết hạn!');
    setFlashData("msg_type", 'danger');
    redirect("?module=course&action=lists");
}

if (isPost()) {
    $body = getBody();
    $id = $body['id'];
    $errors = [];

    // validate
    if (empty(trim($body['title']))) {
        $errors['title'] = 'Tiêu đề khóa học không được để trống';
    }

    if (empty(trim($body['teacher_id']))) {
        $errors['teacher_id'] = 'Bắt buộc chọn giảng viên dạy khóa học';
    }

    if (empty(trim($body['cate_id']))) {
        $errors['cate_id'] = 'Bắt buộc chọn danh mục khóa học';
    }

    if (empty(trim($body['price']))) {
        $errors['price'] = 'Bắt buộc nhập giá';
    } else {
        if (!isNumberInt(trim($body['price']))) {
            $errors['price'] = 'Giá bắt buộc phải là 1 số';
        }
    }

    if (empty($errors)) {
        $dataUpdate = [
            'title' => trim($body['title']),
            'cate_id' => trim($body['cate_id']),
            'thumbnail' => trim($body['thumbnail']),
            'price' => trim($body['price']),
            'teacher_id' => trim($body['teacher_id']),
            'update_at' => date('Y-m-d H:i:s')
        ];

        
        if (!empty($_FILES['thumbnail']['name'])) {
         
            $uploadDir = '../uploads/course/';
            $thumbnail = $_FILES['thumbnail'];
            $thumbnailName = basename($thumbnail['name']);
            $thumbnailPath = $uploadDir . $thumbnailName;

            if (move_uploaded_file($thumbnail['tmp_name'], $thumbnailPath)) {
                
                $dataUpdate['thumbnail'] = $thumbnailName;
            }
        }

        $condition = 'id = ' . $id;

        $updateStatus = update('course', $dataUpdate, $condition);

        if (!empty($updateStatus)) {
            setFlashData('msg', 'Cập nhật khóa học thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=course&action=edit&id=' . $id);
}

$data = [
    'teacher' => getAllTeacher(),
    'course_category' => getAllCate(),
    'course_detail' => $courseDetail,
    'id' => $id,
];

view($data);