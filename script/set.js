$(function(){
    $('#mainvisual').vegas({
        slides: [
        { src: 'img/top-slide1.jpg' },
        { src: 'img/top-slide2.jpg' },
        { src: 'img/top-slide3.jpg' },
        { src: 'img/top-slide4.jpg' },
        { src: 'img/top-slide5.jpg' },
        { src: 'img/top-slide6.jpg' }
        ],
        transition: [ 'slideRight2', 'swirlRight', 'blur2'],
        transitionDuration: 2000,
        shuffle: true,
        delay: 7000
    });
    $('.site-title').slideDown(2000);

    // ソート機能の実装
    //++++++++++++++++++++++//
    //       １段目          //
    //**********************//
    let first_1_num_category_1 = $('#first_1 li').length;
    first_1_num_category_1 = first_1_num_category_1 - 8;
    Sortable.create(first_1, {
        sort: 'true',
        group: {
            name: 'group1',
            put: ['group2', 'group3', 'drop1']
        },
        animation: 150,
        ghostClass: "ghost",
        onStart: function(evt){
            $('.osech-select-area input').prop('checked', false);

            let num = $('#drop_1 li').length;
            first_1_num_real_category_1 = $('#first_1 li').length;
            if (num >= 9) {
                max_drop();
            }else if (first_1_num_category_1 == first_1_num_real_category_1) {
                $.alert({
                    title: 'カテゴリー１',
                    content: '８個以上選択することはできません。',
                });
            }
        },
        onEnd: function(evt){
            $('.osech-drop-area input').prop('checked',true);
            let drop_num = $('.osech-drop-area .first_1000').length;
            $('#first_category-1_drop').text(drop_num);

            var price = 1000*drop_num;
            var price_2 = 1500*($('.osech-drop-area .first_1500').length);
            var price_3 = 2000*($('.osech-drop-area .first_2000').length);
            var all_price = price + price_2 + price_3;
            $('#first_category-1_price').text(String(price) + ' 円');
            $('#first_price').text(String(all_price) + ' 円');
            //alert('ドラック終了');
        }
    });

    let first_1_num_category_2 = $('#first_2 li').length;
    first_1_num_category_2 = first_1_num_category_2 - 8;
    Sortable.create(first_2, {
        sort: 'true',
        group: {
            name: 'group2',
            put: ['group1', 'group3', 'drop1']
        },
        animation: 150,
        ghostClass: "ghost",
        onStart: function(evt){
            $('.osech-select-area input').prop('checked', false);

            let num = $('#drop_1 li').length;
            first_1_num_real_category_2 = $('#first_2 li').length;
            if (num >= 9) {
                max_drop();
            }else if (first_1_num_category_2 == first_1_num_real_category_2) {
                $.alert({
                    title: 'カテゴリー２',
                    content: '８個以上選択することはできません。',
                });
            }
        },
        onEnd: function(evt){
            $('.osech-drop-area input').prop('checked',true);
            let drop_num = $('.osech-drop-area .first_1500').length;
            $('#first_category-2_drop').text(drop_num);

            var price_2 = 1000*($('.osech-drop-area .first_1000').length);
            var price = 1500*drop_num;
            var price_3 = 2000*($('.osech-drop-area .first_2000').length);
            var all_price = price_2 + price + price_3;
            $('#first_category-2_price').text(String(price) + ' 円');
            $('#first_price').text(String(all_price) + ' 円');
            //alert('ドラック終了');
        }
    });

    let first_1_num_category_3 = $('#first_3 li').length;
    first_1_num_category_3 = first_1_num_category_3 - 8;
    Sortable.create(first_3, {
        sort: 'true',
        group: {
            name: 'group3',
            put: ['group1', 'group2', 'drop1']
        },
        animation: 150,
        ghostClass: "ghost",
        onStart: function(evt){
            $('.osech-select-area input').prop('checked', false);

            let num = $('#drop_1 li').length;
            first_1_num_real_category_3 = $('#first_3 li').length;
            if (num >= 9) {
                max_drop();
            }else if (first_1_num_category_3 == first_1_num_real_category_3) {
                $.alert({
                    title: 'カテゴリー３',
                    content: '８個以上選択することはできません。',
                });
            }
        },
        onEnd: function(evt){
            $('.osech-drop-area input').prop('checked',true);
            let drop_num = $('.osech-drop-area .first_2000').length;
            $('#first_category-3_drop').text(drop_num);

            var price_2 = 1000*($('.osech-drop-area .first_1000').length);
            var price_3 = 1500*($('.osech-drop-area .first_1500').length);
            var price = 2000*drop_num;
            var all_price = price_2 + price_3 + price;
            $('#first_category-3_price').text(String(price) + ' 円');
            $('#first_price').text(String(all_price) + ' 円');
            //alert('ドラック終了');
        }
    });

    Sortable.create(drop_1, {
        sort: 'true',
        group: {
            name: 'drop1',
            put: ['group1', 'group2', 'group3']
        },
        animation: 150,
        ghostClass: "ghost",
        onStart: function(evt){
            $('.osech-drop-area input').prop('checked',true);
        },
        onEnd: function(evt){
            setTimeout(function(){
                $('.osech-select-area input').prop('checked',false);

                $('#first_category-1_drop').text($('.osech-drop-area .first_1000').length);
                $('#first_category-2_drop').text($('.osech-drop-area .first_1500').length);
                $('#first_category-3_drop').text($('.osech-drop-area .first_2000').length);

                var price_1 = 1000*($('.osech-drop-area .first_1000').length);
                var price_2 = 1500*($('.osech-drop-area .first_1500').length);
                var price_3 = 2000*($('.osech-drop-area .first_2000').length);
                var all_price = price_1 + price_2 + price_3;
                $('#first_category-1_price').text(String(price_1) + ' 円');
                $('#first_category-2_price').text(String(price_2) + ' 円');
                $('#first_category-3_price').text(String(price_3) + ' 円');
                $('#first_price').text(String(all_price) + ' 円');
            },500);
        },
        store: {
            get: function (sortable) {
                var order = localStorage.getItem(sortable.options.group.name);
                return order ? order.split('|') : [];
            },
            set: function (sortable) {
                var order = sortable.toArray();
                localStorage.setItem(sortable.options.group.name, order.join('|'));
            }
        }
    });

    // １段目の飾り付けエリアの処理
    /*Sortable.create(first_decoration, {
        sort: 'true',
        group: {
            name: 'first_deco_select',
            put: ['first_deco_drop_3', 'first_deco_drop_2', 'first_deco_drop_1', 'first_deco_drop_4']
        },
        animation: 150,
        ghostClass: "ghost",
    });

    Sortable.create(first_doco_left_top, {
        sort: 'true',
        group: {
            name: 'first_deco_drop_1',
            put: ['first_deco_drop_3', 'first_deco_drop_2', 'first_deco_select', 'first_deco_drop_4']
        },
        animation: 150,
        ghostClass: "ghost",
    });

    Sortable.create(first_doco_right_top, {
        sort: 'true',
        group: {
            name: 'first_deco_drop_2',
            put: ['first_deco_drop_3', 'first_deco_drop_1', 'first_deco_select', 'first_deco_drop_4']
        },
        animation: 150,
        ghostClass: "ghost",
    });

    Sortable.create(first_doco_left_bottom, {
        sort: 'true',
        group: {
            name: 'first_deco_drop_3',
            put: ['first_deco_drop_2', 'first_deco_drop_1', 'first_deco_select', 'first_deco_drop_4']
        },
        animation: 150,
        ghostClass: "ghost",
    });

    Sortable.create(second_doco_right_bottom, {
        sort: 'true',
        group: {
            name: 'first_deco_drop_4',
            put: ['first_deco_drop_2', 'first_deco_drop_1', 'first_deco_select', 'first_deco_drop_3']
        },
        animation: 150,
        ghostClass: "ghost",
    });

    // 飾りドロップエリアの表示・非表示
    let first_btn_flag = false;
    $('#first_deco_btn').click(function() {
        if (first_btn_flag == false) {
            $('.first_btn').fadeIn(500);
            first_btn_flag = true;
        }else {
            $('.first_btn').fadeOut(500);
            first_btn_flag = false;
        }
    });*/

    //++++++++++++++++++++++//
    //       ２段目          //
    //**********************//
    let second_1_num_category_1 = $('#second_1 li').length;
    second_1_num_category_1 = second_1_num_category_1 - 8;
    Sortable.create(second_1, {
        sort: 'true',
        group: {
            name: 'second_group1',
            put: ['second_group2', 'second_group3', 'second_drop2']
        },
        animation: 150,
        ghostClass: "ghost",
        onStart: function(evt){
            $('.osech-select-area input').prop('checked', false);

            let num = $('#drop_2 li').length;
            second_1_num_real_category_1 = $('#second_1 li').length;
            if (num >= 9) {
                max_drop();
            }else if (second_1_num_category_1 == second_1_num_real_category_1) {
                $.alert({
                    title: 'カテゴリー１',
                    content: '８個以上選択することはできません。',
                });
            }
        },
        onEnd: function(evt){
            $('.osech-drop-area input').prop('checked',true);
            let drop_num = $('.osech-drop-area .second_1000').length;
            $('#second_category-1_drop').text(drop_num);

            var price = 1000*drop_num;
            var price_2 = 1500*($('.osech-drop-area .second_1500').length);
            var price_3 = 2000*($('.osech-drop-area .second_2000').length);
            var all_price = price + price_2 + price_3;
            $('#second_category-1_price').text(String(price) + ' 円');
            $('#second_price').text(String(all_price) + ' 円');

            //alert('ドラック終了');
        }
    });

    let second_2_num_category_1 = $('#second_2 li').length;
    second_2_num_category_1 = second_2_num_category_1 - 8;
    Sortable.create(second_2, {
        sort: 'true',
        group: {
            name: 'second_group2',
            put: ['second_group1', 'second_group3', 'second_drop2']
        },
        animation: 150,
        ghostClass: "ghost",
        onStart: function(evt){
            $('.osech-select-area input').prop('checked', false);

            let num = $('#drop_2 li').length;
            second_2_num_real_category_1 = $('#second_2 li').length;
            if (num >= 9) {
                max_drop();
            }else if (second_2_num_category_1 == second_2_num_real_category_1) {
                $.alert({
                    title: 'カテゴリー１',
                    content: '８個以上選択することはできません。',
                });
            }
        },
        onEnd: function(evt){
            $('.osech-drop-area input').prop('checked',true);
            let drop_num = $('.osech-drop-area .second_1500').length;
            $('#second_category-2_drop').text(drop_num);

            var price_2 = 1000*($('.osech-drop-area .second_1000').length);
            var price = 1500*drop_num;
            var price_3 = 2000*($('.osech-drop-area .second_2000').length);
            var all_price = price_2 + price + price_3;
            $('#second_category-2_price').text(String(price) + ' 円');
            $('#second_price').text(String(all_price) + ' 円');

            //alert('ドラック終了');
        }
    });

    let second_3_num_category_1 = $('#second_3 li').length;
    second_3_num_category_1 = second_3_num_category_1 - 8;
    Sortable.create(second_3, {
        sort: 'true',
        group: {
            name: 'second_group3',
            put: ['second_group1', 'second_group2', 'second_drop2']
        },
        animation: 150,
        ghostClass: "ghost",
        onStart: function(evt){
            $('.osech-select-area input').prop('checked', false);

            let num = $('#drop_2 li').length;
            second_3_num_real_category_1 = $('#second_3 li').length;
            if (num >= 9) {
                max_drop();
            }else if (second_3_num_category_1 == second_3_num_real_category_1) {
                $.alert({
                    title: 'カテゴリー１',
                    content: '８個以上選択することはできません。',
                });
            }
        },
        onEnd: function(evt){
            $('.osech-drop-area input').prop('checked',true);
            let drop_num = $('.osech-drop-area .second_2000').length;
            $('#second_category-3_drop').text(drop_num);

            var price_2 = 1000*($('.osech-drop-area .second_1000').length);
            var price_3 = 1500*($('.osech-drop-area .second_1500').length);
            var price = 2000*drop_num;
            var all_price = price_2 + price_3 + price;
            $('#second_category-3_price').text(String(price) + ' 円');
            $('#second_price').text(String(all_price) + ' 円');
            //alert('ドラック終了');
        }
    });

    Sortable.create(drop_2, {
        sort: 'true',
        group: {
            name: 'second_drop2',
            put: ['second_group1', 'second_group2', 'second_group3']
        },
        animation: 150,
        ghostClass: "ghost",
        onStart: function(evt){
            $('.osech-drop-area input').prop('checked',true);
        },
        onEnd: function(evt){
            setTimeout(function(){
                $('.osech-select-area input').prop('checked',false);

                $('#second_category-1_drop').text($('.osech-drop-area .second_1000').length);
                $('#second_category-2_drop').text($('.osech-drop-area .second_1500').length);
                $('#second_category-3_drop').text($('.osech-drop-area .second_2000').length);

                var price_1 = 1000*($('.osech-drop-area .second_1000').length);
                var price_2 = 1500*($('.osech-drop-area .second_1500').length);
                var price_3 = 2000*($('.osech-drop-area .second_2000').length);
                var all_price = price_1 + price_2 + price_3;
                $('#second_category-1_price').text(String(price_1) + ' 円');
                $('#second_category-2_price').text(String(price_2) + ' 円');
                $('#second_category-3_price').text(String(price_3) + ' 円');
                $('#second_price').text(String(all_price) + ' 円');
            },1000);
        },
        store: {
            get: function (sortable) {
                var order = localStorage.getItem(sortable.options.group.name);
                return order ? order.split('|') : [];
            },
            set: function (sortable) {
                var order = sortable.toArray();
                localStorage.setItem(sortable.options.group.name, order.join('|'));
            }
        }
    });

    function max_drop(){
        $.alert({
            title: 'ドロップエリアからのメッセージ',
            content: '選択できる品目は９個までです。',
        });
    }
});