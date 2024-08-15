<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('diverse/head-typa.php'); ?>

<body>
    <div class="hk-contaowow">
        <div class="hk-konzi-a">
            <div class="hk-biaoyiti-zt">
                <h1 class="post-title" style="word-wrap:break-word;overflow:hidden;"><?php $this->title() ?></h1>
            </div>
            <!---->
            <div class="klbbx-article-page-info">
                <div class="klbbx-article-page-info__from">
                    <span>来自分类：</span>
                    <a class="klbbx-router-link klbbx-article-page-info__from-name" target="_blank">
                    <?php if (count($categories)) : ?>
                            <?php $category = reset($categories); ?>
                            <?php echo $category['name']; ?>
                        <?php endif; ?>
                        <?php $categories = $this->categories; ?>
                    </a>
                </div>
            </div>
            <!---->
            <div class="klbbx-article-page-updatetime">
                <span>文章发表：<?php $this->date('Y-m-d H:i:s'); ?></span><!---->
            </div>
            <!---->
            <article class="post">
                <div class="post-content" itemprop="articleBody">
                    <?php $this->content(); ?>
                </div>
                <!---->
                <div class="mhy-article-page-bottom">
                    <div class="mhy-topic-label-selector">
                        <?php
                        // 获取当前文章的标签信息
                        $tags = $this->tags;
                        // 检查是否有标签存在
                        if ($tags) :
                            // 循环遍历标签
                            foreach ($tags as $tag) :
                                // 获取标签的链接和名称
                                $tag_permalink = $tag['permalink'];
                                $tag_name = $tag['name'];
                                echo '<div class="mhy-topic-label mhy-topic-label-selector__item"><a href="' . $tag_permalink . '" class="mhy-router-link mhy-topic-label__link" target="_blank"><!----> <span>' . $tag_name . '</span></a> <!----></div> <!---->';
                            endforeach;
                        else :
                            // 如果没有标签，输出提示信息
                            echo '<p>该文章没有收录在标签中...</p>';
                        endif;
                        ?>
                    </div>

                    <div class="mhy-button mhy-article-page__report mhy-button-default">
                        <button class="mhy-button__button">举报</button>
                    </div>
                </div>
                <!---->
        </div>
        <!---->
        </article>
    </div>
    </div>
</body>