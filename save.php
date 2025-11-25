<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$input = file_get_contents("php://input");
$data = json_decode($input, true);

if ($data) {
    file_put_contents("data.json", json_encode($data));
    echo json_encode(["status" => "success", "message" => "Дані збережено"]);
} else {
    echo json_encode(["status" => "error", "message" => "Помилка даних"]);
}
?>