<!DOCTYPE html>

<html>

<head>

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 

    <script src="http://malsup.github.com/jquery.form.js"></script> 

</head>

<body>


<div class="container">

  

    <div class="panel panel-primary">

      <div class="panel-heading"></div>

      <div class="panel-body">
   

          <form action="imageUpload.php" enctype="multipart/form-data" class="form-horizontal" method="post">

            <div class="preview"></div>  <!-- msg print by me -->

            <input type="file" name="image" class="form-control" style="width:30%" />

            <br/>

            <button class="btn btn-success upload-image" type="submit" name='btnSubmit'
                                                                                      value="Submit Image">Upload</button>

          </form>


      </div>

    </div>

</div>


<script type="text/javascript">

    $(document).ready(function() {

        $(".upload-image").click(function(){

            $(".form-horizontal").ajaxForm({target: '.preview'}).submit();

        });

    }); 

</script>


</body>

</html>