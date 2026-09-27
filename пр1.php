<?php
//1
$cities = [
    "Москва",
    "Санкт-Петербург",
    "Казань",
    "Сочи",
    "Владивосток"
];

echo $cities[0] . "<br>";
echo $cities[2] . "<br>";
echo $cities[4] . "<br>";



//2
$numbers = [10, 20, 30, 40];

$numbers[1] = 200;

$numbers[] = 50;

$numbers[] = 60;

foreach ($numbers as $number) {
    echo $number . "<br>";
}


//3
$products = [
    "Ноутбук",
    "Мышь",
    "Клавиатура",
    "Монитор",
    "Наушники"
];

echo "Количество товаров: " . count($products) . "<br><br>";

foreach ($products as $product) {
    echo $product . "<br>";
}



//4
$numbers = [12, 7, 24, 15, 8, 31, 40, 55];

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number . "<br>";
    }
}



//5
$names = [
    "Иван",
    "Анна",
    "Пётр",
    "Мария",
    "Алексей"
];

$name = readline("Введите имя: ");

if (in_array($name, $names)) {
    echo "Пользователь найден";
} else {
    echo "Пользователь не найден";
}




//6
$numbers = [45, 12, 78, 3, 25, 9, 100];

print_r($numbers);

sort($numbers);

echo "<br>По возрастанию:<br>";
print_r($numbers);

rsort($numbers);

echo "<br>По убыванию:<br>";
print_r($numbers);




//7
$names = [
    "Иван",
    "Пётр",
    "Анна",
    "Мария"
];

array_pop($names);

array_unshift($names, "Алексей");

array_shift($names);

print_r($names);




//8
$user = [
    "name" => "Иван",
    "age" => 20,
    "email" => "ivan@mail.ru",
    "city" => "Москва"
];

echo "Имя: " . $user["name"] . "<br>";

echo "Возраст: " . $user["age"] . "<br>";

echo "Город: " . $user["city"] . "<br>";

$user["age"] = 21;

$user["phone"] = "+79991234567";

echo "<br>Все данные:<br>";

foreach ($user as $key => $value) {
    echo $key . ": " . $value . "<br>";
}




//9
$users = [
    [
        "name" => "Иван",
        "age" => 20
    ],
    [
        "name" => "Анна",
        "age" => 17
    ],
    [
        "name" => "Пётр",
        "age" => 25
    ],
    [
        "name" => "Мария",
        "age" => 16
    ],
    [
        "name" => "Алексей",
        "age" => 30
    ]
];

echo "Все пользователи:<br>";

foreach ($users as $user) {
    echo $user["name"] . " — " . $user["age"] . " лет<br>";
}

echo "<br>Совершеннолетние:<br>";

foreach ($users as $user) {
    if ($user["age"] >= 18) {
        echo $user["name"] . "<br>";
    }
}

echo "<br>Несовершеннолетние:<br>";

foreach ($users as $user) {
    if ($user["age"] < 18) {
        echo $user["name"] . "<br>";
    }
}

echo "<br>Количество пользователей: " . count($users);




//10
$products = [
    [
        "name" => "Ноутбук",
        "price" => 70000
    ],
    [
        "name" => "Мышь",
        "price" => 1500
    ],
    [
        "name" => "Клавиатура",
        "price" => 3000
    ],
    [
        "name" => "Монитор",
        "price" => 25000
    ]
];

echo "Все товары:<br>";

foreach ($products as $product) {
    echo $product["name"] . " — " . $product["price"] . " руб.<br>";
}

echo "<br>Товары дороже 5000:<br>";

foreach ($products as $product) {
    if ($product["price"] > 5000) {
        echo $product["name"] . "<br>";
    }
}

$total = 0;

foreach ($products as $product) {
    $total += $product["price"];
}

echo "<br>Общая стоимость: " . $total . " руб.<br>";

$expensive = $products[0];

foreach ($products as $product) {
    if ($product["price"] > $expensive["price"]) {
        $expensive = $product;
    }
}

echo "Самый дорогой товар: " . $expensive["name"] . " — " . $expensive["price"] . " руб.";




//11
$users = [
    [
        "name" => "Иван",
        "login" => "ivan123",
        "age" => 20
    ],
    [
        "name" => "Анна",
        "login" => "anna777",
        "age" => 22
    ],
    [
        "name" => "Петр",
        "login" => "petr555",
        "age" => 17
    ]
];

$searchLogin = "anna777";

foreach ($users as $user) {
    if ($user["login"] == $searchLogin) {
        echo "Пользователь найден\n";
        echo "Имя: " . $user["name"] . "\n";
        echo "Возраст: " . $user["age"] . "\n";

        break;
    }
}




//12
$products = [
    [
        "name" => "Ноутбук",
        "price" => 70000,
        "quantity" => 2
    ],
    [
        "name" => "Мышь",
        "price" => 1500,
        "quantity" => 3
    ],
    [
        "name" => "Клавиатура",
        "price" => 3000,
        "quantity" => 1
    ],
    [
        "name" => "Монитор",
        "price" => 25000,
        "quantity" => 2
    ]
];

$total = 0;

echo "Список товаров:\n\n";

foreach ($products as $product) {
    echo $product["name"] . " — "
        . $product["price"] . " руб. — "
        . $product["quantity"] . " шт.\n";
}

echo "\nСтоимость каждого товара:\n\n";

foreach ($products as $product) {
    $cost = $product["price"] * $product["quantity"];

    echo $product["price"] . " × "
        . $product["quantity"] . " = "
        . $cost . " руб.\n";

    $total += $cost;
}

echo "\nОбщая стоимость заказа: " . $total . " руб.\n";

if ($total >= 150000) {
    $discount = 15;
} elseif ($total >= 100000) {
    $discount = 10;
} elseif ($total >= 50000) {
    $discount = 5;
} else {
    $discount = 0;
}

$discountAmount = $total * $discount / 100;

$finalPrice = $total - $discountAmount;

echo "\nИтог:\n";
echo "Стоимость товаров: " . $total . " руб.\n";
echo "Скидка: " . $discount . "%\n";
echo "Размер скидки: " . $discountAmount . " руб.\n";
echo "Итого к оплате: " . $finalPrice . " руб.\n";


//13
$numbers = [12, 45, 7, 89, 23, 4, 56, 91, 15];

$min = $numbers[0];
$max = $numbers[0];
$sum = 0;
$evenCount = 0;
$oddCount = 0;

foreach ($numbers as $number) {

    if ($number < $min) {
        $min = $number;
    }

    if ($number > $max) {
        $max = $number;
    }

    $sum += $number;

    if ($number % 2 == 0) {
        $evenCount++;
    } else {
        $oddCount++;
    }
}

$average = $sum / count($numbers);

echo "Минимальное число: " . $min . "\n";
echo "Максимальное число: " . $max . "\n";
echo "Сумма всех чисел: " . $sum . "\n";
echo "Среднее арифметическое: " . $average . "\n";
echo "Количество чётных чисел: " . $evenCount . "\n";
echo "Количество нечётных чисел: " . $oddCount . "\n";
?>