<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="app.css">
    <title>Ticket Reply</title>
    <style>
      textarea.form-control 
      {
      height: auto;
      width: 500px;
      }
      </style>
</head>
  <body style="margin-top: 30px; margin-left: 200px;">


    <main class="content">
      <div class="container p-0">
        <h1 class="h3 mb-3">Ticket No #{{$data->id}}</h1><hr>
          <div class="col-12 col-lg-7 col-xl-9">
            <div class="position-relative">
              <div class="chat-messages p-6">
               
                @foreach ($admin_reply as $item)
                <div class="chat-message-left pb-4">
                  <div class="row">
                    <div class="">
                      @if ($item->role == 'Admin')
                      <img src="{{asset('avatar/avatar1.png')}}" class="rounded-circle mr-1" alt="Admin" width="40" height="40">
                      @else
                      <img src="{{asset('avatar/avatar4.png')}}" class="rounded-circle mr-1" alt="User" width="40" height="40">
                      @endif
                    </div>
                    <div class="col-lg-8">
                    <div class="text-muted small text-nowrap mt-2"><b><strong>{{$item->role}}</strong></b> {{$item->created_at}}</div>
                    {{$item->message}}<br>
                    @if($item->attachment)
                        <img src="{{asset('Attachment/'.$item->attachment)}}" style="height: 150px; width: 200px;">
                    @endif
                    </div>
                   </div> 
                  </div> 
                  @endforeach
  
                  <form action="{{url('reply/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group purple-border">
                          <label for="exampleFormControlTextarea4">Reply</label>
                          <textarea name="message" class="form-control" id="exampleFormControlTextarea4" rows="1" placeholder="Message"></textarea>
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
   </main>
 </body>
</html>