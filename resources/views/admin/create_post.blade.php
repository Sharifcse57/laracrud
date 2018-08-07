<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  {{ Html::style('css/app.css') }}
</head>
<body>
<div class="row">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <form action="/posts" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title :</label>
                    <input type="title" name="title" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="details">Details :</label>
                    <input type="details" name="details" class="form-control" id="details">
                </div>
               
               

                <!-- <textarea class="form-control" id="summary-ckeditor"></textarea> -->

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <!-- <form action="/posts" enctype="multipart/form-data" method="POST">
                <p>
                    <label for="photo">
                        <input type="file" name="photo" id="photo">
                    </label>
                </p>
                <button>Upload</button>
                {{ csrf_field() }}
            </form> -->
        </div>
    </div>
</div>

{{ Html::script('js/app.js') }}
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script> 

<script>  CKEDITOR.replace( 'summary-ckeditor', options );</script>

</body>



</html>