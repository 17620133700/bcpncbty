<?php

function themeConfig($form)
{
    $hk_name_zbt = new \Typecho\Widget\Helper\Form\Element\Text(
        'hk_name_zbt',
        null,
        'ZZZ',
        _t('你的昵称'),
        _t('在这里填入你的昵称，会在首页显示')
    );
    $form->addInput($hk_name_zbt);


    $hk_qz_bt = new \Typecho\Widget\Helper\Form\Element\Text(
        'hk_qz_bt',
        null,
        '系统默认签名，送给每一个小可爱',
        _t('你的留言签名'),
        _t('在这里填入你的昵称，会在首页显示')
    );
    $form->addInput($hk_qz_bt);


    $hk_imggifpng_index = new \Typecho\Widget\Helper\Form\Element\Text(
        'hk_imggifpng_index',
        null,
        '/usr/themes/zzz/main/img/001.jpg?=0.1',
        _t('首页封面图片'),
        _t('在这里填入首页封面图片, 会改变首页的封面图片')
    );
    $form->addInput($hk_imggifpng_index);


    $klbbx_imgneam_index = new \Typecho\Widget\Helper\Form\Element\Text(
        'klbbx_imgneam_index',
        null,
        '/usr/themes/zzz/main/img/002.jpg?=0.1',
        _t('全局头像图片'),
        _t('在这里填入你的头像')
    );
    $form->addInput($klbbx_imgneam_index);

    $klbbx_imgweb_pico = new \Typecho\Widget\Helper\Form\Element\Text(
        'klbbx_imgweb_pico',
        null,
        '/usr/themes/zzz/main/img/000.png?=0.1',
        _t('网站图标'),
        _t('在这里填入网站图标, 会改变网站的图标图片')
    );
    $form->addInput($klbbx_imgweb_pico);
}

if (!defined('__TYPECHO_ROOT_DIR__')) exit;


function getFirstAttachmentImg($archive)
{
    $img = '';
    // 获取文章的所有附件
    $attachments = $archive->attachments(1)->stack;
    // 如果存在附件，则循环遍历附件
    if ($attachments) {
        foreach ($attachments as $attachment) {
            // 判断附件是否为图片类型
            if ($attachment->isImage) {
                // 获取图片的 URL
                $img = $attachment->url;
                // 如果找到图片，则直接返回
                return $img;
            }
        }
    }
    // 如果没有找到图片，则返回空字符串
    return $img;
}
