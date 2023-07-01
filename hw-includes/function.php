<?php

/**
 * Function
 * 
 * functions and definitions
 */


 /**
  * page name
  */
 function page_name()
 {
     $page_name = $_SERVER["PHP_SELF"];
     $pathInfo = pathinfo($page_name);
     $filename = $pathInfo['filename'];
     return $filename;
 }

 /**
  * redirect
  */
function redirect($url)
{
    echo '<script>window.location.href="' . $url . '" </script>';
}

/**
 * refresh
 */
function refresh()
{
    echo '<meta http-equiv="refresh" content="0">';
}

/**
 * time diff
 */
function timeDeff($time1, $time2)
{
    $datetime1 = date_create($time1);
    $datetime2 = date_create($time2);
    $interval = date_diff($datetime1, $datetime2);
    
    if ($interval->format("%d")) {
        echo $interval->format("%d Day ago");
    }elseif ($interval->format("%h")) {
        echo $interval->format("%h Hour ago");
    } elseif ($interval->format("%i")) {
        echo $interval->format("%i Minutes ago");
    } elseif ($interval->format("%s")) {
        echo $interval->format("%s Second  ago");
    } 
}

/**
 * date diff
 */
function dateDeff($date1, $date2)
{
    $datetime1 = date_create($date1);
    $datetime2 = date_create($date2);
    $interval = date_diff($datetime1, $datetime2);

    if ($interval->format("%y")) {
        echo $interval->format("%y year ago");
    } elseif ($interval->format("%m")) {
        echo $interval->format("%m month ago");
    } elseif ($interval->format("%d")) {
        echo $interval->format("%d day ago");
    } elseif ($interval->format("%a") <= date('d')) {
        echo 'Today';
    }
}

/**
 * folder size
 */
function folderSize($dir)
{
    $count_size = 0;
    $count = 0;
    $dir_array = scandir($dir);
    foreach ($dir_array as $key => $filename) {
        if ($filename != ".." && $filename != ".") {
            if (is_dir($dir . "/" . $filename)) {
                $new_foldersize = foldersize($dir . "/" . $filename);
                $count_size = $count_size + $new_foldersize;
            } else if (is_file($dir . "/" . $filename)) {
                $count_size = $count_size + filesize($dir . "/" . $filename);
                $count++;
            }
        }
    }
    return $count_size;
}

/**
 * size format
 */
function sizeFormat($bytes)
{
    $kb = 1024;
    $mb = $kb * 1024;
    $gb = $mb * 1024;
    $tb = $gb * 1024;

    if (($bytes >= 0) && ($bytes < $kb)) {
        return $bytes . ' B';
    } elseif (($bytes >= $kb) && ($bytes < $mb)) {
        return ceil($bytes / $kb) . ' KB';
    } elseif (($bytes >= $mb) && ($bytes < $gb)) {
        return ceil($bytes / $mb) . ' MB';
    } elseif (($bytes >= $gb) && ($bytes < $tb)) {
        return ceil($bytes / $gb) . ' GB';
    } elseif ($bytes >= $tb) {
        return ceil($bytes / $tb) . ' TB';
    } else {
        return $bytes . ' B';
    }
}

/**
 * count view
 */
function countViews($count_view)
{
    if ($count_view <= 999) {
        $views = $count_view . ' views';
    } elseif ($count_view < 1000000) {
        $views = round($count_view / 1000, 2) . 'K views';
    } elseif ($count_view < 1000000000) {
        $views =  round($count_view / 1000000, 2) . 'M views';
    } elseif ($count_view >= 1000000000) {
        $views = round($count_view / 1000000000, 2) . 'B views';
    }

    return $views;
}


/**
 * site url
 */
function site_url() {
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
    $server_name = $_SERVER["SERVER_NAME"];
    $domain = $protocol.$server_name;
    return $domain;
}


/**
 * current date
 */
function current_date() {

    $current_date = date('y-m-d');
    return $current_date;
}


 /**
 * current date time
 */
function current_datetime() {
    $current_datetime = date('y-m-d h:i:s');
    return $current_datetime;
}
