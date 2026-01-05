<?php
// $s =fn($aii) => "shhhjk";
// echo $s();
// echo '<br>';

// $mas="hi";
// $say = function ($name) use ($mas){
// return"$name $mas";
// };
// echo $say("ali");
// $num =[10,15,20,30,40];
// $nums = array_map(function ($item){return $item + 10;},$num);
// echo '<pre>';
// print_r($nums);
// echo '</pre>';
// echo strtolower("ALI ALAAMTI") ."<br>";
// echo strtoupper("alialaamri") ."<br>";
// echo str_repeat("ali", 10)."<br>";
// echo ucwords("ali alaamr|web ","|") ."<br>";
// $frids=["ahmed","ali","mohamed","salem"];
// echo implode("  ", $frids)."<br>";
// echo implode("# ", $frids)."<br>";
// parse_str("name=ali&email=o@.a&al=ali",$da);
// echo'<pre>';
// print_r($da);
// echo'<pre>';

// echo $da["name"]."<br>";
// echo $da["email"]."<br>";
// echo $da["al"]."<br>";
// echo str_pad("10",8,0,STR_PAD_BOTH)."<br>";
// echo str_pad("1012",8,0,STR_PAD_LEFT)."<br>";
// echo str_pad("10022",8,0)."<br>";
// echo str_pad("101222",8,0)."<br>";
// echo str_pad("1055555",8,0)."<br>";
// echo "<br>";
// $strlatoin=["#"=>"a","@"=>"m"];
// echo strtr("ali alaamri", $strlatoin);
// echo str_replace("%","a","%lial%%mri",$s);
// echo "<br>";
// echo "Repl aes cont is $s";
// echo '<pre>';
// print_r(str_replace("one",1,["one","tow","three","for"]));
// echo '<pre>';
// print_r(str_replace(["One","Tow","three"],[1,1,1,1],["one","tow","three","for"]));
// echo '<pre>';

// connectoin_database######################################################################################################


// $dns = "mysql:host=localhost;dbname=my_d";
// $user = "root";
// $pass = "";

// $opt=array(
//     PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
// );
// try{
// $con =new PDO($dns, $user, $pass,$opt);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $q ="INSERT INTO student (name) VALUES ('علي العمري')";
// $con->exec($q);

// }
// catch(PDOException $e){
//     echo "failed to connect".$e->getMessage();
// }








//الجلسات 
// session_start();

// $_SESSION['name']=" ali";
// isset($_SESSION['name']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;
// echo "hello". $_SESSION ['name']."views conut is ". $_SESSION['views'];
// echo "<a href= about.php>About</a>";

// $chars=["a","b","c","d","e"];
// echo '<pre>';
// print_r($chars);
// echo '<pre>';
// $frisr= array_shift($chars);
// echo "$frisr <br>";
// print_r($chars);





// print_r($chars);

// $last= array_pop($chars);
// echo "$last <br>";
// print_r($chars);

// array_push($chars ,"f","g");

// echo '<pre>';
// print_r($chars);
// echo '<pre>';


// array_unshift($chars ,"ali","alaamri");

// echo '<pre>';
// print_r($chars);
// echo '<pre>';
$chars=["a","b","c","d","e"];
$cars_with=["a"=>1,"b" =>2,"c"=>3];
$chars_keys=[10=>1,20=>2,30=>3];
echo'<pre>';
print_r($chars,2);
echo'<pre>';








🔵 أهم دوال المصفوفات في PHP (Array Functions)

هذه هي أهم الدوال التي يحتاجها أي مبرمج PHP:

🔹 الإضافة والحذف

array_push() → إضافة عناصر إلى نهاية المصفوفة

array_pop() → حذف آخر عنصر

array_unshift() → إضافة عنصر إلى البداية

array_shift() → حذف أول عنصر

🔹 البحث

in_array() → البحث عن قيمة داخل المصفوفة

array_search() → إرجاع مفتاح العنصر

🔹 الفرز (Sorting)

sort() → ترتيب تصاعدي

rsort() → ترتيب تنازلي

asort() → ترتيب حسب القيمة مع الاحتفاظ بالمفتاح

ksort() → ترتيب حسب المفتاح

krsort() → ترتيب حسب المفتاح (تنازلي)

🔹 التعامل مع أجزاء المصفوفة

array_slice() → قص جزء من المصفوفة

array_splice() → إزالة/استبدال جزء من المصفوفة

🔹 الدمج والتحويل

array_merge() → دمج المصفوفات

array_combine() → دمج مفاتيح وقيم في مصفوفة واحدة

implode() → تحويل مصفوفة إلى نص

explode() → تحويل نص إلى مصفوفة

🔹 معلومات حول المصفوفة

count() → عدد العناصر

array_keys() → جلب جميع المفاتيح

array_values() → جلب جميع القيم

🔹 عمليات متقدمة

array_map() → تطبيق دالة على كل عنصر

array_filter() → تصفية المصفوفة

array_reduce() → تقليل عناصر المصفوفة لقيمة واحدة

array_unique() → إزالة العناصر المكررة

🔵 أهم دوال النصوص في PHP (String Functions)
🔹 معالجة الحروف

strlen() → طول النص

strtoupper() → تحويل إلى حروف كبيرة

strtolower() → تحويل إلى حروف صغيرة

ucfirst() → أول حرف كبير

lcfirst() → أول حرف صغير

ucwords() → أول حرف كبير لكل كلمة

🔹 البحث

strpos() → إيجاد أول ظهور لكلمة

strrpos() → إيجاد آخر ظهور

str_contains() → هل يحتوي النص على كلمة؟

str_starts_with() → هل يبدأ النص بكلمة؟

str_ends_with() → هل ينتهي بكلمة؟

🔹 القص والتقسيم

substr() → قص جزء من النص

explode() → تحويل نص إلى مصفوفة

implode() → تحويل مصفوفة إلى نص

🔹 الاستبدال

str_replace() → استبدال كلمة

preg_replace() → استبدال باستخدام Regex

🔹 إزالة المسافات

trim() → حذف المسافات من الطرفين

ltrim() → حذف مسافات اليسار

rtrim() → مسافات اليمين

🔹 التحويل والترميز

htmlspecialchars() → تحويل HTML إلى نص آمن

htmlentities() → تحويل جميع الرموز إلى كيانات HTML

addslashes() → إضافة Backslashes

stripslashes() → إزالة Backslashes

اريد شرح مثال لكل دالة بنفس الطريقة في الاسفل
دوال المصفوفات ودوال النصوص في PHP مع أمثلة وشرح داخل التعليقات

🔵 دوال المصفوفات Arrays

    // إضافة عناصر جديدة إلى آخر المصفوفة
    $nums = [1, 2];
    array_push($nums, 3, 4); // إضافة 3 و 4
    print_r($nums);

    // حذف آخر عنصر من المصفوفة وإرجاعه
    $names = ["Ali", "Sara", "Mona"];
    $last = array_pop($names); // يحذف Mona

    // حذف أول عنصر في المصفوفة
    $items = ["banana", "apple", "mango"];
    array_shift($items); // يحذف banana

    // إضافة عنصر أو أكثر إلى بداية المصفوفة
    $colors = ["Blue", "Red"];
    array_unshift($colors, "Green"); // إضافة Green

    // دمج مصفوفتين معاً
    $a = [1, 2];
    $b = [3, 4];
    $c = array_merge($a, $b); // النتيجة [1,2,3,4]

    // قص جزء من المصفوفة
    $arr = ["a","b","c","d"];
    $part = array_slice($arr, 1, 2); // النتيجة ["b","c"]

    // عكس ترتيب عناصر المصفوفة
    $arr = [1,2,3];
    $rev = array_reverse($arr); // النتيجة [3,2,1]

    // البحث عن قيمة داخل المصفوفة
    in_array("Ali", ["Ahmed","Ali","Sara"]); // يرجع true

    // إرجاع مفتاح (Index) عنصر داخل المصفوفة
    array_search("red", ["blue","red","green"]); // يرجع 1

    // عدّ عدد عناصر المصفوفة
    count([1,2,3]); // الناتج 3

    // ترتيب مصفوفة تصاعدياً
    $nums = [3,1,2];
    sort($nums); // النتيجة [1,2,3]

------------------------------------------------------------------------

🔵 دوال النصوص Strings

    // حساب طول النص
    strlen("Hello"); // 5

    // تحويل النص إلى حروف كبيرة
    strtoupper("hello"); // HELLO

    // تحويل النص إلى حروف صغيرة
    strtolower("HELLO"); // hello

    // تحويل أول حرف إلى حرف كبير
    ucfirst("hello world"); // Hello world

    // قص جزء من النص
    substr("abcdef", 1, 3); // bcd

    // استبدال كلمة داخل النص
    str_replace("world", "Ali", "Hello world"); // Hello Ali

    // تحويل نص إلى مصفوفة حسب فاصل معين
    explode(",", "Ali,Sara,Mona"); // ["Ali","Sara","Mona"]

    // تحويل مصفوفة إلى نص
    implode("-", ["Ali","Sara","Mona"]); // Ali-Sara-Mona

    // حذف المسافات في بداية ونهاية النص
    trim("   Hello   "); // "Hello"

    // إيجاد أول ظهور لكلمة داخل النص
    strpos("Hello World", "World"); // النتيجة 6

