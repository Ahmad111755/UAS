<head>

    <title>TAMBAH DATA</title>

</head>

<body>
    <div class="wrap">
        <div class="header">
            <h1>UAS AHMAD KURTUBI</h1>

        </div>

        <div class="badan">

            <div class="content">
                <p>
                    <a href="index.php">Kembali</a>
                </p>
                <div id="stylish" class="myform">
                    <h1>TAMBAH DATA</h1>

                    <form action="api-tambah.php" method="post" id="form">
                        <div class="form-group">
                            <label for="">user Id</label>
                            <input type="text" name="userId" id="userId">
                        </div>
                        <div class="form-group">
                            <label for="">Id</label>
                            <input type="text" name="id" id="id">
                        </div>
                        <div class="form-group">
                            <label for="">title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="">body</label>
                            <input type="text" name="body" id="body">
                        </div>
                        <div class="form-group">
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear"></div>

    </div>
</body>

</html>