<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <style>
        .col-md-8
            {
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                margin-top: 30px;
            }

            .header{
                background-color: rgb(78, 158, 84);
                color: blanchedalmond;
                font-weight: 650;
                letter-spacing: 1.5px;
            }

            form label {
                color:rgb(138, 24, 24)
            }

            .table{
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                margin-top: 70px;
            }

            thead{
                background-color: rgb(78, 158, 84);
                color: blanchedalmond;
            }

            .float{

                float:right;

            }

            .pagi{

                padding-top:20px;
    }
 </style>

    <title>Ticket</title>
</head>
<body>

        <div class="container">
            <div class="col-md-8">
              <table class="table">
                <thead>
                <tr>
                    <th>Department</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                    <tr>
                        <td>{{$item->department}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->status}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <a href="{{url('admin/reply/'.$item->id)}}"><button class="btn btn-success">Reply</button></a>
                           <a href="{{url('edit/ticket/'.$item->id)}}"><button class="btn btn-primary"><i class="la la-eye"></i></button></a> 
                          <a href="{{url('delete/'.$item->id)}}"><button class="btn btn-danger"><i class="la la-trash"></i></button></a>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           <div class="pagi"> {{$data->links()}} </div>
          </div>
        </div>
        
</html>