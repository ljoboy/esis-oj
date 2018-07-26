<?php
if (!function_exists("e")){
    function e($string)
    {
        return htmlentities(strtolower(addslashes(trim($string))));
    }
}

if (!function_exists('imgFromDir')){
    function imgFromDir($dir){
        $dir = 'static/img/'.$dir.'/';
        $result = [];
        if (is_dir($dir)){
            if ($opendir = opendir($dir)){
                while (($file = readdir($opendir)) !== false){
                    $ext = new SplFileInfo($file);
                    $ext = strtolower($ext->getExtension());
                    if ($ext == 'jpg' or $ext == 'png'){
                        $result[] = $dir.$file;
                    }
                }
            }
        }
        return $result;
    }
}
if (!function_exists("page_actu")) {
    function page_actu($page="")
    {
        $page .= ".php";
        $pg = explode("/",$_SERVER['SCRIPT_NAME']);
        $pg = end($pg);
        if($page == $pg)
            return "active z-depth-1 hoverable";
        else
            return "hoverable";
    }
}
if (!function_exists("page")) {
    function page()
    {
        $page = explode("/",$_SERVER['SCRIPT_NAME']);
        $page = end($page);
        if($page == "")
            $page == "index.php";
        return $page;
    }
}