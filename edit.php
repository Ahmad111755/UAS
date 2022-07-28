<?php

function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("https://jsonplaceholder.typicode.com/posts/" . $_GET["id"]);
$data = json_decode($data, TRUE);
?>

<head>
    <title>EDIT DATA</title>
</head>

<body>
    <div class="wrap">
        <div class="header">
            <h1>UAS AHMAD KURTUBI</h1>
        </div>

        <div class="body">

            <div class="content">
                <p>
                    <a href="index.php">Kembali</a>
                </p>
                <div id="stylish" class="myform">
                    <h1>EDIT DATA</h1>

                    <form action="api-edit.php" method="post" id="form">
                        <div class="form-group">
                            <label for="">User ID</label>
                            <input type="text" value="<?= $data["userId"] ?>" name="userId" id="userId">
                        </div>
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" value="<?= $data["id"] ?>" name="id" id="id">
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" value="<?= $data["title"] ?>" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="">Body</label>
                            <input type="text" value="<?= $data["body"] ?>" name="body" id="body">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear"></div>

    </div>
</body>

</html>