<?php
function getBaseUrl() {
  // プロトコルを取得 (HTTPかHTTPSか)
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";

  // ホスト名（ドメイン）を取得
  $host = $_SERVER['HTTP_HOST'];

  // ベースURLを返す (例: https://www.example.com/)
  return $protocol . $host . '/';
}