<?

$edit=$_GET['edit'];
$post = $_POST;
// var_dump($post);
// https://api.telegram.org/bot6761559644:AAEhLTwDEh38UVuS-UaLmwByHzPkOO3Sibo/getUpdates
// 6761559644:AAEhLTwDEh38UVuS-UaLmwByHzPkOO3Sibo
$name = $post['name'];
$tel = $post['tel'];
$course = $post['course'];

$tokken = "6761559644:AAEhLTwDEh38UVuS-UaLmwByHzPkOO3Sibo";
$chat_id = "-4068714150";

$arr = array(
    'Ismi: ' => $name,
    'Telfon raqami: ' => $tel,
    'Kurs: ' => $course
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$tokken}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");


if ($sendToTelegram) {
    header('Location: /');

}else {
    echo "Error";
};



?>