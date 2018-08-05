<h1>Изучаем PHP 7. Руководство по созданию интерактивных веб-сайтов. Дэвид Скляр</h1>
<?php
/**
 * Изучаем PHP 7. Руководство по созданию интерактивных веб-сайтов. Дэвид Скляр
 */
echo '<pre><hr>
    <b>Task #2</b>
    Напишите на PHP программу, вычисляющую общую стоимость трапезы в ресторане, состо-
    ящей из двух гамбургеров по 4,95 доллара каждый, одного молочно-шоколадного коктейля
    за 1,95 доллара и одной порции кока-колы за 0,85 доллара. Ставка налога на добавленную
    стоимость составляет 7,5%, а чаевые без вычета налогов — 16%.
</pre>';
function trapeza()
{
    $gamburger = 4.95;
    $cocteil = 1.95;
    $cola = 0.85;
    $nalog = 7.5;
    $chaevie = 16;
    $total = ($gamburger * 2 + $cocteil + $cola) / 100 * (100 + $nalog) + ($gamburger * 2 + $cocteil + $cola) / 100 * $chaevie;

    return number_format($total, 2, '.', ' ');
}

echo '<pre>';
echo 'Стоимость трапезы = ' . trapeza();
echo '</pre>';

echo '<pre><hr>
    <b>Task #3</b>
    Видоизмените программу из предыдущего упражнения, чтобы вывести счет в отформатирован- ном виде.
    В частности, выведите сначала цену и количество каждого блюда вместе с общей стоимостью трапезы,
    а затем общую стоимость еды и напитков как без учета, так и с учетом налога на добавленную стоимость и чаевых.
    Непременно выровняйте цены в выводимом счете по вертикали.
</pre>';
$hamburger = 4.95;
$shake = 1.95;
$cola = 0.85;
$tip_rate = 0.16;
$tax_rate = 0.075;
$food = number_format((2 * $hamburger) + $shake + $cola, 2, '.', ' ');
$tip = number_format($food * $tip_rate, 2, '.', ' ');
$tax = number_format($food * $tax_rate, 2, '.', ' ');
$total = number_format($food + $tip + $tax, 2, '.', ' ');

echo '<pre>';
echo 'Стоимость бургеров 2шт по ' . $hamburger . ' = ' . 2 * $hamburger . '$';
echo '<br>Стоимость коктейля ' . $shake . '$';
echo '<br>Стоимость колы ' . $cola . '$';
echo '<br>Стоимость трапезы без учета налогов и чаевых = ' . $food . '$';
echo '<br>Чаевые ' . $tip . '$';
echo '<br>Налог ' . $tax . '$';
echo '<br>Трапеза + налог + чаевые = ' . $total . '$';
echo '</pre>';
////////////////////////////////////////////////////////////////////////////////

echo "<pre><hr>
    <b>Task #4</b>.
    Напишите на РНР программу, задающую имя в переменной $first_name и фамилию в переменной $last_name.
    Выведите символьную строку, содержащую имя и фамилию, разделив их пробелом.
    Кроме того, выведите длину этой символьной строки.
</pre>";
$first_name = 'Артем';
$last_name = 'Кузнецов';
$string = "Вас приветствует {$first_name} {$last_name} на этой странице.";
$string_count = iconv_strlen($string) . ' символов.';
echo "{$string} - Длина этого текста составляет: {$string_count}";
////////////////////////////////////////////////////////////////////////////////

echo '<pre><hr>
    <b>Task #5.</b> Напишите на РНР программу, в которой применяются составные операции инкрементирования (++)
    и умножения с присваиванием (*=), для вывода чисел в пределах от 1 до 5,
    а также степеней числа 2 в пределах от 2 (2**1) до 32 (2**5).
';
$i = 1;
while ($i <= 5) {
    echo "Инкремент: {$i}<br>";
    echo 'Степень: ' . 2 ** $i . '<br>'; // степень с помощью **
    ++$i;
}
echo '</pre>';
////////////////////////////////////////////////////////////////////////////////

echo '<pre><hr><b>
    стр. 69
    1. Определить истинность или ложность без интерпритатора PHP:
</b>
    100.00 - 100 // число 0 равно FALSE
    "zero" // приведение в булево строка равна TRUE
    "false" // строка начинающаяся с буквы в переводе на булево становится TRUE
    0 + "true"; // приведение к числу 0+0 дает FALSE
    0.000 // 0 равно FALSE
    "0.0" // строка сама по себе равна TRUE
    strcmp("false", "False") // отдает положительное число потому что f идет после F в лексиграфическом словаре PHP и значить f>F а значит TRUE
    0 <=> "0" // false, выдаст 0, а ноль это FALSE
<br>';

var_dump((bool)100.00 - 100);
var_dump((bool)'zero');
var_dump((bool)'false');
var_dump((bool)0 + 'true');
var_dump((bool)0.000);
var_dump('0.0');
var_dump('false');
var_dump('False');
var_dump(strcmp('false', 'False'));
// var_dump( 0 <=> "0" );

echo '</pre>';
////////////////////////////////////////////////////////////////////////////////

echo '<pre><hr><b>
    стр. 70
    Задание 2. Выясните резултат выражения:
</b>
    $age = 12;
    $shoe_size = 13;
    if ($age > $shoe_size)
        print "Message 1.";
    elseif (($shoe_size++) && ($age > 20)) // в конструкции был произведен инкремент $shoe_size++
        print "Message 2.";
    else
        print "Message 3.";
        print "Age: $age. Shoe Size: $shoe_size";

        Ответ:
        Message 3.Age: 12. Shoe Size: 14
<br>';
$age = 12;
$shoe_size = 13;
if ($age > $shoe_size) {
    echo 'Message 1.';
} elseif (($shoe_size++) && ($age > 20)) {
    echo 'Message 2.';
} else {
    echo 'Message 3.';
}

echo "Age: $age. Shoe Size: $shoe_size";

echo '</pre>';
////////////////////////////////////////////////////////////////////////////////

echo '<pre><hr><b>
    стр. 70
    Задание 3.
</b>
    Преобразовать -50 до 50 по Фаренгейту в эквивалент по Цельсию с помощью while.
<br><details><summary>Спойлер</summary>';
$far = -50;
while ($far != 51) { // начало с -50
    $cel = ($far - 32) * 5 / 9;
    $cel = number_format($cel, '2', '.', ' ');
    echo "{$far} по Фаренгейту = {$cel} по Цельсию.<br>";
    ++$far; // стало -49
}
echo '</details></pre>';
////////////////////////////////////////////////////////////////////////////////

echo '<pre><hr><b>
    стр. 70
    Задание 4.
</b>
    Преобразовать -50 до 50 по Фаренгейту в эквивалент по Цельсия с помощью for.
<br><details><summary>Спойлер</summary>';
for ($far = -50; $far != 51; ++$far) {
    $cel = ($far - 32) * 5 / 9;
    $cel = number_format($cel, '2', '.', ' ');
    echo "{$far} по Фаренгейту = {$cel} по Цельсию.<br>";
}
echo '</details></pre>';
////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр.92 задание 1. </b><br><details><summary>Спойлер</summary>';
///
$array_cities = [
    'New-York' => 8175133,
    'Los-Angeles' => 3792621,
    'Chicago' => 2695598,
    'Huston' => 2100263,
    'Filadelfia' => 1526006,
    'Feniks' => 1445632,
    'San-Antonio' => 1327407,
    'San-Diego' => 1307402,
    'Dallas' => 1197816,
    'San-Hose' => 945942,
];
$border = "style='border: 1px solid black';";
echo "<table {$border}>";
foreach ($array_cities as $city => $population) {
    echo '<tr>';
    echo "<td {$border}>{$city}</td><td {$border}>{$population}</td>";
    echo '</tr>';
    $total_population += $population;
    if (!next($array_cities)) {
        echo '<tr>';
        echo "<td {$border}>Total population</td><td {$border}>{$total_population}</td>";
        echo '</tr>';
    }
}
echo '</table>';
///
echo '</details></pre>';
////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр.92 задание 2 и 3. </b><br><details><summary>Спойлер</summary>';
///
$array_cities = [
    'New-York' => [8175133, 19795791],
    'Los-Angeles' => [3792621, 39144818],
    'Chicago' => [2695598, 12869257],
    'Huston' => [2100263, 111111111111],
    'Filadelfia' => [1526006, 111111111111],
    'Feniks' => [1445632, 111111111111],
    'San-Antonio' => [1327407, 111111111111],
    'San-Diego' => [1307402, 111111111111],
    'Dallas' => [1197816, 111111111111],
    'San-Hose' => [945942, 111111111111],
];
echo "<form method='post'>
        <input type='submit' value='По популяции города.' name='asort'>
        <input type='submit' value='По названию города.' name='ksort'>
    <form>";
if ($_POST['ksort']) {
    ksort($array_cities); // сортировка по названию города
} elseif ($_POST['asort']) {
    asort($array_cities);
}

$border = "style='border: 1px solid black';";
echo "<table {$border}>";
foreach ($array_cities as $city => $population) {
    $total_city += $population[0];
    $total_stat += $population[1];
    $population[0] = number_format($population[0], 0, ', ', '.');
    $population[1] = number_format($population[1], 0, ', ', '.');
    echo '<tr>';
    echo "<td {$border}>{$city}</td><td {$border}>Популяция города: {$population[0]}</td><td {$border}>Популяция штата: {$population[1]}</td>";
    echo '</tr>';
    if (!next($array_cities)) {
        $total_city = number_format($total_city, 0, ', ', '.');
        $total_stat = number_format($total_stat, 0, ', ', '.');
        echo '<tr>';
        echo "<td {$border}>Total population</td><td {$border}>{$total_city}</td><td {$border}>{$total_stat}</td>";
        echo '</tr>';
    }
}
echo '</table>';
///
echo '</details></pre>';

////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр.92 задание 4. </b><br><details><summary>Спойлер</summary>';
///
$class = [
    'A' => [
        456465, 564214, 184563, 654135,
    ],
    'B' => [
        235643, 345234, 124733, 324564,
    ],
];
$goods = [
    'shoes' => 45,
    'socks' => 23,
    'hat' => 5,
];
$dinners = [
    'dinner1' => [
        'cofe' => [
            'sund' => 9,
            'mond' => 8,
            'tuesd' => 10,
            'wednesd' => 7,
            'thursd' => 8,
            'frid' => 4,
            'saturd' => 5,
        ],
        'buter' => [
            'sund' => 34,
            'mond' => 23,
            'tuesd' => 45,
            'wednesd' => 23,
            'thursd' => 53,
            'frid' => 34,
            'saturd' => 54,
        ],
    ],
    'dinner2' => [
        'tea' => [
            'sund' => 9,
            'mond' => 8,
            'tuesd' => 10,
            'wednesd' => 7,
            'thursd' => 8,
            'frid' => 4,
            'saturd' => 5,
        ],
        'hamburger' => [
            'sund' => 34,
            'mond' => 23,
            'tuesd' => 45,
            'wednesd' => 23,
            'thursd' => 53,
            'frid' => 34,
            'saturd' => 54,
        ],
    ],
];
$names = [
    'mother' => [
        'name' => 'Elena',
        'age' => 48,
    ],
    'uncle' => [
        'name' => 'Sergey',
        'age' => 48,
    ],
    'grandmother' => [
        'name' => 'Nina',
        'age' => 68,
    ],
    'son' => [
        'name' => 'Daniel',
        'age' => 5,
    ],
    'wife' => [
        'name' => 'Olesya',
        'age' => 26,
    ],
];
///
echo '</details></pre>';
////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр. 112 задание 1. </b><br><details><summary>Спойлер</summary>';
////////
function descrImg($url_img, $alt = 'Изображение', $height = 'auto', $width = 'auto')
{
    $descr_img = "<img src='$url_img' alt='$alt' height='$height' width='$width' />";

    return $descr_img;
}

echo descrImg('images/demo.jpg', 'Демонстрационное изображение.', '100px', '150px');
////////
echo '</details></pre>';

////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр. 112 задание 3. </b><br><details><summary>Спойлер</summary>';
////////////////////////
require_once 'david_sklar_112-2.php';
echo imgTag('demo.jpg');
echo imgTag('demo1.jpg');
////////////////////////
echo '</details></pre>';
////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр. 112 задание 4. </b><br><details><summary>Спойлер</summary>';
////////////////////////
function restaurantCheck($meal, $tax, $tip)
{
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);

    return $meal + $tax_amount + $tip_amount;
}

$cash_on_hand = 31;
$meal = 25;
$tax = 10;
$tip = 10;

while (($cost = restaurantCheck($meal, $tax, $tip)) < $cash_on_hand) {
    ++$tip;
    echo "I can afford a tip of $tip% ($cost)\n";
}
////////////////////////
echo '</details></pre>';
////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр. 112 задание 5. </b><br><details><summary>Спойлер</summary>';
////////////////////////
/**
 * Преобразует запись цвета из RGB в HEX.
 *
 * @param [string] $dec_color - цвет в десятичном формате 50, 100, 150;
 *
 * @return [string] - строка в шестнадцатиричном формате #326496;
 */
function decToHex($dec_color)
{
    $arr_color = explode(', ', $dec_color);
    $hex_nubmer = '#'; // будущее начало цвета в HEX формате
    foreach ($arr_color as $dec_number) {
        $hex_nubmer .= dechex($dec_number);
    }

    return $hex_nubmer;
}

// $color = decToHex('50, 100, 150');
// echo "<div style='background-color: {$color}; width: 100px; height: 100px;'></div>";
$array = array();
////////////////////////
echo '</details></pre>';
////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр. 126 задание 1, 2. </b><br><details><summary>Спойлер</summary>';

////////////////////////
class Ingredient
{
    public $name;
    public $cost;

    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function changeCost($new_cost)
    {
        $this->cost = $new_cost;
    }
}

$omelette = new Ingredient("egg", 40);
echo $omelette->name;
echo "\n";
echo $omelette->cost;
$omelette->changeCost(35);
echo "\n";
echo $omelette->cost;
////////////////////////
echo '</details></pre>';
////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр. 126 задание 3. </b><br><details><summary>Спойлер</summary>';
////////////////////////
class Entree
{
    protected $ingredients = array();
    private $name;

    public function __construct($name, $ingredients)
    {
        if (!is_array($ingredients)) {
            throw new Exception('$ingredients must be an array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hasIngredient($ingredient)
    {
        return in_array($ingredient, $this->ingredients);
    }
}

class TotalCostEntree extends Entree // расширение для полного блюда собирающее ингридиенты и их стоимости
{
    protected $total_cost = 0;

    public function __construct($array_object)
    {
        foreach ($array_object as $object) {
            $this->name = $object->name;
            $this->total_cost += $object->cost;
        }
    }

    public function addIngredient($object)
    {
        $this->name = $object->name;
        $this->total_cost += $object->cost;
    }

    public function getTotalCost()
    {
        echo $this->total_cost;
    }
}

class Ingredient_v2 // отдельный ингридиент
{
    public $name;
    public $cost;

    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function changeCost($new_cost)
    {
        $this->cost = $new_cost;
    }
}

$ingr_1 = new Ingredient_v2('яйцо', 5);
$ingr_2 = new Ingredient_v2('масло', 7);
$ingr_3 = new Ingredient_v2('соль', 1);
$total = new TotalCostEntree(array($ingr_1, $ingr_2, $ingr_3));
$total->getTotalCost();
////////////////////////
echo '</details></pre>';
////////////////////////



















