<?php


$imgPath = $_GET['imgPath'];

output_iptc_data( $imgPath );

function output_iptc_data( $image_path ) {   
    $size = getimagesize ( $image_path, $info);       
     if(is_array($info)) {   
        $iptc = iptcparse($info["APP13"]);
        foreach (array_keys($iptc) as $s) {             
            $c = count ($iptc[$s]);
            for ($i=0; $i <$c; $i++)
            {
                echo $s.' = '.$iptc[$s][$i].'<br>';
            }
        }                 
    }            
}



/*
$iptcHeaderArray = array
(
    '2#005'=>'DocumentTitle',
    '2#010'=>'Urgency',
    '2#015'=>'Category',
    '2#020'=>'Subcategories',
    '2#025'=>' [ keyword_1, keyword_2, ... ]',
    '2#040'=>'SpecialInstructions',
    '2#055'=>'CreationDate',
    '2#062'=>'creation date YMD',
    '2#063'=>'?',
    '2#080'=>'AuthorByline',
    '2#085'=>'AuthorJobsTitle',
    '2#090'=>'City',
    '2#095'=>'State',
    '2#101'=>'Country',
    '2#103'=>'OTR',
    '2#105'=>'Headline',
    '2#110'=>'Source',
    '2#115'=>'PhotoSource',
    '2#116'=>'Copyright Notice',
    '2#120'=>'Caption',
    '2#122'=>'CaptionWriter'
);
*/


?>