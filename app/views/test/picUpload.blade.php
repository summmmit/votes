<!DOCTYPE html>
<html>
<body>

<form action="{{ URL::Route('account-test-pic-upload-post'); }}" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Upload Image" name="submit">
    {{ Form::token(); }}
</form>

</body>
</html>