<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Метод не разрешён']);
    exit;
}

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
if (empty($name) || empty($phone)) {
    echo json_encode(['success' => false, 'message' => 'Заполните обязательные поля: имя и телефон']);
    exit;
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Некорректный email']);
    exit;
}

// Sanitize
$name    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$phone   = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$email   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Save to file (as simple storage)
$data = [
    'date'    => date('Y-m-d H:i:s'),
    'name'    => $name,
    'phone'   => $phone,
    'email'   => $email,
    'message' => $message,
];

$file = __DIR__ . '/leads.json';
$leads = [];

if (file_exists($file)) {
    $content = file_get_contents($file);
    $leads = json_decode($content, true) ?: [];
}

$leads[] = $data;
file_put_contents($file, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Optional: send email notification
$to = 'info@sk-royal.ru';
$subject = 'Новая заявка с сайта СК РОЯЛ';
$body = "Имя: $name\nТелефон: $phone\nEmail: $email\nСообщение: $message";
$headers = "From: noreply@sk-royal.ru\r\nContent-Type: text/plain; charset=utf-8";

@mail($to, $subject, $body, $headers);

echo json_encode(['success' => true, 'message' => 'Заявка успешно отправлена']);
