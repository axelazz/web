<?php
$method = $_SERVER['REQUEST_METHOD'];
echo $method;

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli
{
  $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}

function closeDBConnection(mysqli $conn): void
{
  $conn->close();
}

function getPostJson(): ?string
{
  $dataAsJson = file_get_contents("php://input");
  if (!$dataAsJson) {
    echo 'Не удалось считать данные!';
    return null;
  }
  return $dataAsJson;
}

function getPostJsonAsArray(string $dataAsJson): array
{
  $dataAsArray = json_decode($dataAsJson, true);
  if (!$dataAsArray) {
    echo 'Не удалось преобразовать JSON в массив!';
    return [];
  }
  return $dataAsArray;
}

$dataAsJson = getPostJson();

if ($method != 'POST') {
  echo "Вы не использовали Post";
  return;
}

if ($dataAsJson) {
  $dataAsArray = getPostJsonAsArray($dataAsJson);
  $publishDate = strtotime($dataAsArray['publish_date']);
  $conn = createDBConnection();
  $sql = "INSERT INTO post (title, subtitle, content, author, author_url, publish_date, image_url, featured, card_url) VALUES ('{$dataAsArray['title']}', '{$dataAsArray['subtitle']}', '{$dataAsArray['content']}', '{$dataAsArray['author']}', '{$dataAsArray['author_url']}', '$publishDate', '{$dataAsArray['image_url']}', '{$dataAsArray['featured']}', '{$dataAsArray['card_url']}')";
  $result = $conn->query($sql);
}