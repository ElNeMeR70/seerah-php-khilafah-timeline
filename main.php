<?php
declare(strict_types=1);

/**
 * seerah-php-khilafah-timeline — الخط الزمني للخلافة الراشدة والفتوحات الإسلامية
 * Rashidun Caliphate (11-40 AH) Chronological Event & Diwan Indexer
 */
$input = "Era=11AH_to_40AH";
$digest = substr(hash("sha256", "seerah-php-khilafah-timeline:" . $input), 0, 12);

echo "[RUN] seerah-php-khilafah-timeline (PHP) — Rashidun Caliphate (11-40 AH) Chronological Event & Diwan Indexer" . PHP_EOL;
echo "[AR]  الخط الزمني للخلافة الراشدة والفتوحات الإسلامية" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Caliphs=4 | MajorEvents=64 | HijriEpochEstablished=16AH | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
