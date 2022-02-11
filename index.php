<?php

if (isset($_POST["video_link"])) {
    $video_link = $_POST["video_link"];
    $video_id = explode(".be/", $video_link);
    $count_array = count($video_id);
    if ($count_array == 2) {
        $vi = $video_id[1];
    } else {
        $video_id = explode("watch?v=", $video_link);
        $vi = $video_id[1];
    }
    $tl_max_res = "https://img.youtube.com/vi/{$vi}/maxresdefault.jpg";
    $tl_mid_res = "https://img.youtube.com/vi/{$vi}/sddefault.jpg";
    $tl_sm_res = "https://img.youtube.com/vi/{$vi}/hqdefault.jpg";

    $img["lg"] = $tl_max_res;
    $img["md"] = $tl_mid_res;
    $img["sm"] = $tl_sm_res;
}


/*
don't copy link from playlist not working

*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daflx - thumbnails downloader</title>
	<meta name="robots" content="noindex, nofollow">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="content">
		<h2>Daflx Youtube Thumbnails Downloader</h2>
		<p>
			usage for the app
			- copy link from yt
			- paste and click on fetch thumbnails
			- right click on the image and select save image as
			side note : don't copy a link from a playlist use single video
		</p>
	<form action="" method="post">
        <div class="form-group">
            <div class="p__svg">
            	<p class="form-label">Paste your YouTube Video Link</p>
            	<img src="./backhand.svg" class="svg">
			</div>
            <input type="text" class="form-control" placeholder="e.g. https://youtu.be/nb5BHPYbBBY" name="video_link" id="video_link" required>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn dbtn">Fetch Thumbnails</button>
        </div>
    </form>
    <?php if (isset($img)) { ?>
    
    <div class="mt-4">
        <div class="col-12">
            <div class="col-6 mb-3">
                <img src="<?php echo $img["lg"]; ?>" alt="" class="img-fluid">
                <h5>Max Resolution</h5>
            </div>
            <div class="col-md-3 mb-3">
                <img src="<?php echo $img["md"]; ?>" alt="" class="img-fluid">
                <h5>Medium Resolution</h5>
            </div>
            <div class="col-md-3 mb-3">
                <img src="<?php echo $img["sm"]; ?>" alt="" class="img-fluid">
                <h5>Small Resolution</h5>
            </div>
        </div>
    </div>
    
    <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>