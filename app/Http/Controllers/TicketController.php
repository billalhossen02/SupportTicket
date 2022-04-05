<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use App\Models\Support;
use App\Models\SupportDetail;
use App\Models\UserReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function ticket()
    
    {
        return view('openticket');
    }

    public function storeData(Request $request)

    {
        $data = new SupportDetail();
        $data->user_id = Auth::user()->id;
        $data->user_name = $request->name;
        $data->user_email = $request->email;
        $data->subject = $request->subject;
        $data->department = $request->department;
        $data->priority = $request->priority;
        $data->message = $request->message;

      if($attachment = $request->file('attachment'))
      {
        $dest = 'Attachment';
        $getext = date('Ymdhis'). '.' .$attachment->getClientOriginalExtension();
        $attachment->move($dest, $getext);
        $data->attachment = $getext;
      }
     else
        {
            $data->attachment = '0';
        }
        
        $data->save();
        
        return redirect()->route('myticket');

    }

    public function adminTicket()

    {

        $data = SupportDetail::latest()->paginate(5);
        return view('admin/myticket',['data' => $data]);

    }

    public function myTicket()

    {
        $data = SupportDetail::where('user_id', Auth::user()->id)->latest()->paginate(5);
        return view('myticket',['data' => $data]);
    }

    public function editTicket($id)

    {
        $data = SupportDetail::find($id);
        return view('admin/edit',compact('data'));
    }

    public function updateTicket(Request $request, $id )

    {
       
        // $attachment = $request->file('attachment');
        // $dest = 'Attachment';
        // $getext = date('Ymdhis'). '.' .$attachment->getClientOriginalExtension();
        // $attachment->move($dest, $getext);
        
        SupportDetail::find($id)->update([

            // 'user_name' => $request->name,
            // 'user_email' => $request->email,
            // 'subject' => $request->subject,
            // 'department' => $request->department,
            // 'priority' => $request->priority,
            // 'message' => $request->message,
            // 'attachment' => $getext,
            'status' => $request->status

        ]);

        return redirect()->route('admin/ticket');
    }

    public function deleteTicket($id)

    {
        $data = SupportDetail::find($id)->delete();
        return redirect()->route('admin/ticket');
    }


    public function reply(Request $request, $id)
    {

        $data = New Support();
        $data->ticket_id = $id;
        $data->user_id =Auth::user()->id;
        $data->message = $request->message;

       if($attachment = $request->file('attachment'))
       {
        $dest = 'Attachment2';
        $getext = date('Ymdhis'). '.' .$attachment->getClientOriginalExtension();
        $attachment->move($dest,$getext);
        $data->attachment = $getext;
       }
       else
       {
           $data->attachment - '0';
       }
       
        $data->save();

        return redirect()->route('admin/ticket'); 

    }

    public function replyBlade($id)

    {
        $data = SupportDetail::find($id);
        $user_reply = DB::table('user_replies')->where('ticket_id', $id)->get();
        $admin_reply = DB::table('supports')->where('ticket_id', $id)->get();
        return view('reply',compact('user_reply','admin_reply','data'));
    }

    public function userReply(Request $request, $id)
    {
        $data = New UserReply();
        $data->ticket_id = $id; 
        $data->user_id = Auth::user()->id;
        $data->message = $request->message;

       if($attachment = $request->file('attachment'))
       {
        $dest = 'Attachment3';
        $getext = date('Ymdhis'). '.' .$attachment->getClientOriginalExtension();
        $attachment->move($dest,$getext);
        $data->attachment = $getext;
       }
       else
       {
        $data->attachment = '0'; 
       }
       
        $data->save();

        return redirect()->route('myticket'); 
    }

    public function adminReply($id)

    {
        $data = SupportDetail::find($id);
        return view('admin/reply',['data' => $data]);
    }
}
