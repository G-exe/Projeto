<?php
$POSTGRES_URL="postgres://default:W9wu3PHXpZYy@ep-gentle-flower-83621518-pooler.us-east-1.postgres.vercel-storage.com:5432/task_manager";
$POSTGRES_USER="default";
$POSTGRES_HOST="ep-gentle-flower-83621518-pooler.us-east-1.postgres.vercel-storage.com";
$POSTGRES_PASSWORD="W9wu3PHXpZYy";
$POSTGRES_DATABASE="task_manager";

$conn = pg_connect("host=$POSTGRES_HOST dbname=$POSTGRES_DATABASE user=$POSTGRES_USER password=$POSTGRES_PASSWORD");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>
