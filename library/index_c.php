<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="klbbx_zttzzz_abc">
    <div class="sc-1b5vbhn-0 zttnK">
        <div class="store-header" style="display: flex; background-image: url(<?php $this->options->hk_imggifpng_index() ?>);"></div>
        <!---->
        <div class="sc-1b5vbhn-4 iUTvuQ" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
            <img role="img" src="<?php $this->options->klbbx_imgneam_index() ?>" display="block" shape="square" data-tag="creator-public-page-avatar" class="sc-jRQBWg dKihxU">
            <!---->
            <div class="sc-fmBCVi exjCPz"></div>
            <!---->
            <div class="sc-fmBCVi exjCPz"></div>
            <!---->
            <div class="sc-1b5vbhn-9 dQgDWZ" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                <h1 align="center" class="sc-jgrJph YCXEB" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72"><?php $this->options->hk_name_zbt() ?></h1>
                <!---->
                <div class="sc-fmBCVi iVqcSU" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                </div>
                <!---->

                <!---->
                <div class="sc-fmBCVi iVqcSU" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                </div>
                <!---->
                <ul class="sc-1b5vbhn-6 bcmXGh" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                    <li class="sc-1b5vbhn-7 jNAvzP" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                        <span data-tag="patron-count" class="sc-bdvvtL eHmEtx" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                            <?php
                            function format_views($views)
                            {
                                if ($views < 1000) {
                                    return $views;
                                } elseif ($views < 10000) {
                                    return round($views / 1000, 1) . 'k';
                                } elseif ($views < 100000000) {
                                    return round($views / 10000, 1) . 'w';
                                } else {
                                    // 如果访问量超过1亿，可以根据需要继续扩展
                                    return round($views / 100000000, 1) . 'b';
                                }
                            }

                            // 获取当前首页访问量
                            $db = Typecho_Db::get();
                            $prefix = $db->getPrefix();
                            $views = $db->fetchRow($db->select()->from($prefix . 'options')->where('name = ?', 'theme:homepage_views'));

                            // 如果没有记录，则初始化为0并插入新记录
                            if (empty($views)) {
                                $db->query($db->insert($prefix . 'options')->rows(array('name' => 'theme:homepage_views', 'value' => 0)));
                                $views = array('value' => 0);
                            }

                            // 每次页面加载时增加首页访问量
                            $views['value'] = $views['value'] + 1;
                            $db->query($db->update($prefix . 'options')->rows($views)->where('name = ?', 'theme:homepage_views'));

                            // 输出首页访问量
                            echo format_views($views['value']);
                            ?>
                            <!-- -->°C热度
                        </span>
                    </li>
                    <li class="sc-1b5vbhn-7 jNAvzP" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                        <span data-tag="creation-count" class="sc-bdvvtL eHmEtx" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                            <?php
                            // 获取数据库连接
                            $db = Typecho_Db::get();

                            // 查询文章总数
                            $sql = $db->select()->from('table.contents')->where('type = ?', 'post')->where('status = ?', 'publish');
                            $result = $db->fetchAll($sql);
                            $totalPosts = count($result);

                            // 输出文章总数
                            echo $totalPosts;
                            ?><!-- --> <!-- -->
                            篇内容
                        </span>
                    </li>
                </ul>
                <!---->
                <p class="sc-bdvvtL lhrfPG" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72" data-immersive-translate-paragraph="1"><?php $this->options->hk_qz_bt() ?></p>
                <!---->
                <!---->
                <div class="sc-fmBCVi exjCPz" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                </div>
                <!---->
                <div class="sc-1b5vbhn-10 dCPcYB" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                    <button aria-disabled="false" type="button" data-tag="creator-become-a-patron-button" class="sc-bqiRlB gmCYiZ">
                        <div class="sc-crHmcD hZQOBL">
                            <div class="sc-egiyK cPhYjp">支持</div>
                        </div>

                    </button>
                    <div class="sc-fmBCVi hpoSPE" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                    </div>

                    <div data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72"></div>
                    <div class="sc-fmBCVi hpoSPE" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                    </div>

                    <div class="sc-fmBCVi iVqcSU" data-immersive-translate-walked="20072893-5d5b-42b4-8fac-f129df427e72">
                    </div>
                </div>
                <!---->
            </div>
        </div>
        <!---->
    </div>
    <div class="sc-fmBCVi iVqcSU"></div>

    <div class="klbbx-fbn-card">
        <?php while ($this->next()) : ?>
            <div class="klbbx-hk-article-card">
                <div class="klbbx-hk-article-card__header">
                    <div class="klbbx-hk-article-card__userinfo">
                        <p class="klbbx-hk-article-card__info">
                            <?php
                            $year = date('Y', $this->created);
                            $month = date('m', $this->created);
                            $day = date('d', $this->created);
                            echo $year . '-' . $month . '-' . $day;
                            ?>
                        </p>
                    </div>
                </div>
                <a href="<?php $this->permalink() ?>" class="klbbx-hk-router-link klbbx-hk-article-card__link" target="_blank">
                    <div class="klbbx-hk-article-card__title">
                        <h3 title="<?php $this->title(20, '...'); ?>" class="klbbx-hk-article-card__h3"><?php $this->title(20, '...'); ?></h3>
                    </div>
                    <div class="klbbx-hk-article-card__content"><?php echo $this->excerpt(200, '...'); ?></div>
                    <div class="klbbx-hk-article-card__preview">
                        <?php
                        // 调用函数获取图片路径
                        $image_path = getFirstAttachmentImg($this);
                        // 如果存在图片路径且图片文件存在，则显示图片
                        if (!empty($image_path) && file_exists($image_path)) {
                            echo '<div class="klbbx-hk-article-card__img" style="background-image: url(\'' . $image_path . '\');">';
                            echo '<img src="' . $image_path . '" alt="Image">';
                            echo '</div>'; // 结束 klbbx-hk-article-card__img
                        }
                        // 如果只存在图片路径但图片文件不存在，则仅显示图片
                        elseif (!empty($image_path)) {
                            echo '<img src="' . $image_path . '" alt="Image">';
                        }
                        ?>
                    </div>
                </a>
                <div class="klbbx-hk-article-card__footer">
                    <div class="klbbx-hk-topic-label-selector klbbx-hk-article-card__topics">
                        <?php
                        $categories = $this->categories;
                        foreach ($categories as $category) {
                            $category_name = $category['name'];
                            $category_permalink = $category['permalink'];
                            echo '<div class="klbbx-hk-topic-label klbbx-hk-topic-label-selector__item"><a href="' . $category_permalink . '" class="klbbx-hk-router-link klbbx-hk-topic-label__link" target="_blank"><span>' . $category_name . '</span></a></div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<!---->