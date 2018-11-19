<?

function mb_strflip($string)
{
    $strflip = "";
    for($i = mb_strlen($string, "UTF-8"); $i >= 0; $i--) {
        $strflip .= mb_substr($string, $i, 1, "UTF-8");
    }
    return $strflip;
}

?>