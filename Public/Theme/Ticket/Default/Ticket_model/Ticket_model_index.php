<?php include THEME_PATH . "/Content/Content_index_header.php"; ?>

<div class="am-g am-margin-bottom-xs am-g-collapse">
    <div class="am-u-sm-12 am-u-md-6 am-padding-top-xs">
        <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
                <?php ?>
                <?php $addUrl = empty($addUrl) ? $label->url(GROUP . '-' . MODULE . '-action', array('back_url' => base64_encode($_SERVER['REQUEST_URI']))) : $addUrl ?>
                <a href="<?= $addUrl ?>" class="am-btn am-btn-default am-radius"><span class="am-icon-plus"></span> 新增</a>

                <?php if($system['indexStyle'] == 1): ?>
                <a href="<?= $label->url('Form-Category-index', ['new_index' => 1, 'method' => 'GET', 'back_url' => base64_encode($_SERVER['REQUEST_URI'])]) ?>" class="am-btn am-btn-secondary am-radius ajax-click" style="margin-left: .2rem" data-am-popover="{content: '您开启了首页工单样式，点击我进行更新', trigger: 'hover focus'}">
                    <span class="am-icon-refresh"></span> 更新首页工单样式
                </a>
                <?php endif; ?>

            </div>
        </div>
    </div>


    <div class="am-u-sm-12 am-u-md-3">
        <form>
            <div class="am-input-group am-input-group-sm">
                <input type="hidden" name="g" value="<?= GROUP; ?>"/>
                <input type="hidden" name="m" value="<?= MODULE ?>"/>
                <input type="hidden" name="a" value="<?= ACTION ?>"/>
                <input type="text" name="keyword" value="<?= $_GET['keyword'] ?>" class="am-form-field am-radius">
                <span class="am-input-group-btn">
                        <input class="am-btn am-btn-default am-radius" type="submit" value="搜索"/>
                    </span>
            </div>
        </form>
    </div>
</div>
<hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />

<?php include THEME_PATH . "/Content/Content_index_list.php"; ?>

<?php include THEME_PATH . "/Content/Content_index_footer.php"; ?>