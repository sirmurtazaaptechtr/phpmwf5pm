<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>File Uploads</h1>
    <main class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="fileToUpload" class="form-label">Select file to upload:</label>
                        <input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
                    </div>       
                    <input type="submit" class="btn btn-success" value="Upload" name="submit">
                </form>
            </div>
        </div>
    </main>
</body>

</html>