<?php
/* https://api.telegram.org/bot1034343033:AAEnAWcaA2Mubd7UcaJL-MXUxyFACsm6qjc/getUpdates,
где, 1034343033:AAEnAWcaA2Mubd7UcaJL-MXUxyFACsm6qjc - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone']; 
$product = 'Расческа-Выпрямитель Philips'; 
$token = "1783946937:AAFtWukU_J7fKEIXOSvb17r7YdLKAhqtDsg";
$chat_id = "1341161121";
$arr = array(
  '👤 Имя: ' => $name,
  '️️☎️ Телефон: ' => $phone,
  '📥 Товар: ' => $product
  );
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header("Location: success.html");
  exit;
} else {
  echo "Ошибка. Заявка не принята. Повторите пожалуйста позже!";	
}
?>
