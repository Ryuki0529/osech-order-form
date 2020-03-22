<?php require_once('option_menu.php'); ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>おせち注文サイト</title>
        <meta name="description" content="オンラインでおせちの注文" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700">
        <link rel="stylesheet" href="./style/style.css">
        <link rel="stylesheet" href="./style/vegas.min.css">
        <link rel="stylesheet" href="./style/jquery-confirm.min.css">
        <link rel="stylesheet" href="./style/plugin_setting.css">
        <script src="./script/jquery-3.4.0.min.js"></script>
        <script src="./script/vegas.min.js"></script>
        <script src="./script/Sortable.min.js"></script>
        <script src="./script/jquery-confirm.min.js"></script>
    </head>
    <body>
        <header>
            <div id="mainvisual" class="top-slide">
                <div class="site-title">
                    <h1>おせち注文サイト</h1>
                </div>
            </div>
        </header>
        <div class="osech-select-wrapper">
            <?php $data_id = 1; ?>
            <form action="confirm.php" method="post">
            <h2>１段目のセレクト</h2>
            <div class="osech-select-area">
                <div class="select_back">
                <div class="category-1">
                    <h3>カテゴリー１＜ <font color="red">￥１０００</font>コーナー ＞</h3>
                    <ul class="item" id="first_1">
                        <?php foreach ($category_1_all as $item): ?>
                        <li data_id="<?php echo $data_id; ?>" class="category-1-color first_1000"><img src="<?php echo $item->getImg(); ?>">
                        <p><input type="checkbox" name="top[]" value="<?php echo $item->getName(); ?>" hidden><?php echo $item->getName(); ?></p></li>
                        <?php $data_id += 1; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="select-content">
                        <div class="select-numver">
                            <span>アイテム数：<?php echo Menu::$category_1; ?>&nbsp;個</span>
                        </div>
                        <div class="select-drop">
                            <span>ドロップ数：<span id="first_category-1_drop">0</span>&nbsp;個</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="select_back">
                <div class="category-2">
                    <h3>カテゴリー２＜ <font color="red">￥１５００</font>コーナー ＞</h3>
                    <ul class="item" id="first_2">
                        <?php foreach ($category_2_all as $item): ?>
                        <li data_id="<?php echo $data_id; ?>" class="category-2-color first_1500"><img src="<?php echo $item->getImg(); ?>">
                        <p><input type="checkbox" name="top[]" value="<?php echo $item->getName(); ?>" hidden><?php echo $item->getName(); ?></p></li>
                        <?php $data_id += 1; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="select-content">
                        <div class="select-numver">
                            <span>アイテム数：<?php echo Menu::$category_2; ?>&nbsp;個</span>
                        </div>
                        <div class="select-drop">
                            <span>ドロップ数：<span id="first_category-2_drop">0</span>&nbsp;個</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="select_back">
                <div class="category-3">
                    <h3>カテゴリー３＜ <font color="red">￥２０００</font>コーナー ＞</h3>
                    <ul class="item" id="first_3">
                        <?php foreach ($category_3_all as $item): ?>
                        <li data_id="<?php echo $data_id; ?>" class="category-3-color first_2000"><img src="<?php echo $item->getImg(); ?>">
                        <p><input type="checkbox" name="top[]" value="<?php echo $item->getName(); ?>" hidden><?php echo $item->getName(); ?></p></li>
                        <?php $data_id += 1; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="select-content">
                        <div class="select-numver">
                            <span>アイテム数：<?php echo Menu::$category_3; ?>&nbsp;個</span>
                        </div>
                        <div class="select-drop">
                            <span>ドロップ数：<span id="first_category-3_drop">0</span>&nbsp;個</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="price_info">
                    <div class="price_item">
                        <p class="price_item_head">カテゴリー１</p>
                        <p class="price" id="first_category-1_price">０円</p>
                    </div>
                    <div class="price_item">
                        <p class="price_item_head">カテゴリー２</p>
                        <p class="price" id="first_category-2_price">０円</p>
                    </div>
                    <div class="price_item">
                        <p class="price_item_head">カテゴリー３</p>
                        <p class="price" id="first_category-3_price">０円</p>
                    </div>
                    <div class="price_item">
                        <p class="price_item_head">１段目合計</p>
                        <p class="price" id="first_price">０円</p>
                    </div>
                </div>
            </div>
            <div class="osech-drop-area">
                <div class="decoration_back">
                    <div class="decoration_back_cover">
                        <h3>飾り付け<!--<button type="button" id="first_deco_btn">ドロップエリア表示・非表示</button>--></h2>
                        <ul class="decoration_select" id="first_decoration">
                            <?php foreach ($decoration_all as $deco): ?>
                                <li class="first_decoration"><img src="<?php echo $deco->getImg(); ?>"></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <ul class="osech-drop" id="drop_1">
                    <!--<div class="decoration doco_left_top first_btn" id="first_doco_left_top" style="display: none;"></div>
                    <div class="decoration doco_right_top first_btn" id="first_doco_right_top" style="display: none;"></div>
                    <div class="decoration doco_left_bottom first_btn" id="first_doco_left_bottom" style="display: none;"></div>
                    <div class="decoration doco_right_bottom first_btn" id="second_doco_right_bottom" style="display: none;"></div>-->
                </ul>
            </div>
            <h2 style="clear:both">２段目のセレクト</h2>
            <div class="osech-select-area">
                <div class="select_back">
                <div class="category-1">
                    <h3>カテゴリー１＜ <font color="red">￥１０００</font>コーナー ＞</h3>
                    <ul class="item" id="second_1">
                        <?php foreach ($category_1_all as $item): ?>
                        <li data_id="<?php echo $data_id; ?>" class="category-1-color second_1000"><img src="<?php echo $item->getImg(); ?>">
                        <p><input type="checkbox" name="end[]" value="<?php echo $item->getName(); ?>" hidden><?php echo $item->getName(); ?></p></li>
                        <?php $data_id += 1; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="select-content">
                        <div class="select-numver">
                            <span>アイテム数：<?php echo Menu::$category_1; ?>&nbsp;個</span>
                        </div>
                        <div class="select-drop">
                            <span>ドロップ数：<span id="second_category-1_drop">0</span>&nbsp;個</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="select_back">
                <div class="category-2">
                    <h3>カテゴリー２＜ <font color="red">￥１５００</font>コーナー ＞</h3>
                    <ul class="item" id="second_2">
                        <?php foreach ($category_2_all as $item): ?>
                        <li data_id="<?php echo $data_id; ?>" class="category-2-color second_1500"><img src="<?php echo $item->getImg(); ?>">
                        <p><input type="checkbox" name="end[]" value="<?php echo $item->getName(); ?>" hidden><?php echo $item->getName(); ?></p></li>
                        <?php $data_id += 1; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="select-content">
                        <div class="select-numver">
                            <span>アイテム数：<?php echo Menu::$category_2; ?>&nbsp;個</span>
                        </div>
                        <div class="select-drop">
                            <span>ドロップ数：<span id="second_category-2_drop">0</span>&nbsp;個</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="select_back">
                <div class="category-3">
                    <h3>カテゴリー３＜ <font color="red">￥２０００</font>コーナー ＞</h3>
                    <ul class="item" id="second_3">
                        <?php foreach ($category_3_all as $item): ?>
                        <li data_id="<?php echo $data_id; ?>" class="category-3-color second_2000"><img src="<?php echo $item->getImg(); ?>">
                        <p><input type="checkbox" name="end[]" value="<?php echo $item->getName(); ?>" hidden><?php echo $item->getName(); ?></p></li>
                        <?php $data_id += 1; ?>
                        <?php endforeach; ?>
                    </ul>
                    <div class="select-content">
                        <div class="select-numver">
                            <span>アイテム数：<?php echo Menu::$category_3; ?>&nbsp;個</span>
                        </div>
                        <div class="select-drop">
                            <span>ドロップ数：<span id="second_category-3_drop">0</span>&nbsp;個</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="price_info">
                    <div class="price_item">
                        <p class="price_item_head">カテゴリー１</p>
                        <p class="price" id="second_category-1_price">０円</p>
                    </div>
                    <div class="price_item">
                        <p class="price_item_head">カテゴリー２</p>
                        <p class="price" id="second_category-2_price">０円</p>
                    </div>
                    <div class="price_item">
                        <p class="price_item_head">カテゴリー３</p>
                        <p class="price" id="second_category-3_price">０円</p>
                    </div>
                    <div class="price_item">
                        <p class="price_item_head">１段目合計</p>
                        <p class="price" id="second_price">０円</p>
                    </div>
                </div>
            </div>
            <div class="osech-drop-area">
                <div class="decoration_back">
                    <div class="decoration_back_cover">
                        <h3>飾り付け</h2>
                        <ul class="decoration_select" id="second_decoration">
                            <?php foreach ($decoration_all as $deco): ?>
                                <li class="second_decoration"><img src="<?php echo $deco->getImg(); ?>"></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <ul class="osech-drop" id="drop_2">
                    <!--<div class="decoration doco_left_top" id="second_doco_left_top"></div>
                    <div class="decoration doco_right_top" id="second_doco_right_top"></div>
                    <div class="decoration doco_left_bottom" id="second_doco_left_bottom"></div>
                    <div class="decoration doco_right_bottom" id="second_doco_right_bottom"></div>-->
                </ul>
            </div>
                <!--<input type="submit" name="send" value="次へ" style="clear:both;">-->
            </form>
        </div>
        <footer>
            <div class="footer">
                <center><small>Copyright © おせち注文サイト All Rights Reserved.</small></center>
            </div>
            <script src="./script/set.js"></script>
        </footer>
    </body>
</html>