<?php
$html = "";
//Creating Variable

//Getting Json File From URL?__a=1
if(isset($_GET['url'])) {
    $json = file_get_contents($_GET['url']."?__a=1");
    //Getting the file content
    $json = json_decode($json);
    //Converting the JSON into Php object

    //Let's get the images into $html and image array to $arr... 
    $arr = $json->graphql->shortcode_media->display_resources;

    //we want array[index].src 
    //Let's do using for loop and store into $html variable

    for($i=0;$i<count($arr);$i++ ) {
        $html .= '<img src="'.$arr[$i]->src.'" > <br><br> <a href="'.$arr[$i]->src.'" download >Download</a><hr>';
    }
    //we got this Let's Use Some CSs

    //Source Code in Description
}

?>
