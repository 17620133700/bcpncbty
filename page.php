<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('diverse/head-typa.php'); ?>

<body>
    <div class="hk-contaowow">
        <div class="hk-konzi-a">
            <div class="hk-biaoyiti-zt">
                <h1 class="post-title" style="word-wrap:break-word;overflow:hidden;"><?php $this->title() ?></h1>
            </div>
            <div class="klbbx-article-page-info">
                <div class="klbbx-article-page-info__from"><span>来自分类：</span> <a class="klbbx-router-link klbbx-article-page-info__from-name" target="_blank"><?php $this->category(','); ?>
                    </a></div>
            </div>
            <div class="klbbx-article-page-updatetime">
                <span>文章发表：<?php $this->date('Y-m-d H:i:s'); ?></span><!---->
            </div>
            <article class="post">
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
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
        </article>
    </div>
    </div>
</body>