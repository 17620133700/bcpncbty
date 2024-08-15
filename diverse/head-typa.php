<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <?php $this->need('diverse/head_klbbx_abc.php'); ?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/main/md/prism.css'); ?>">
    <link href="<?php $this->options->themeUrl('/main/css/klbbx-tyxxx-popa.css?=0.0.4'); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php $this->options->themeUrl('/main/md/prism.js'); ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Prism.highlightAll();
        });
    </script>
    <?php $this->need('diverse/head-font-face.php'); ?>
</head>