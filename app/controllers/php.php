<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set("Europe/Vilnius");

$array = [
    'nav' => [
        [
            'link' => 'main.php',
            'name' => 'Home'
        ],
        [
            'link' => 'contacts.php',
            'name' => 'Contacts'
        ],
        [
            'link' => 'class.php',
            'name' => 'Class'
        ],
        [
            'link' => 'background.php',
            'name' => 'Interesting background'
        ]
    ],
    'funnyPics' => [
        'https://filmdaily.co/wp-content/uploads/2020/09/DirtyFunnyMemes-lede72-1300x1115.jpg',
        'https://images.theconversation.com/files/135250/original/image-20160824-30216-zdyfu.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=496&fit=clip',
        'https://i.pinimg.com/736x/75/9b/b4/759bb4497d0b13c3f9d86d9b42ba82e8.jpg',
        'https://i0.wp.com/memesrush.com/wp-content/uploads/2019/02/funny-meme-picture-1549355360.jpg?fit=662%2C857&ssl=1'
    ],
];

$users = [];

if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['number'])) {
    $CSVwrite = fopen('../../database.csv', 'a');
    fwrite($CSVwrite, $_POST['name'] . ',' . $_POST['surname'] . ',' . $_POST['age'] . ',' . $_POST['email'] . ',' . $_POST['number'] . "\r\n");
    fclose($CSVwrite);
};

if (($CSVread = fopen('../../database.csv', 'r')) !== FALSE) {
    while (($data = fgetcsv($CSVread, 1000, ',')) !== FALSE) {
        $users[] = $data;
    }
}
fclose($CSVread);

$array['users'] = $users;

for ($i = 0; $i < count($array['users']); $i++) {
    $array['users'][$i]['id'] = $i + 2;
};

if (date('s') % 2 == 0) {
    $bg = "../../assets/img/1.jpg";
} else {
    $bg = "../../assets/img/2.jpg";
};
