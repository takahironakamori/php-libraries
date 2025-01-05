<?php
function getCurrentUrl() {
  // プロトコルを取得 (HTTPかHTTPSか)
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";

  // ホスト名（ドメイン）を取得
  $host = $_SERVER['HTTP_HOST'];

  // リクエストURIを取得
  $requestUri = $_SERVER['REQUEST_URI'];

  // 完全なURLを作成
  return $protocol . $host . $requestUri;
}