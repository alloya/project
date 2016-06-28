<?php
    require_once('config.inc.php');
    
    $fileDir = scandir(INCLUDE_FOLDER);
    
    if ($fileDir)
    {
        foreach ($fileDir as $fileName)
        {
            if (is_file(INCLUDE_FOLDER . $fileName) && stristr($fileName, ".inc.php"))
            {
                require_once($fileName);
            }
        }
    }
    dbInitialConnect();
    session_start();
    $_SESSION["is_logged"] = isLogged();