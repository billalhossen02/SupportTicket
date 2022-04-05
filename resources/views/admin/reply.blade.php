<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Reply Ticket</title>
    <style>
      .design 
        {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            margin-top: 80px;
        }
    </style>

  </head>
<body>
  
  <div class="container design">
      <div class='row'>
      <div class="col-md-6">
          <h3 class="header">REPLY TICKET</h3>
          <hr>  
    <div class="col-md-6 design">
      <form action="{{url('reply/'.$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group purple-border">
              <label for="exampleFormControlTextarea4">Reply</label>
              <textarea name="message" class="form-control" id="exampleFormControlTextarea4" rows="5" placeholder="Message"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">Attachments</label>
              <input type="file" name="attachment" class="form-control-file" id="exampleFormControlFile1">
            </div> 

            <button type="submit" class="btn btn-success">Send</button>

      </form>

     </div>
    </div>
   </div>
  </div>
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>