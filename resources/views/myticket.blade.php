<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>My Ticket</title>
</head>
<body>

        <div class="container">
            <div class="col-md-10">
                <a href="{{route('template')}}"><button class="btn btn-success float">New Ticket</button></a>
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
                          <a href="{{url('Reply/Blade/'.$item->id)}}"><button class="btn btn-info">Show Reply</button></a>
                          {{-- <a href="{{url('delete/'.$item->id)}}"><button class="btn btn-danger"><i class="la la-trash"></i></button></a>   --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           <div class="pagi"> {{$data->links()}} </div>
          </div>
        </div>
        
</html>