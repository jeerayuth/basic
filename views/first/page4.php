<?php

echo $name;
echo "<hr/>";
$link1 = Yii::$app->urlManager->createUrl([
    'first/page4',
    'xname'=>'Jeerayuth',
    'yname'=>'Pinsuwan'
]);
echo "<hr/>";

$link2 = Yii::$app->urlManager->createUrl([
    'first/page4',
    'xname'=>'จีระยุทธ',
    'yname'=>'ปิ่นสุวรรณ'
]);
echo "<hr/>";

?>

<a href="<?= $link1; ?>">ส่งค่า ภาษาอังกฤษ </a>
<hr/>
<a href="<?= $link2; ?>">ส่งค่า ภาษาไทย </a>