<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://sdk.amazonaws.com/js/aws-sdk-2.1.24.min.js"></script>
    <script src="aws_config.js"></script>
    <script src="s3_upload.js"></script>
</head>

<body>
    <form id="uploadForm" method='post' enctype="multipart/form-data">
        <h3>Upload File</h3><br />
        <input type='file' name="upFile" id="upFile" required="" />
        <br>
        <input type='submit' value='Upload' />
    </form>
</body>

</html>