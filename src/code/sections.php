<?php
/*

sections.php
____________

© EdouardMortec 2018 - http://www.edouardmortec.com

*/




$seriesDirs = scandir('Series', SCANDIR_SORT_DESCENDING );


foreach ($seriesDirs as $value) {
	
	if ( $value != '.' && $value !='..' && $value != '.DS_Store' && $value[0] != 'x') {

	$serie = getSerie( $value );

	doSection( $serie );

	}

}
	
/*-------------------------------------------------------------------------*/

function getSerie( $serieDir ){

	 $artworksFilenames = glob('Series/'.$serieDir.'/*.jpg');
	 //var_dump($artworksFilenames);

	 $artworks = [];

	foreach ( $artworksFilenames as $i => $value) {
			$artworks[$i] = getArtwork( $value, (int)$i );
	}


	$keywords = "";

	foreach ( $artworks[0]['keywords'] as $i => $value) {
			$keywords = $keywords.$value.",";
	}

	 $serie = [
		'title' => substr( $serieDir, 3),
		'artworks' => $artworks,
		'keywords' => $keywords
	];

	return $serie;

}

/*-------------------------------------------------------------------------*/

function getArtwork( $artPath, $id = 0 ){
	$title = "Title";
	$caption = "Caption";
	$keywords = "none";

	$size = getimagesize( $artPath, $info);

	if(isset($info['APP13'])){
	    $iptc = iptcparse($info['APP13']);
	    $title = $iptc["2#005"];
	    $caption = $iptc["2#120"];
	    $keywords = $iptc["2#025"];
	}

	 // $title = "Title";
	 // $caption = "Caption";

	 $artwork = [
		'title' => $title,
		'caption' => $caption,
		'keywords' => $keywords,
		'imagePath' => $artPath,
		'id' => $id
	];

	return $artwork;

}

/*-------------------------------------------------------------------------*/

function doSection( $serie ){

	echo '<div class = "section" id="'.$serie['title'].'" data-keywords="'.$serie['keywords'].'">';

	foreach ($serie['artworks'] as $value) {
		doArtwork($value);
	}

	echo '</div>';


}


/*-------------------------------------------------------------------------*/


function doArtwork( $artwork ){


	echo '<div class="slide"><div class="Artwork">';

	if ($artwork['id'] == 0){
		echo ' <div class = "Cover">';
		echo '<img src="'.$artwork['imagePath'].'" class="CoverPicture unselectable" alt="'.$artworks['title'][0].'">';
		echo '</div>';
	}
	else{
	echo '<img src="'.$artwork['imagePath'].'" class="Picture  unselectable" alt="'.$artworks['title'][0].'">';

	echo '<div class="Caption  unselectable">'.$artwork['caption'][0].' : "'.$artwork['title'][0].'"</div>';
	}

	echo '</div></div>';

}


/*-------------------------------------------------------------------------*/

?>




