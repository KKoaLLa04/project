<?php

require_once './clients/contacts/model/contact.php';

if (isPost()) {
    $body = getBody();

    $errors = [];

    if (empty($body['fullname'])) {
        $errors['fullname'] = 'Vui lòng điền tên';
    }

    if (empty($body['email'])) {
        $errors['email'] = 'Email không được để trống';
    } else {
        if (!isEmail($body['email'])) {
            $errors['email'] = 'sai cú pháp';
        }
    }

    if (empty($body['phone'])) {
        $errors['phone'] = 'Vui lòng điền số điện thoại';
    }else {
        if (!isPhone($body['phone'])) {
            $errors['phone'] = 'sai cú pháp';
        }
    }

    if (empty($body['content'])) {
        $errors['content'] = 'Vui lòng điền nội dung';
    }

    if (empty($errors)) {

        $dataInsert = [
            'fullname' => trim($body['fullname']),
            'email' => trim($body['email']),
            'phone' => trim($body['phone']),
            'content' => trim($body['content']),
            'status' => 0,
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('contact', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Cảm ơn góp ý của bạn!');
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

    redirect('?module=contacts&action=contact');
}


viewClient();
