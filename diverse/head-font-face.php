<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<link rel="preload" href="<?php $this->options->themeUrl('/main/woff/PatreonOraclePlusVariable-Regular.woff2'); ?>" as="font" type="font/woff2" crossorigin="anonymous">
<style>
    @font-face {
        font-family: 'ABC Oracle Plus Variable';
        src: url('<?php $this->options->themeUrl('/main/woff/PatreonOraclePlusVariable-Regular.woff2'); ?>') format('woff2'),
            url('<?php $this->options->themeUrl('/main/woff/PatreonOraclePlusVariable-Regular.woff'); ?>') format('woff');
        font-weight: 1 999;
        font-display: fallback;
        font-style: oblique 0deg 20deg;
    }
</style>