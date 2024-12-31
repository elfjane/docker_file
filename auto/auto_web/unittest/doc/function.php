<?php
# 取得目錄資料
function dirToArray2($dir, $result = array())
{
    $cdir = scandir($dir);

    foreach ($cdir as $key => $value)
    {
        if (!in_array($value, array(".", ".."))) {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                $result = dirToArray2($dir . DIRECTORY_SEPARATOR . $value, $result);
            } else {
                $result[] = $dir. '/' . $value;
            }
        }
    }

    return $result;
}

# 取得目錄資料
function dirToArrayChange($datas, $remove)
{
    $result = array();
    foreach ($datas as $row)
    {
        $data = str_replace($remove, '', $row);
//        $data = $row;

        $result[] = $data;
    }
    return $result;
}
?>
