<?php
$table_name = '`leju`.`leju_expert_enterprise_city`';
$config = array();


$config['region']['北部'] = ['A','C','F','H','J','O'];
$config['region']['中部'] = ['B','K','N','M','P'];
$config['region']['南部'] = ['D','E','I','Q','T'];
$config['region']['東部/離島'] = ['G','U','V','X','W','Z'];

$config['city_code'] = [
    "A" => "台北市",
    "F" => "新北市",
    "J" => "新竹縣",
    "O" => "新竹市",
    "H" => "桃園市",
    "B" => "台中市",
    "C" => "基隆市",
    "E" => "高雄市",
    "D" => "台南市",
    "G" => "宜蘭縣",
    "Q" => "嘉義縣",
    "I" => "嘉義市",
    "K" => "苗栗縣",
    "M" => "南投縣",
    "N" => "彰化縣",
    "P" => "雲林縣",
    "T" => "屏東縣",
    "U" => "花蓮縣",
    "V" => "台東縣",
    "W" => "金門縣",
    "X" => "澎湖縣",
    "Z" => "連江縣",
];

$config['city_code_flip'] = [
    "台北市" => "A",
    "新北市" => "F",
    "新竹縣" => "J",
    "新竹市" => "O",
    "桃園市" => "H",
    "台中市" => "B",
    "基隆市" => "C",
    "高雄市" => "E",
    "台南市" => "D",
    "宜蘭縣" => "G",
    "嘉義縣" => "Q",
    "嘉義市" => "I",
    "苗栗縣" => "K",
    "南投縣" => "M",
    "彰化縣" => "N",
    "雲林縣" => "P",
    "屏東縣" => "T",
    "花蓮縣" => "U",
    "台東縣" => "V",
    "金門縣" => "W",
    "澎湖縣" => "X",
    "連江縣" => "Z",
];

$config['area_ary']['A'] = array("中正區", "大同區", "中山區", "松山區", "大安區", "萬華區", "信義區", "士林區", "北投區", "內湖區", "南港區", "文山區");
$config['area_ary']['C'] = array("仁愛區", "信義區", "中正區", "中山區", "安樂區", "暖暖區", "七堵區");
$config['area_ary']['F'] = array("萬里區", "金山區", "板橋區", "汐止區", "深坑區", "石碇區", "瑞芳區", "平溪區", "雙溪區", "貢寮區", "新店區", "坪林區", "烏來區", "永和區", "中和區", "土城區", "三峽區", "樹林區", "鶯歌區", "三重區", "新莊區", "泰山區", "林口區", "蘆洲區", "五股區", "八里區", "淡水區", "三芝區", "石門區");
$config['area_ary']['G'] = array("宜蘭市", "頭城鎮", "礁溪鄉", "壯圍鄉", "員山鄉", "羅東鎮", "三星鄉", "大同鄉", "五結鄉", "冬山鄉", "蘇澳鎮", "南澳鄉");
$config['area_ary']['H'] = array("中壢區", "平鎮區", "龍潭區", "楊梅區", "新屋區", "觀音區", "桃園區", "龜山區", "八德區", "大溪區", "復興區", "大園區", "蘆竹區");
$config['area_ary']['O'] = array("東區", "北區", "香山區");
$config['area_ary']['J'] = array("竹北市", "湖口鄉", "新豐鄉", "新埔鎮", "關西鎮", "芎林鄉", "寶山鄉", "竹東鎮", "五峰鄉", "橫山鄉", "尖石鄉", "北埔鄉", "峨眉鄉");
$config['area_ary']['K'] = array("竹南鎮", "頭份市", "三灣鄉", "南庄鄉", "獅潭鄉", "後龍鎮", "通霄鎮", "苑裡鎮", "苗栗市", "造橋鄉", "頭屋鄉", "公館鄉", "大湖鄉", "泰安鄉", "銅鑼鄉", "三義鄉", "西湖鄉", "卓蘭鎮");
$config['area_ary']['B'] = array("中區", "東區", "南區", "西區", "北區", "北屯區", "西屯區", "南屯區", "太平區", "大里區", "霧峰區", "烏日區", "豐原區", "后里區", "石岡區", "東勢區", "和平區", "新社區", "潭子區", "大雅區", "神岡區", "大肚區", "沙鹿區", "龍井區", "梧棲區", "清水區", "大甲區", "外埔區", "大安區");
$config['area_ary']['N'] = array("彰化市", "芬園鄉", "花壇鄉", "秀水鄉", "鹿港鎮", "福興鄉", "線西鄉", "和美鎮", "伸港鄉", "員林市", "社頭鄉", "永靖鄉", "埔心鄉", "溪湖鎮", "大村鄉", "埔鹽鄉", "田中鎮", "北斗鎮", "田尾鄉", "埤頭鄉", "溪州鄉", "竹塘鄉", "二林鎮", "大城鄉", "芳苑鄉", "二水鄉");
$config['area_ary']['M'] = array("南投市", "中寮鄉", "草屯鎮", "國姓鄉", "埔里鎮", "仁愛鄉", "名間鄉", "集集鎮", "水里鄉", "魚池鄉", "信義鄉", "竹山鎮", "鹿谷鄉");
$config['area_ary']['P'] = array("斗南鎮", "大埤鄉", "虎尾鎮", "土庫鎮", "褒忠鄉", "東勢鄉", "台西鄉", "崙背鄉", "麥寮鄉", "斗六市", "林內鄉", "古坑鄉", "莿桐鄉", "西螺鎮", "二崙鄉", "北港鎮", "水林鄉", "口湖鄉", "四湖鄉", "元長鄉");
$config['area_ary']['I'] = array("東區", "西區");
$config['area_ary']['Q'] = array("番路鄉", "梅山鄉", "竹崎鄉", "阿里山鄉", "中埔鄉", "大埔鄉", "水上鄉", "鹿草鄉", "太保市", "朴子市", "東石鄉", "六腳鄉", "新港鄉", "民雄鄉", "大林鎮", "溪口鄉", "義竹鄉", "布袋鎮");
$config['area_ary']['D'] = array("中西區", "東區", "南區", "北區", "安平區", "安南區", "永康區", "歸仁區", "新化區", "左鎮區", "玉井區", "楠西區", "南化區", "仁德區", "關廟區", "龍崎區", "官田區", "麻豆區", "佳里區", "西港區", "七股區", "將軍區", "學甲區", "北門區", "新營區", "後壁區", "白河區", "東山區", "六甲區", "下營區", "柳營區", "鹽水區", "善化區", "大內區", "山上區", "新市區", "安定區");
$config['area_ary']['E'] = array("新興區", "前金區", "苓雅區", "鹽埕區", "鼓山區", "旗津區", "前鎮區", "三民區", "楠梓區", "小港區", "左營區", "仁武區", "大社區", "岡山區", "路竹區", "阿蓮區", "田寮區", "燕巢區", "橋頭區", "梓官區", "彌陀區", "永安區", "湖內區", "鳳山區", "大寮區", "林園區", "鳥松區", "大樹區", "旗山區", "美濃區", "六龜區", "內門區", "杉林區", "甲仙區", "桃源區", "那瑪夏區", "茂林區", "茄萣區");
$config['area_ary']['W'] = array("馬公市", "西嶼鄉", "望安鄉", "七美鄉", "白沙鄉", "湖西鄉");
$config['area_ary']['T'] = array("屏東市", "三地門鄉", "霧台鄉", "瑪家鄉", "九如鄉", "里港鄉", "高樹鄉", "鹽埔鄉", "長治鄉", "麟洛鄉", "竹田鄉", "內埔鄉", "萬丹鄉", "潮州鎮", "泰武鄉", "來義鄉", "萬巒鄉", "崁頂鄉", "新埤鄉", "南州鄉", "林邊鄉", "東港鎮", "琉球鄉", "佳冬鄉", "新園鄉", "枋寮鄉", "枋山鄉", "春日鄉", "獅子鄉", "車城鄉", "牡丹鄉", "恆春鎮", "滿州鄉");
$config['area_ary']['V'] = array("台東市", "綠島鄉", "蘭嶼鄉", "延平鄉", "卑南鄉", "鹿野鄉", "關山鎮", "海端鄉", "池上鄉", "東河鄉", "成功鎮", "長濱鄉", "太麻里鄉", "金峰鄉", "大武鄉", "達仁鄉");
$config['area_ary']['U'] = array("花蓮市", "新城鄉", "秀林鄉", "吉安鄉", "壽豐鄉", "鳳林鎮", "光復鄉", "豐濱鄉", "瑞穗鄉", "萬榮鄉", "玉里鎮", "卓溪鄉", "富里鄉");
$config['area_ary']['W'] = array("金沙鎮", "金湖鎮", "金寧鄉", "金城鎮", "烈嶼鄉", "烏坵鄉");
$config['area_ary']['X'] = array("馬公市", "西嶼鄉", "望安鄉", "七美鄉", "白沙鄉", "湖西鄉");
$config['area_ary']['Z'] = array("南竿鄉", "北竿鄉", "莒光鄉", "東引鄉");

// 轉換 zipcode 為中文對應表
$config['aryZipCode']["100"] = array("台北市", "中正區");
$config['aryZipCode']["103"] = array("台北市", "大同區");
$config['aryZipCode']["104"] = array("台北市", "中山區");
$config['aryZipCode']["105"] = array("台北市", "松山區");
$config['aryZipCode']["106"] = array("台北市", "大安區");
$config['aryZipCode']["108"] = array("台北市", "萬華區");
$config['aryZipCode']["110"] = array("台北市", "信義區");
$config['aryZipCode']["111"] = array("台北市", "士林區");
$config['aryZipCode']["112"] = array("台北市", "北投區");
$config['aryZipCode']["114"] = array("台北市", "內湖區");
$config['aryZipCode']["115"] = array("台北市", "南港區");
$config['aryZipCode']["116"] = array("台北市", "文山區");
$config['aryZipCode']["200"] = array("基隆市", "仁愛區");
$config['aryZipCode']["201"] = array("基隆市", "信義區");
$config['aryZipCode']["202"] = array("基隆市", "中正區");
$config['aryZipCode']["203"] = array("基隆市", "中山區");
$config['aryZipCode']["204"] = array("基隆市", "安樂區");
$config['aryZipCode']["205"] = array("基隆市", "暖暖區");
$config['aryZipCode']["206"] = array("基隆市", "七堵區");
$config['aryZipCode']["207"] = array("新北市", "萬里區");
$config['aryZipCode']["208"] = array("新北市", "金山區");
$config['aryZipCode']["220"] = array("新北市", "板橋區");
$config['aryZipCode']["221"] = array("新北市", "汐止區");
$config['aryZipCode']["222"] = array("新北市", "深坑區");
$config['aryZipCode']["223"] = array("新北市", "石碇區");
$config['aryZipCode']["224"] = array("新北市", "瑞芳區");
$config['aryZipCode']["226"] = array("新北市", "平溪區");
$config['aryZipCode']["227"] = array("新北市", "雙溪區");
$config['aryZipCode']["228"] = array("新北市", "貢寮區");
$config['aryZipCode']["231"] = array("新北市", "新店區");
$config['aryZipCode']["232"] = array("新北市", "坪林區");
$config['aryZipCode']["233"] = array("新北市", "烏來區");
$config['aryZipCode']["234"] = array("新北市", "永和區");
$config['aryZipCode']["235"] = array("新北市", "中和區");
$config['aryZipCode']["236"] = array("新北市", "土城區");
$config['aryZipCode']["237"] = array("新北市", "三峽區");
$config['aryZipCode']["238"] = array("新北市", "樹林區");
$config['aryZipCode']["239"] = array("新北市", "鶯歌區");
$config['aryZipCode']["241"] = array("新北市", "三重區");
$config['aryZipCode']["242"] = array("新北市", "新莊區");
$config['aryZipCode']["243"] = array("新北市", "泰山區");
$config['aryZipCode']["244"] = array("新北市", "林口區");
$config['aryZipCode']["247"] = array("新北市", "蘆洲區");
$config['aryZipCode']["248"] = array("新北市", "五股區");
$config['aryZipCode']["249"] = array("新北市", "八里區");
$config['aryZipCode']["251"] = array("新北市", "淡水區");
$config['aryZipCode']["252"] = array("新北市", "三芝區");
$config['aryZipCode']["253"] = array("新北市", "石門區");
$config['aryZipCode']["260"] = array("宜蘭縣", "宜蘭市");
$config['aryZipCode']["261"] = array("宜蘭縣", "頭城鎮");
$config['aryZipCode']["262"] = array("宜蘭縣", "礁溪鄉");
$config['aryZipCode']["263"] = array("宜蘭縣", "壯圍鄉");
$config['aryZipCode']["264"] = array("宜蘭縣", "員山鄉");
$config['aryZipCode']["265"] = array("宜蘭縣", "羅東鎮");
$config['aryZipCode']["266"] = array("宜蘭縣", "三星鄉");
$config['aryZipCode']["267"] = array("宜蘭縣", "大同鄉");
$config['aryZipCode']["268"] = array("宜蘭縣", "五結鄉");
$config['aryZipCode']["269"] = array("宜蘭縣", "冬山鄉");
$config['aryZipCode']["270"] = array("宜蘭縣", "蘇澳鎮");
$config['aryZipCode']["272"] = array("宜蘭縣", "南澳鄉");
$config['aryZipCode']["300"] = array("新竹市", "");
$config['aryZipCode']["390"] = array("新竹市", "東區");  //虛擬
$config['aryZipCode']["391"] = array("新竹市", "北區");  //虛擬
$config['aryZipCode']["392"] = array("新竹市", "香山區");  //虛擬
$config['aryZipCode']["302"] = array("新竹縣", "竹北市");
$config['aryZipCode']["303"] = array("新竹縣", "湖口鄉");
$config['aryZipCode']["304"] = array("新竹縣", "新豐鄉");
$config['aryZipCode']["305"] = array("新竹縣", "新埔鎮");
$config['aryZipCode']["306"] = array("新竹縣", "關西鎮");
$config['aryZipCode']["307"] = array("新竹縣", "芎林鄉");
$config['aryZipCode']["308"] = array("新竹縣", "寶山鄉");
$config['aryZipCode']["310"] = array("新竹縣", "竹東鎮");
$config['aryZipCode']["311"] = array("新竹縣", "五峰鄉");
$config['aryZipCode']["312"] = array("新竹縣", "橫山鄉");
$config['aryZipCode']["313"] = array("新竹縣", "尖石鄉");
$config['aryZipCode']["314"] = array("新竹縣", "北埔鄉");
$config['aryZipCode']["315"] = array("新竹縣", "峨眉鄉");
$config['aryZipCode']["320"] = array("桃園市", "中壢區");
$config['aryZipCode']["324"] = array("桃園市", "平鎮區");
$config['aryZipCode']["325"] = array("桃園市", "龍潭區");
$config['aryZipCode']["326"] = array("桃園市", "楊梅區");
$config['aryZipCode']["327"] = array("桃園市", "新屋區");
$config['aryZipCode']["328"] = array("桃園市", "觀音區");
$config['aryZipCode']["330"] = array("桃園市", "桃園區");
$config['aryZipCode']["333"] = array("桃園市", "龜山區");
$config['aryZipCode']["334"] = array("桃園市", "八德區");
$config['aryZipCode']["335"] = array("桃園市", "大溪區");
$config['aryZipCode']["336"] = array("桃園市", "復興區");
$config['aryZipCode']["337"] = array("桃園市", "大園區");
$config['aryZipCode']["338"] = array("桃園市", "蘆竹區");
$config['aryZipCode']["350"] = array("苗栗縣", "竹南鎮");
$config['aryZipCode']["351"] = array("苗栗縣", "頭份市");
$config['aryZipCode']["352"] = array("苗栗縣", "三灣鄉");
$config['aryZipCode']["353"] = array("苗栗縣", "南庄鄉");
$config['aryZipCode']["354"] = array("苗栗縣", "獅潭鄉");
$config['aryZipCode']["356"] = array("苗栗縣", "後龍鎮");
$config['aryZipCode']["357"] = array("苗栗縣", "通霄鎮");
$config['aryZipCode']["358"] = array("苗栗縣", "苑裡鎮");
$config['aryZipCode']["360"] = array("苗栗縣", "苗栗市");
$config['aryZipCode']["361"] = array("苗栗縣", "造橋鄉");
$config['aryZipCode']["362"] = array("苗栗縣", "頭屋鄉");
$config['aryZipCode']["363"] = array("苗栗縣", "公館鄉");
$config['aryZipCode']["364"] = array("苗栗縣", "大湖鄉");
$config['aryZipCode']["365"] = array("苗栗縣", "泰安鄉");
$config['aryZipCode']["366"] = array("苗栗縣", "銅鑼鄉");
$config['aryZipCode']["367"] = array("苗栗縣", "三義鄉");
$config['aryZipCode']["368"] = array("苗栗縣", "西湖鄉");
$config['aryZipCode']["369"] = array("苗栗縣", "卓蘭鎮");
$config['aryZipCode']["400"] = array("台中市", "中區");
$config['aryZipCode']["401"] = array("台中市", "東區");
$config['aryZipCode']["402"] = array("台中市", "南區");
$config['aryZipCode']["403"] = array("台中市", "西區");
$config['aryZipCode']["404"] = array("台中市", "北區");
$config['aryZipCode']["406"] = array("台中市", "北屯區");
$config['aryZipCode']["407"] = array("台中市", "西屯區");
$config['aryZipCode']["408"] = array("台中市", "南屯區");
$config['aryZipCode']["411"] = array("台中市", "太平區");
$config['aryZipCode']["412"] = array("台中市", "大里區");
$config['aryZipCode']["413"] = array("台中市", "霧峰區");
$config['aryZipCode']["414"] = array("台中市", "烏日區");
$config['aryZipCode']["420"] = array("台中市", "豐原區");
$config['aryZipCode']["421"] = array("台中市", "后里區");
$config['aryZipCode']["422"] = array("台中市", "石岡區");
$config['aryZipCode']["423"] = array("台中市", "東勢區");
$config['aryZipCode']["424"] = array("台中市", "和平區");
$config['aryZipCode']["426"] = array("台中市", "新社區");
$config['aryZipCode']["427"] = array("台中市", "潭子區");
$config['aryZipCode']["428"] = array("台中市", "大雅區");
$config['aryZipCode']["429"] = array("台中市", "神岡區");
$config['aryZipCode']["432"] = array("台中市", "大肚區");
$config['aryZipCode']["433"] = array("台中市", "沙鹿區");
$config['aryZipCode']["434"] = array("台中市", "龍井區");
$config['aryZipCode']["435"] = array("台中市", "梧棲區");
$config['aryZipCode']["436"] = array("台中市", "清水區");
$config['aryZipCode']["437"] = array("台中市", "大甲區");
$config['aryZipCode']["438"] = array("台中市", "外埔區");
$config['aryZipCode']["439"] = array("台中市", "大安區");
$config['aryZipCode']["500"] = array("彰化縣", "彰化市");
$config['aryZipCode']["502"] = array("彰化縣", "芬園鄉");
$config['aryZipCode']["503"] = array("彰化縣", "花壇鄉");
$config['aryZipCode']["504"] = array("彰化縣", "秀水鄉");
$config['aryZipCode']["505"] = array("彰化縣", "鹿港鎮");
$config['aryZipCode']["506"] = array("彰化縣", "福興鄉");
$config['aryZipCode']["507"] = array("彰化縣", "線西鄉");
$config['aryZipCode']["508"] = array("彰化縣", "和美鎮");
$config['aryZipCode']["509"] = array("彰化縣", "伸港鄉");
$config['aryZipCode']["510"] = array("彰化縣", "員林市");
$config['aryZipCode']["511"] = array("彰化縣", "社頭鄉");
$config['aryZipCode']["512"] = array("彰化縣", "永靖鄉");
$config['aryZipCode']["513"] = array("彰化縣", "埔心鄉");
$config['aryZipCode']["514"] = array("彰化縣", "溪湖鎮");
$config['aryZipCode']["515"] = array("彰化縣", "大村鄉");
$config['aryZipCode']["516"] = array("彰化縣", "埔鹽鄉");
$config['aryZipCode']["520"] = array("彰化縣", "田中鎮");
$config['aryZipCode']["521"] = array("彰化縣", "北斗鎮");
$config['aryZipCode']["522"] = array("彰化縣", "田尾鄉");
$config['aryZipCode']["523"] = array("彰化縣", "埤頭鄉");
$config['aryZipCode']["524"] = array("彰化縣", "溪州鄉");
$config['aryZipCode']["525"] = array("彰化縣", "竹塘鄉");
$config['aryZipCode']["526"] = array("彰化縣", "二林鎮");
$config['aryZipCode']["527"] = array("彰化縣", "大城鄉");
$config['aryZipCode']["528"] = array("彰化縣", "芳苑鄉");
$config['aryZipCode']["530"] = array("彰化縣", "二水鄉");
$config['aryZipCode']["540"] = array("南投縣", "南投市");
$config['aryZipCode']["541"] = array("南投縣", "中寮鄉");
$config['aryZipCode']["542"] = array("南投縣", "草屯鎮");
$config['aryZipCode']["544"] = array("南投縣", "國姓鄉");
$config['aryZipCode']["545"] = array("南投縣", "埔里鎮");
$config['aryZipCode']["546"] = array("南投縣", "仁愛鄉");
$config['aryZipCode']["551"] = array("南投縣", "名間鄉");
$config['aryZipCode']["552"] = array("南投縣", "集集鎮");
$config['aryZipCode']["553"] = array("南投縣", "水里鄉");
$config['aryZipCode']["555"] = array("南投縣", "魚池鄉");
$config['aryZipCode']["556"] = array("南投縣", "信義鄉");
$config['aryZipCode']["557"] = array("南投縣", "竹山鎮");
$config['aryZipCode']["558"] = array("南投縣", "鹿谷鄉");
$config['aryZipCode']["600"] = array("嘉義市", "");
$config['aryZipCode']["690"] = array("嘉義市", "東區"); //虛擬
$config['aryZipCode']["691"] = array("嘉義市", "西區"); //虛擬
$config['aryZipCode']["602"] = array("嘉義縣", "番路鄉");
$config['aryZipCode']["603"] = array("嘉義縣", "梅山鄉");
$config['aryZipCode']["604"] = array("嘉義縣", "竹崎鄉");
$config['aryZipCode']["605"] = array("嘉義縣", "阿里山鄉");
$config['aryZipCode']["606"] = array("嘉義縣", "中埔鄉");
$config['aryZipCode']["607"] = array("嘉義縣", "大埔鄉");
$config['aryZipCode']["608"] = array("嘉義縣", "水上鄉");
$config['aryZipCode']["611"] = array("嘉義縣", "鹿草鄉");
$config['aryZipCode']["612"] = array("嘉義縣", "太保市");
$config['aryZipCode']["613"] = array("嘉義縣", "朴子市");
$config['aryZipCode']["614"] = array("嘉義縣", "東石鄉");
$config['aryZipCode']["615"] = array("嘉義縣", "六腳鄉");
$config['aryZipCode']["616"] = array("嘉義縣", "新港鄉");
$config['aryZipCode']["621"] = array("嘉義縣", "民雄鄉");
$config['aryZipCode']["622"] = array("嘉義縣", "大林鎮");
$config['aryZipCode']["623"] = array("嘉義縣", "溪口鄉");
$config['aryZipCode']["624"] = array("嘉義縣", "義竹鄉");
$config['aryZipCode']["625"] = array("嘉義縣", "布袋鎮");
$config['aryZipCode']["630"] = array("雲林縣", "斗南鎮");
$config['aryZipCode']["631"] = array("雲林縣", "大埤鄉");
$config['aryZipCode']["632"] = array("雲林縣", "虎尾鎮");
$config['aryZipCode']["633"] = array("雲林縣", "土庫鎮");
$config['aryZipCode']["634"] = array("雲林縣", "褒忠鄉");
$config['aryZipCode']["635"] = array("雲林縣", "東勢鄉");
$config['aryZipCode']["636"] = array("雲林縣", "台西鄉");
$config['aryZipCode']["637"] = array("雲林縣", "崙背鄉");
$config['aryZipCode']["638"] = array("雲林縣", "麥寮鄉");
$config['aryZipCode']["640"] = array("雲林縣", "斗六市");
$config['aryZipCode']["643"] = array("雲林縣", "林內鄉");
$config['aryZipCode']["646"] = array("雲林縣", "古坑鄉");
$config['aryZipCode']["647"] = array("雲林縣", "莿桐鄉");
$config['aryZipCode']["648"] = array("雲林縣", "西螺鎮");
$config['aryZipCode']["649"] = array("雲林縣", "二崙鄉");
$config['aryZipCode']["651"] = array("雲林縣", "北港鎮");
$config['aryZipCode']["652"] = array("雲林縣", "水林鄉");
$config['aryZipCode']["653"] = array("雲林縣", "口湖鄉");
$config['aryZipCode']["654"] = array("雲林縣", "四湖鄉");
$config['aryZipCode']["655"] = array("雲林縣", "元長鄉");
$config['aryZipCode']["700"] = array("台南市", "中西區");
$config['aryZipCode']["701"] = array("台南市", "東區");
$config['aryZipCode']["702"] = array("台南市", "南區");
$config['aryZipCode']["704"] = array("台南市", "北區");
$config['aryZipCode']["708"] = array("台南市", "安平區");
$config['aryZipCode']["709"] = array("台南市", "安南區");
$config['aryZipCode']["710"] = array("台南市", "永康區");
$config['aryZipCode']["711"] = array("台南市", "歸仁區");
$config['aryZipCode']["712"] = array("台南市", "新化區");
$config['aryZipCode']["713"] = array("台南市", "左鎮區");
$config['aryZipCode']["714"] = array("台南市", "玉井區");
$config['aryZipCode']["715"] = array("台南市", "楠西區");
$config['aryZipCode']["716"] = array("台南市", "南化區");
$config['aryZipCode']["717"] = array("台南市", "仁德區");
$config['aryZipCode']["718"] = array("台南市", "關廟區");
$config['aryZipCode']["719"] = array("台南市", "龍崎區");
$config['aryZipCode']["720"] = array("台南市", "官田區");
$config['aryZipCode']["721"] = array("台南市", "麻豆區");
$config['aryZipCode']["722"] = array("台南市", "佳里區");
$config['aryZipCode']["723"] = array("台南市", "西港區");
$config['aryZipCode']["724"] = array("台南市", "七股區");
$config['aryZipCode']["725"] = array("台南市", "將軍區");
$config['aryZipCode']["726"] = array("台南市", "學甲區");
$config['aryZipCode']["727"] = array("台南市", "北門區");
$config['aryZipCode']["730"] = array("台南市", "新營區");
$config['aryZipCode']["731"] = array("台南市", "後壁區");
$config['aryZipCode']["732"] = array("台南市", "白河區");
$config['aryZipCode']["733"] = array("台南市", "東山區");
$config['aryZipCode']["734"] = array("台南市", "六甲區");
$config['aryZipCode']["735"] = array("台南市", "下營區");
$config['aryZipCode']["736"] = array("台南市", "柳營區");
$config['aryZipCode']["737"] = array("台南市", "鹽水區");
$config['aryZipCode']["741"] = array("台南市", "善化區");
$config['aryZipCode']["742"] = array("台南市", "大內區");
$config['aryZipCode']["743"] = array("台南市", "山上區");
$config['aryZipCode']["744"] = array("台南市", "新市區");
$config['aryZipCode']["745"] = array("台南市", "安定區");
$config['aryZipCode']["800"] = array("高雄市", "新興區");
$config['aryZipCode']["801"] = array("高雄市", "前金區");
$config['aryZipCode']["802"] = array("高雄市", "苓雅區");
$config['aryZipCode']["803"] = array("高雄市", "鹽埕區");
$config['aryZipCode']["804"] = array("高雄市", "鼓山區");
$config['aryZipCode']["805"] = array("高雄市", "旗津區");
$config['aryZipCode']["806"] = array("高雄市", "前鎮區");
$config['aryZipCode']["807"] = array("高雄市", "三民區");
$config['aryZipCode']["811"] = array("高雄市", "楠梓區");
$config['aryZipCode']["812"] = array("高雄市", "小港區");
$config['aryZipCode']["813"] = array("高雄市", "左營區");
$config['aryZipCode']["814"] = array("高雄市", "仁武區");
$config['aryZipCode']["815"] = array("高雄市", "大社區");
$config['aryZipCode']["820"] = array("高雄市", "岡山區");
$config['aryZipCode']["821"] = array("高雄市", "路竹區");
$config['aryZipCode']["822"] = array("高雄市", "阿蓮區");
$config['aryZipCode']["823"] = array("高雄市", "田寮區");
$config['aryZipCode']["824"] = array("高雄市", "燕巢區");
$config['aryZipCode']["825"] = array("高雄市", "橋頭區");
$config['aryZipCode']["826"] = array("高雄市", "梓官區");
$config['aryZipCode']["827"] = array("高雄市", "彌陀區");
$config['aryZipCode']["828"] = array("高雄市", "永安區");
$config['aryZipCode']["829"] = array("高雄市", "湖內區");
$config['aryZipCode']["830"] = array("高雄市", "鳳山區");
$config['aryZipCode']["831"] = array("高雄市", "大寮區");
$config['aryZipCode']["832"] = array("高雄市", "林園區");
$config['aryZipCode']["833"] = array("高雄市", "鳥松區");
$config['aryZipCode']["840"] = array("高雄市", "大樹區");
$config['aryZipCode']["842"] = array("高雄市", "旗山區");
$config['aryZipCode']["843"] = array("高雄市", "美濃區");
$config['aryZipCode']["844"] = array("高雄市", "六龜區");
$config['aryZipCode']["845"] = array("高雄市", "內門區");
$config['aryZipCode']["846"] = array("高雄市", "杉林區");
$config['aryZipCode']["847"] = array("高雄市", "甲仙區");
$config['aryZipCode']["848"] = array("高雄市", "桃源區");
$config['aryZipCode']["849"] = array("高雄市", "那瑪夏區");
$config['aryZipCode']["851"] = array("高雄市", "茂林區");
$config['aryZipCode']["852"] = array("高雄市", "茄萣區");
$config['aryZipCode']["900"] = array("屏東縣", "屏東市");
$config['aryZipCode']["901"] = array("屏東縣", "三地門鄉");
$config['aryZipCode']["902"] = array("屏東縣", "霧台鄉");
$config['aryZipCode']["903"] = array("屏東縣", "瑪家鄉");
$config['aryZipCode']["904"] = array("屏東縣", "九如鄉");
$config['aryZipCode']["905"] = array("屏東縣", "里港鄉");
$config['aryZipCode']["906"] = array("屏東縣", "高樹鄉");
$config['aryZipCode']["907"] = array("屏東縣", "鹽埔鄉");
$config['aryZipCode']["908"] = array("屏東縣", "長治鄉");
$config['aryZipCode']["909"] = array("屏東縣", "麟洛鄉");
$config['aryZipCode']["911"] = array("屏東縣", "竹田鄉");
$config['aryZipCode']["912"] = array("屏東縣", "內埔鄉");
$config['aryZipCode']["913"] = array("屏東縣", "萬丹鄉");
$config['aryZipCode']["920"] = array("屏東縣", "潮州鎮");
$config['aryZipCode']["921"] = array("屏東縣", "泰武鄉");
$config['aryZipCode']["922"] = array("屏東縣", "來義鄉");
$config['aryZipCode']["923"] = array("屏東縣", "萬巒鄉");
$config['aryZipCode']["924"] = array("屏東縣", "崁頂鄉");
$config['aryZipCode']["925"] = array("屏東縣", "新埤鄉");
$config['aryZipCode']["926"] = array("屏東縣", "南州鄉");
$config['aryZipCode']["927"] = array("屏東縣", "林邊鄉");
$config['aryZipCode']["928"] = array("屏東縣", "東港鎮");
$config['aryZipCode']["929"] = array("屏東縣", "琉球鄉");
$config['aryZipCode']["931"] = array("屏東縣", "佳冬鄉");
$config['aryZipCode']["932"] = array("屏東縣", "新園鄉");
$config['aryZipCode']["940"] = array("屏東縣", "枋寮鄉");
$config['aryZipCode']["941"] = array("屏東縣", "枋山鄉");
$config['aryZipCode']["942"] = array("屏東縣", "春日鄉");
$config['aryZipCode']["943"] = array("屏東縣", "獅子鄉");
$config['aryZipCode']["944"] = array("屏東縣", "車城鄉");
$config['aryZipCode']["945"] = array("屏東縣", "牡丹鄉");
$config['aryZipCode']["946"] = array("屏東縣", "恆春鎮");
$config['aryZipCode']["947"] = array("屏東縣", "滿州鄉");
$config['aryZipCode']["950"] = array("台東縣", "台東市");
$config['aryZipCode']["951"] = array("台東縣", "綠島鄉");
$config['aryZipCode']["952"] = array("台東縣", "蘭嶼鄉");
$config['aryZipCode']["953"] = array("台東縣", "延平鄉");
$config['aryZipCode']["954"] = array("台東縣", "卑南鄉");
$config['aryZipCode']["955"] = array("台東縣", "鹿野鄉");
$config['aryZipCode']["956"] = array("台東縣", "關山鎮");
$config['aryZipCode']["957"] = array("台東縣", "海端鄉");
$config['aryZipCode']["958"] = array("台東縣", "池上鄉");
$config['aryZipCode']["959"] = array("台東縣", "東河鄉");
$config['aryZipCode']["961"] = array("台東縣", "成功鎮");
$config['aryZipCode']["962"] = array("台東縣", "長濱鄉");
$config['aryZipCode']["963"] = array("台東縣", "太麻里鄉");
$config['aryZipCode']["964"] = array("台東縣", "金峰鄉");
$config['aryZipCode']["965"] = array("台東縣", "大武鄉");
$config['aryZipCode']["966"] = array("台東縣", "達仁鄉");
$config['aryZipCode']["970"] = array("花蓮縣", "花蓮市");
$config['aryZipCode']["971"] = array("花蓮縣", "新城鄉");
$config['aryZipCode']["972"] = array("花蓮縣", "秀林鄉");
$config['aryZipCode']["973"] = array("花蓮縣", "吉安鄉");
$config['aryZipCode']["974"] = array("花蓮縣", "壽豐鄉");
$config['aryZipCode']["975"] = array("花蓮縣", "鳳林鎮");
$config['aryZipCode']["976"] = array("花蓮縣", "光復鄉");
$config['aryZipCode']["977"] = array("花蓮縣", "豐濱鄉");
$config['aryZipCode']["978"] = array("花蓮縣", "瑞穗鄉");
$config['aryZipCode']["979"] = array("花蓮縣", "萬榮鄉");
$config['aryZipCode']["981"] = array("花蓮縣", "玉里鎮");
$config['aryZipCode']["982"] = array("花蓮縣", "卓溪鄉");
$config['aryZipCode']["983"] = array("花蓮縣", "富里鄉");
$config['aryZipCode']["890"] = array("金門縣", "金沙鎮");
$config['aryZipCode']["891"] = array("金門縣", "金湖鎮");
$config['aryZipCode']["892"] = array("金門縣", "金寧鄉");
$config['aryZipCode']["893"] = array("金門縣", "金城鎮");
$config['aryZipCode']["894"] = array("金門縣", "烈嶼鄉");
$config['aryZipCode']["896"] = array("金門縣", "烏坵鄉");
$config['aryZipCode']["880"] = array("澎湖縣", "馬公市");
$config['aryZipCode']["881"] = array("澎湖縣", "西嶼鄉");
$config['aryZipCode']["882"] = array("澎湖縣", "望安鄉");
$config['aryZipCode']["883"] = array("澎湖縣", "七美鄉");
$config['aryZipCode']["884"] = array("澎湖縣", "白沙鄉");
$config['aryZipCode']["885"] = array("澎湖縣", "湖西鄉");
$config['aryZipCode']["209"] = array("連江縣", "南竿鄉");
$config['aryZipCode']["210"] = array("連江縣", "北竿鄉");
$config['aryZipCode']["211"] = array("連江縣", "莒光鄉");
$config['aryZipCode']["212"] = array("連江縣", "東引鄉");

$first = true;
echo "DROP TABLE $table_name; <BR>\r\n";
echo "
CREATE TABLE $table_name (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enterprise_id` int(11) DEFAULT NULL,
  `region` varchar(16) DEFAULT NULL,
  `region_sort` int(11) DEFAULT '0',
  `city_code` varchar(16) DEFAULT NULL,
  `post_code` varchar(16) DEFAULT NULL,
  `city_name` varchar(16) DEFAULT NULL,
  `area_name` varchar(16) DEFAULT NULL,
  `available` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;<BR>\r\n";

echo "TRUNCATE TABLE $table_name;<BR>\r\n";

// ==============================================================================================================================================================
// 符合 資料
// ==============================================================================================================================================================
// 轉換 zipcode 為中文對應表
echo "INSERT INTO $table_name (`city_code`, `city_name`, `post_code`, `area_name`, `available`, `enterprise_id`) VALUES <br>\r\n";
include_once("zip_code_to_sql_data.php");
foreach ($config_list as $row)
{
    $region_sort = 1;
    foreach ($row as $post_code => $enterprise_id)
    {
        $zip_code_data = $config['aryZipCode'][$post_code];
        $city_name = $zip_code_data[0];
        $area_name = $zip_code_data[1];
        $city_code = $config['city_code_flip'][$city_name];
        if ($first) {
            echo "(";
            $first = false;
        } else {
            echo "),<br>\r\n(";
        }
        echo "'$city_code',";
        echo "'$city_name',";
        echo "'$post_code', ";
        echo "'$area_name', ";
        echo "1, ";
        echo $enterprise_id;
        $region_sort++;
    }
}
echo ");<br>\r\n";
/*
exit;
foreach ($config['aryZipCode'] as $post_code => $val)
{
    $city_name = $val[0];
    $area_name = $val[1];
    $city_code = $config['city_code_flip'][$city_name];
    if ($first) {
        echo "(";
        $first = false;
    } else {
        echo "),<br>\r\n(";
    }
    echo "'$city_code',";
    echo "'$city_name',";
    echo "'$post_code', ";
    echo "'$area_name', ";
    echo "1";
}
echo ");<br>\r\n";
*/

$region_sort = 1;
foreach ($config['region'] as $key => $val)
{
    $in = implode("','",$val);
    echo "UPDATE $table_name SET `region` = '$key', `region_sort` = $region_sort WHERE `city_code` IN ('$in'); ";
    echo "<BR>\r\n";
    $region_sort++;
}
