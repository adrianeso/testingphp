<?php

/**
 * @param $fileName
 * @param $tmpName
 * @param $path
 * @param $newFolderName
 * @return bool
 */
function uploadPhoto($fileName, $tmpName, $path, $newFolderName)
    {
        if (!is_dir($path.$newFolderName)){

            mkdir($path.$newFolderName, 0777, true);

           return  move_uploaded_file($tmpName, $path.$newFolderName.time().'-'.$fileName);

        }else{
            return move_uploaded_file($tmpName, $path.$newFolderName.time().'-'.$fileName);
        }
    }


/**
 * @param $folder
 * @return string
 */
function allFilesFromFolder($folder)
    {
        $arrayFiles = array();

        $directory = opendir($folder);

        while($files = readdir($directory)){


            if (is_dir($files)){

//                return array_push($arrayFiles,"[".$files."]");
                return "[".$files . "]<br />";

            }else{
//                return array_push($arrayFiles,$files);
                return  $files. "<br />";
            }
        }



    }