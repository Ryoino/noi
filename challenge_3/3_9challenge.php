<?php
$my_profile = array(
  'id' => '0912',
  '名前' => '井上良太',
  '生年月日'=>'1990年09月12日',
  '住所' => '宮城県栗原市若柳',

  'id1' => '0731',
  '名前1' => '松田大地',
  '生年月日1' => '1990年7月31日',
  '住所1' => '宮城県栗原市築館',

  'id2' => '0917',
  '名前2' => '小野勇一',
  '生年月日2' => '1990月9月17日',
  '住所2' => '東京都町田市鶴間',
);

foreach($my_profile as $key => $value){
    if($key == 'id' || $key == '住所' ||
      $key == 'id1' || $key == '住所1'||
      $key == 'id2' || $key == '住所2') {
    continue;
}
echo $value;
}

?>
