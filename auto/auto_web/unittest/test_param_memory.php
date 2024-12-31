<?php

/**
 * 註解寫法說明
 * 「##」用於分群大標
 * 「####」分群大標的說明
 * 「//」各個錯誤代碼的說明
 *  key => message(回給前端的訊息)
 */

$ab = [
         ## -1 ~ -99999: 交由前端定義_保留給前端定義

        ## 0 嚴重錯誤，完全無法處理，程式啟動時未知的錯誤(非常嚴重，需要立即處理) in (laravel 底層啟動時撰寫)
        0 => 'unknown error',

        ## 2~99 系統嚴重錯誤，可以預期的檢查錯誤(非常嚴重，需要立即處理) in (laravel 底層啟動時撰寫)

        ## 99 程式可以處理，但是無法排除的嚴重問題(非常嚴重，無法查明具體原因) in (laravel 底層啟動時撰寫)
        99 => 'unknown error',

        ## 100 ~ 999 環境錯誤(非常嚴重) in (封裝 laravel 功能時使用，例如：app\Http\Middleware 增加 app\Http\Controllers\Controller.php 繼承)
        100 => '環境初始化錯誤',
        101 => '資料庫不存在',
        200 => '成功,正常回傳',  // 請不要在 Exception 中使用
        400 => '參數錯誤', // 舊寫法，以後請使用1003
        500 => '系統錯誤', // 由Handler收到非LejuException時回傳

        ## 1000 ~ 9999 系統層錯誤(嚴重，部份功能無法使用) in 待討論
        1001 => '錯誤代碼未定義',  // LejuException 找不到錯誤代碼，預設訊息
        1002 => 'LEJU 自定義 validate 訊息格式錯誤',
        1003 => '參數錯誤',
        1100 => 'unknown error',
        1101 => 'unknown error', // DB stored procedure 呼叫出錯時
        1102 => 'unknown error', // DB Insert 失敗
        1103 => 'unknown error', // DB 查不到資料
        1104 => 'unknown error', // DB count 查不到資料

        ## 10000 ~ 19999 常見的功能錯誤(輕微) in 待討論
        10000 => 'unknown error',
        10001 => 'Key failed!',
        11000 => 'sessionToken failed!',
        12010 => 'user check failed!',

        ## 40000 ~ 49999
        40000 => '社區達人功能維護中',

        #### 40100~40200 ExpertOrderRenew相關
        40100 => 'unknown error', // 社區達人續訂預期外錯誤
        40102 => 'update is_renew failed', // 無法在訂單到期日調整續訂狀態
        40103 => 'update is_renew failed', // 該訂單屬於企業訂單，不可調整
        40104 => 'update is_renew failed', // 該用戶未綁定信用卡
        40111 => "can't find correspond order", // 無法透過uid 和 order_number找到單頭
        40121 => "can't find correspond order", // oid 與訂單不吻合
        40122 => 'update is_renew failed', // 調整續訂失敗: 將資料寫回DB時出現異常
        40131 => "can't find correspond order", // oids 與訂單不吻合
        40132 => 'update is_renew failed', // 批次調整續訂失敗: 將資料寫回DB時出現異常
        40201 => 'business_no api failed', // 商工平台查不到統一編號
        41001 => '需要輸入帳號或密碼',
        41002 => '登入驗證異常，請通知服務人員',
        41003 => '登入回應異常錯誤',
        41004 => '取得 uid 失敗',
        41005 => '權限不足',

        #### 48000 ~ 499999 社區達人--達人企業管理平台相關
        48100 => 'unknown error', // 達人企業管理平台，下載相關功能發生預期外的錯誤
        48101 => 'The downloaded file is too large', // 愈下載的檔案超過 50 MB，請聯絡客服
        48102 => 'Save to S3 failed', // 愈下載的檔案超過 50 MB，請聯絡客服
        48201 => 'not found expert order body', // 企業管理平台-刪除達人 未查詢到該達人單身
        48301 => '上傳檔案有誤',// controller無法正確接收傳來的file，通常是前端的問題
        48311 => 'file_id 或 uid 錯誤', // 無法從 file_id & uid 找到 import log
        48312 => 'invalid operation', // 正常流程不會出現，出現在還沒匯出excel前就打取得連結API時
        48313 => '1無法取得錯誤檔案，請聯繫客服1111111' // 系統錯誤，代表excel匯出失敗

];

$bbbbbbbb = [
"a" => 1
        ## 在這邊客製化回傳給前端的code，如無需求則無需設定。{本來定義的error_code} => {回傳給前端的code}
        ## Ex: 1004 => 1003
    ];


// 获取变量使用的内存量
$memoryUsage = memory_get_usage();
echo "Memory usage: " . $memoryUsage . " bytes\n";

// 获取内存使用的峰值
$peakMemoryUsage = memory_get_peak_usage();
echo "Peak memory usage: " . $peakMemoryUsage . " bytes\n";


function formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    $bytes /= (1 << (10 * $pow));

    return round($bytes, $precision) . ' ' . $units[$pow];
}

// 使用 formatBytes() 函数格式化内存大小
echo "Memory usage: " . formatBytes($memoryUsage) . "\n";
echo "Peak memory usage: " . formatBytes($peakMemoryUsage) . "\n";