<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview <?= $product['name'] ?></title>
</head>
<body>
    <div id="pageWrapper">
        <div class="container">
            <!-- Embed 3D Mockup and pass imageUrl via query string -->
            <iframe src="http://localhost:5173/?url=<?= $product['image_3d'] ?>" width="100%" height="930px"></iframe>
        </div>
    </div>
</body>
</html>
