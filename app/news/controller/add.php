<?php

require_once './news/model/news.php';

if (isPost()) {
    $body = getBody();

    $errors = [];

    $thumbnail = $_FILES['thumbnail'];

    if ($thumbnail['error'] === UPLOAD_ERR_OK) { // check điều kiện nè
        $uploadDir = '../uploads/news/'; // đường dẫn ảnh nè
        $uploadPath = $uploadDir . basename($thumbnail['name']);
        if (move_uploaded_file($thumbnail['tmp_name'], $uploadPath)) {
            $thumbnailFileName = basename($thumbnail['name']); // cái này để lấy tên ảnh nè
        } else {
            $errors['thumbnail'] = 'Không thể tải lên ảnh khóa học';
        }
    }else{
        $errors['thumbnail'] = 'Vui lòng không để trống ảnh khóa học';
    }  


    if (empty($body['title'])) {
        $errors['title'] = 'Tiêu đề không được để trống';
    }

    if (empty($body['content'])) {
        $errors['content'] = 'Nội dung không được để trống';
    }
    // if (empty($body['news_id'])) {
    //     $errors['news_id'] = 'Danh mục sách bắt buộc phải chọn';
    // }

    if (empty($errors)) {

        $dataInsert = [
            'title' => trim($body['title']),
            'content' => trim($body['content']),
            'thumbnail' => $thumbnailFileName,
            'news_id' => trim($body['news_id']),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('news', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm tin tức thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại sau!');
            setFlashData('msg_type', 'warning');
        }
    } else {
        setFlashData('msg', 'Dữ liệu không hợp lệ, vui lòng kiểm tra lại!');
        setFlashData('msg_type', 'warning');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=news&action=add');
}


$data = [
    'news_category' => getAllNewsCate(),
];

view($data);
