<?php
// カテゴリー別価格設定
const CATEGORY_1 = 1000;
const CATEGORY_2 = 1500;
const CATEGORY_3 = 2000;

// それぞれ入れる具材の定義
class Menu {
    public static $category_1 = 0;
    public static $category_2 = 0;
    public static $category_3 = 0;
    public static $decoration = 0;

    private $name;
    private $price;
    private $category;
    private $img;

    public function __construct($name, $price, $category, $img) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->img = 'https://annieproject.xsrv.jp/osech/img/'.$img;

        switch ($category) {
            case 0;
                self::$decoration++;
                break;
            case 1;
                self::$category_1++;
                break;
            case 2;
                self::$category_2++;
                break;
            case 3;
                self::$category_3++;
                break;
            default:
                echo "";
                break;
        }
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getImg(){
        return $this->img;
    }
}

// メニューインスタンスの生成
$kamaboko = new Menu('かまぼこ', CATEGORY_1, 1, 'menu_item/kamaboko.jpg');
$tadukuri = new Menu('田作り', CATEGORY_1, 1, 'menu_item/tadukuri.JPG');
$ikura = new Menu('いくら', CATEGORY_1, 1, 'menu_item/ikura.jpg');
$namasu = new Menu('なます', CATEGORY_1, 1, 'menu_item/namasu.JPG');
$datemaki = new Menu('伊達巻', CATEGORY_1, 1, 'menu_item/datemaki.jpg');
$konbumaki = new Menu('昆布巻き', CATEGORY_1, 1, 'menu_item/konbumaki.jpeg');
$dasimakitamago = new Menu('錦卵', CATEGORY_1, 1, 'menu_item/dasimakitamago.jpg');
$hanamame = new Menu('花豆', CATEGORY_1, 1, 'menu_item/hanamame.jpg');
$kinton = new Menu('きんとん', CATEGORY_1, 1, 'menu_item/kinton.jpg');
$hotate = new Menu('帆立', CATEGORY_1, 1, 'menu_item/hotate.jpeg');

$category_1_all = [
    $kamaboko, $tadukuri, $ikura, $namasu, $datemaki, $konbumaki,
    $dasimakitamago, $hanamame, $kinton, $hotate
];
shuffle($category_1_all);

$omaruebi = new Menu('オマール海老', CATEGORY_2, 2, 'menu_item/omaruebi.jpg');
$roastpoke = new Menu('ロースポーク', CATEGORY_2, 2, 'menu_item/roastpoke.jpg');
$kazunoko = new Menu('かずのこ', CATEGORY_2, 2, 'menu_item/kazunoko.jpg');
$ebi = new Menu('海老', CATEGORY_2, 2, 'menu_item/ebi.jpg');
$kuromame = new Menu('黒豆', CATEGORY_2, 2, 'menu_item/kuromame.jpg');
$kurumi = new Menu('胡桃', CATEGORY_2, 2, 'menu_item/kurumi.jpg');
$kani = new Menu('蟹', CATEGORY_2, 2, 'menu_item/kani.jpg');
$torimatu = new Menu('鳥松風', CATEGORY_2, 2, 'menu_item/torimatu.jpg');
$yuba = new Menu('湯葉', CATEGORY_2, 2, 'menu_item/yuba.jpg');
$butakakuni = new Menu('豚角煮', CATEGORY_2, 2, 'menu_item/butakakuni.jpg');

$category_2_all = [
    $omaruebi, $roastpoke, $kazunoko, $ebi, $kuromame, $kurumi, $kani,
    $torimatu, $yuba, $butakakuni
];
shuffle($category_2_all);

$tako = new Menu('蛸', CATEGORY_3, 3, 'menu_item/tako.png');
$sakenosaikyouyaki = new Menu('鮭の西京焼き', CATEGORY_3, 3, 'menu_item/sakenosaikyouyakki.jpg');
$awabinoumani = new Menu('鮑のうまに', CATEGORY_3, 3, 'menu_item/awabinoumani.jpg');
$unagikabayaki = new Menu('ウナギかば焼き', CATEGORY_3, 3, 'menu_item/unagikabayaki.jpg');
$hatimanmaki = new Menu('八幡真紀', CATEGORY_3, 3, 'menu_item/hatimanmaki.jpg');
$ebitiri = new Menu('エビチリ', CATEGORY_3, 3, 'menu_item/ebitiri.jpg');
$torinokaraage = new Menu('鶏のから揚げ', CATEGORY_3, 3, 'menu_item/torinokaraage.jpg');
$temarihu = new Menu('てまりふ', CATEGORY_3, 3, 'menu_item/temarihu.jpg');
$takenoko = new Menu('タケノコ', CATEGORY_3, 3, 'menu_item/takenoko.jpg');
$rostbeef = new Menu('ローストビーフ', CATEGORY_3, 3, 'menu_item/roastbeef.jpeg');

$category_3_all = [
    $tako, $sakenosaikyouyaki, $awabinoumani, $unagikabayaki, $hatimanmaki,
    $ebitiri, $torinokaraage, $temarihu, $takenoko, $rostbeef
];
shuffle($category_3_all);

$decoration1 = new Menu('decoration1', 0, 0, 'decoration/decoration1.jpeg');
$decoration2 = new Menu('decoration2', 0, 0, 'decoration/decoration2.jpeg');
$decoration3 = new Menu('decoration3', 0, 0, 'decoration/decoration3.jpg');
$decoration4 = new Menu('decoration4', 0, 0, 'decoration/decoration4.jpg');

$decoration_all = [$decoration1, $decoration2, $decoration3, $decoration4];

shuffle($decoration_all);