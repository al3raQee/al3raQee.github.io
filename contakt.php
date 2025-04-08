<?php
$file = "counter.txt";

// تحقق إذا كان الملف موجود، إذا لم يكن فأنشئه وضع القيمة 0
if(!file_exists($file)){
    file_put_contents($file, "0");
}

// اقرأ العدد الحالي
$count = (int)file_get_contents($file);

// زيد العدد بواحد
$count++;

// احفظ العدد الجديد في الملف
file_put_contents($file, $count);

// اعرض العدد
echo "عدد الزوار: " . $count;
?>
