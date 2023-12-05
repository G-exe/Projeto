<?php
$POSTGRES_URL="postgres://default:W9wu3PHXpZYy@ep-gentle-flower-83621518-pooler.us-east-1.postgres.vercel-storage.com:5432/verceldb"
$POSTGRES_PRISMA_URL="postgres://default:W9wu3PHXpZYy@ep-gentle-flower-83621518-pooler.us-east-1.postgres.vercel-storage.com:5432/verceldb?pgbouncer=true&connect_timeout=15"
$POSTGRES_URL_NON_POOLING="postgres://default:W9wu3PHXpZYy@ep-gentle-flower-83621518.us-east-1.postgres.vercel-storage.com:5432/verceldb"
$POSTGRES_USER="default"
$POSTGRES_HOST="ep-gentle-flower-83621518-pooler.us-east-1.postgres.vercel-storage.com"
$POSTGRES_PASSWORD="W9wu3PHXpZYy"
$POSTGRES_DATABASE="task_manager"

$conn = new mysqli($POSTGRES_HOST, $POSTGRES_USER, $POSTGRES_PASSWORD, $POSTGRES_DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
