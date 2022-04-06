<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Open Ticket</title>
</head>

<body>
  <div class="container design">
      <div class="col-md-10">
          <h3 class="header">OPEN TICKET</h3>
          <hr>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Name" required>
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="inputPassword4" placeholder="Email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input name="subject" type="text" class="form-control" id="inputAddress" placeholder="Subject" required>
        </div>
       
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputState">Department</label>
                <select name="department" class="form-control" required>
                  <option selected>Technical Support </option>
                  <option>Refund Support</option>
                  <option>Sales and Billings</option>
                  <option>General Enquiries </option>
                </select>
              </div>

         
          <div class="form-group col-md-6">
            <label for="inputState">Priority</label>
            <select name='priority' class="form-control" required>
              <option selected>High</option>
              <option>Medium</option>
              <option>Low</option>
            </select>
          </div>
        </div>
        <div class="form-group purple-border">
            <label for="exampleFormControlTextarea4">Message</label>
            <textarea name="message" class="form-control" id="exampleFormControlTextarea4" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Attachments</label>
            <input type="file" name="attachment" class="form-control-file" id="exampleFormControlFile1">
          </div>

        <a href="{{route('myticket')}}"><button type="button" class="btn btn-danger">Cancel</button></a>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>  
  </div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>