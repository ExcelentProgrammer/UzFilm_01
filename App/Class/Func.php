<?php


/**
 * @param $url
 * @param bool $formatSize
 * @param bool $useHead
 * @return int|mixed|string
 * Online File o'lchamini aniqlash uchun function
 */
function menu($x)
{
    return "?menu=" . $x;
}
function AdminMenu($x)
{
    return "?menu=admin" . "&page=" . $x;
}
function GetFileSize($url, $formatSize = true, $useHead = true)
{
    if (false !== $useHead) {
        stream_context_set_default(array('http' => array('method' => 'HEAD')));
    }
    $head = array_change_key_case(get_headers($url, 1));
    // content-length of download (in bytes), read from Content-Length: field
    $clen = isset($head['content-length']) ? $head['content-length'] : 0;

    // cannot retrieve file size, return "-1"
    if (!$clen) {
        return "not";
    }

    if (!$formatSize) {
        return $clen; // return size in bytes
    }

    $size = $clen;
    switch ($clen) {
        case $clen < 1024:
            $size = $clen . ' B';
            break;
        case $clen < 1048576:
            $size = round($clen / 1024, 2) . ' KiB';
            break;
        case $clen < 1073741824:
            $size = round($clen / 1048576, 2) . ' MiB';
            break;
        case $clen < 1099511627776:
            $size = round($clen / 1073741824, 2) . ' GiB';
            break;
    }

    return $size; // return formatted size
}

/**
 * @param int $length
 * @return string
 * text ni random qilish uchun funcsion
 */
function RandString($length = 50)
{

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

/**
 * @param $id
 * @return string
 * Multfilm online kerish sahifasiga o'tish || multfilm haqida malumot || yuklab olish
 */
function MultfilmToWatch($id)
{
    return menu(MenuWatch) . "&video_id=" . $id . "&type=multfilm";
}

/**
 * @param $id
 * @return string
 * Videolar va konsertlarni online kerish sahifasiga o'tish || Video haqida malumot || yuklab olish
 */
function VideoToWatch($id)
{
    return menu(MenuWatch) . "&video_id=" . $id . "&type=video";
}

/**
 * @param $id
 * @return string
 * Filmlar va konsertlarni online kerish sahifasiga o'tish || Film haqida malumot || yuklab olish
 */
function FilmToWatch($id)
{
    return menu(MenuWatch) . "&video_id=" . $id . "";
}

/**
 * @param $id
 * @param string $p
 * @param string $type
 * @return string
 * Filmlarni play listga qo'shish uchun buttonlarni to'g'ri qo'yib beradi ro'yhatdan o'tmagan bo'lsa login sahifasiga yuboradi
 */
function __PlayList($id, $p = "", $type = "")
{
    if (!empty($_SESSION['ID'])) {
        if ($type == "") {
            $type = "Film";
        }
        if ($p == "b")
            return '<a class="btn hvr-sweep-to-right ml-3" data-toggle="modal" data-target="#PlayListOk" onclick="List(' . $id . ',\'' . $type . '\')" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>';
        else
            return '<a data-toggle="modal" data-target="#PlayListOk" onclick="List(' . $id . ',\'' . $type . '\')" ><i class="fas fa-plus"></i></a>';
    } else
        if ($p == "b") {
            return '<a class="btn hvr-sweep-to-right ml-3" href="' . menu(MenuLogin) . '" tabindex="0"><i class="fas fa-plus mr-2"></i>My List</a>';
        }
    return '<a href=' . menu(MenuLogin) . '><i class="fas fa-plus"></i></a>';
}



/**
 * @param $text
 * @param int $size
 * @return string
 * matinni qisqartirish uchun || kino nomidan boshidagi X ta so'zni olish uchun
 */
function __Short($text, $size=10){
    return implode(" ", array_slice(explode(" ",$text), 0, $size));
}

function __AllGo($type,$p){
    return menu(MenuAllFilms)."&type=".$type."&p=".$p."";
}
function __location($menu){
    echo "<script>location.href='".$menu."'</script>";
}

function __RemoveList($ID,$Type){
    return menu(MenuRemovePlayList)."&video_id=".$ID."&type=".$Type;
}