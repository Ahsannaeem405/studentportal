<?php

namespace App\Http\Controllers;

use App\Mail\contact_mail;
use App\Models\Advisor;
use App\Models\contactlists;
use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PDO;
use Session;

use PDOException;
use SebastianBergmann\Environment\Console;

class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // dd($_FILES["img "]["name"]);
        $img= null;

        $user = User::find(Auth::user()->id);



        if (Hash::check($request->password, $user->password)) {

            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);
            $img=$_FILES["img"]["name"];
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

            // dd(   $img);

            $new =   Hash::make($request->cpassword);
            $pdo =   pdo();

            $sql = "UPDATE users SET name=?, email=?, number=?, password=?, mon_start_time=?, mon_end_time=?, tue_start_time=?, tue_end_time=?,
        wed_start_time=?, wed_end_time=?, thu_start_time=?, thu_end_time=?, fri_start_time=?, fri_end_time=?,
        sat_start_time=?, sat_end_time=?, sun_start_time=?, sun_end_time=?, img=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                $request->name, $request->email, $request->number,  $new, $request->mon_start_time, $request->mon_end_time,
                $request->tue_start_time, $request->tue_end_time, $request->wed_start_time, $request->wed_end_time, $request->thu_start_time,
                $request->thu_end_time,   $request->fri_start_time,  $request->fri_end_time, $request->sat_start_time, $request->sat_end_time,
                $request->sun_start_time,  $request->sun_end_time, $img,  Auth::user()->id
            ]);

            return back()->with('success', 'Updated Successfully');
        } else {
            return back()->with('error', "Password Does't Match");
        }
    }



  public function  contacts(Request $request){



    $name =  $request->name;
    $email = $request->email;
    $subject =  $request->subject;
    $message =   $request->message;

    Session::put('subject', $subject);


    $details = [
        'title' =>  $name,
        'body' => $message
    ];

    Mail::to(  $email)->send(new contact_mail($details));
    // return view('emails.thanks');



  }



    public function Available(Request $request)
    {


        $date = date('Y-m-d');

        $user = User::find(Auth::user()->id);


            $pdo =   pdo();

            $sql = "UPDATE appointments SET status=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['Approved', $request->id]);



            $sql = 'SELECT * FROM contactlists WHERE sender ='.Auth::user()->id.' AND  receiver ='.$request->stuID.' ';
            $statement = $pdo->prepare($sql);

            $statement->execute();

            $contact = $statement->fetch(PDO::FETCH_ASSOC);


            $sql2 = 'SELECT * FROM contactlists WHERE receiver ='.Auth::user()->id.' AND  sender ='.$request->stuID.' ';
            $statement2 = $pdo->prepare($sql2);

            $statement2->execute();

            $contact2 = $statement2->fetch(PDO::FETCH_ASSOC);


        // $contact = contactlists::where('sender', Auth::user()->id)->where('receiver', $request->stuID)->get();
        // $contact2 = contactlists::where('receiver', Auth::user()->id)->where('sender', $request->stuID)->get();


        if ($contact == false && $contact2 == false) {

            $sql = "INSERT INTO contactlists (sender, receiver, created_at, updated_at) VALUES (?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([Auth::user()->id, $request->stuID, $date ,$date]);

            // $contactlist = new contactlists();
            // $contactlist->sender = Auth::user()->id;
            // $contactlist->receiver = $request->stuID;
            // $contactlist->save();


        }



        $sqlm = "INSERT INTO messages (sender, receiver, sender_read, message, created_at, updated_at) VALUES (?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sqlm);
        $stmt->execute([Auth::user()->id, $request->stuID, "1", $request->message ,$date ,$date ]);

        // $message = new Message();
        // $message->sender = Auth::user()->id;
        // $message->receiver = $request->stuID;
        // $message->sender_read = "1";
        // $message->message = $request->message;
        // $message->save();

        // dd($contact , $contact2, $request,  );


        return redirect('/chat?id=' . $request->stuID . '');


    }


    function chat()
    {



        // $pdo =   pdo();

        // $contact1 = 'SELECT * FROM contactlists where receiver='.Auth::user()->id.' OR  sender='.Auth::user()->id.' ';

        // $contact = $pdo->query($contact1);
        // $contact->setFetchMode(PDO::FETCH_ASSOC);


        // $message1 = 'SELECT * FROM messages WHERE sender='.Auth::user()->id.' OR  receiver='.Auth::user()->id.' ORDER BY id DESC Limit 1';

        // $message = $pdo->query($message1);
        // $message->setFetchMode(PDO::FETCH_ASSOC);

        $contact = contactlists::where('sender', Auth::user()->id)->orwhere('receiver', Auth::user()->id)->get();
        $message = Message::where('sender', Auth::user()->id)->orwhere('receiver', Auth::user()->id)->orderBy('id', 'DESC')->limit(1)->get();

        return view('chat', compact('contact'));
    }




        function showchat(Request $request)
        {


            $auth = Auth::user()->id;
            $user = intval($request->id);

            $msg = DB::select("select * from  messages where (((`sender`=$auth and `receiver`=$user) OR (`sender`=$user and `receiver`=$auth)) and ((`sender_read`=1) and (`receiver_read`=1) or (`receiver_read`=0)))");
            $msg2 = DB::select("Update   messages set `receiver_read`=1 where ((`sender`=$auth and `receiver`=$user) OR (`sender`=$user and `receiver`=$auth)) And (`receiver_read`=0 And `receiver`=$auth)");


            return response()->json($msg);
        }



        public function getMSG2(Request $request)
        {



            $auth = Auth::user()->id;
            $user = intval($request->id);

            $msg = DB::select("select * from  messages where ((`sender`=$auth and `receiver`=$user) OR (`sender`=$user and `receiver`=$auth)) And (`receiver_read`=0 And `receiver`=$auth)");

            $msg2 = DB::select("Update   messages set `receiver_read`=1 where ((`sender`=$auth and `receiver`=$user) OR (`sender`=$user and `receiver`=$auth)) And (`receiver_read`=0 And `receiver`=$auth)");



            return response()->json($msg);

        }




    public function sendMSG(Request $request)
    {


$date = date('Y-m-d');


$pdo =   pdo();

        $sqlm = "INSERT INTO messages (sender, receiver, sender_read, message , created_at, updated_at) VALUES (?,?,?,?,?,?)";
        $message = $pdo->prepare($sqlm);
        $message->execute([Auth::user()->id, $request->receiver, "1",$request->message,$date, $date]);



        $msg = DB::select("select * from  messages ORDER BY id DESC");





        // $message = new Message();
        // $message->sender = Auth::user()->id;
        // $message->receiver = $request->receiver;
        // $message->sender_read = "1";
        // $message->message = $request->message;
        // $message->save();

        return response()->json($msg);
    }

    public function appointment(Request $request)
    {

        $timestamp = strtotime($request->date);
        $day = date('D', $timestamp);
        $pdo =   pdo();

       $date =  date("Y/m/d");
        if ($day == 'Mon') {


            // $pdo = new PDO('mysql:host=127.0.0.1;dbname=student_portal', 'root', '');

            $sql = 'SELECT mon_start_time, mon_end_time FROM users WHERE id =' . $request->id . '';
            $statement = $pdo->prepare($sql);

            $statement->execute();

            $publisher = $statement->fetch(PDO::FETCH_ASSOC);

            if ($publisher['mon_start_time'] <= $request->start_time && $publisher['mon_end_time'] >= $request->end_time) {
                $sql = "INSERT INTO appointments (stuID, AdvisorID, appt_start_time, appt_end_time , appt_date, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([Auth::user()->id, $request->id, $request->start_time, $request->end_time, $request->date , $date, $date]);

                return back()->with('success', 'Appointment submitted successfull');
            } else {
                return back()->with('error', "Advisor does't available this time");
            }
        } elseif ($day == 'Tue') {


            // $pdo = new PDO('mysql:host=127.0.0.1;dbname=student_portal', 'root', '');

            $sql = 'SELECT tue_start_time, tue_end_time FROM users WHERE id =' . $request->id . '';
            $statement = $pdo->prepare($sql);

            $statement->execute();

            $publisher = $statement->fetch(PDO::FETCH_ASSOC);

            if ($publisher['tue_start_time'] <= $request->start_time && $publisher['tue_end_time'] >= $request->end_time) {
                $sql = "INSERT INTO appointments (stuID, AdvisorID, appt_start_time, appt_end_time , appt_date, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([Auth::user()->id, $request->id, $request->start_time, $request->end_time, $request->date, $date, $date]);

                return back()->with('success', 'Appointment submitted successfull');
            } else {
                return back()->with('error', "Advisor does't available this time");
            }
        } elseif ($day == 'Wed') {


            // $pdo = new PDO('mysql:host=127.0.0.1;dbname=student_portal', 'root', '');

            $sql = 'SELECT wed_start_time, wed_end_time FROM users WHERE id =' . $request->id . '';
            $statement = $pdo->prepare($sql);

            $statement->execute();

            $publisher = $statement->fetch(PDO::FETCH_ASSOC);

            if ($publisher['wed_start_time'] <= $request->start_time && $publisher['wed_end_time'] >= $request->end_time) {
                $sql = "INSERT INTO appointments (stuID, AdvisorID, appt_start_time, appt_end_time , appt_date, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([Auth::user()->id, $request->id, $request->start_time, $request->end_time, $request->date, $date, $date]);

                return back()->with('success', 'Appointment submitted successfull');
            } else {
                return back()->with('error', "Advisor does't available this time");
            }
        } elseif ($day == 'Thu') {

            // $pdo = new PDO('mysql:host=127.0.0.1;dbname=student_portal', 'root', '');

            $sql = 'SELECT thu_start_time, thu_end_time FROM users WHERE id =' . $request->id . '';
            $statement = $pdo->prepare($sql);

            $statement->execute();

            $publisher = $statement->fetch(PDO::FETCH_ASSOC);

            if ($publisher['thu_start_time'] <= $request->start_time && $publisher['thu_end_time'] >= $request->end_time) {
                $sql = "INSERT INTO appointments (stuID, AdvisorID, appt_start_time, appt_end_time , appt_date, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([Auth::user()->id, $request->id, $request->start_time, $request->end_time, $request->date, $date, $date]);

                return back()->with('success', 'Appointment submitted successfull');
            } else {
                return back()->with('error', "Advisor does't available this time");
            }
        } elseif ($day == 'Fri') {


            // $pdo = new PDO('mysql:host=127.0.0.1;dbname=student_portal', 'root', '');

            $sql = 'SELECT fri_start_time, fri_end_time FROM users WHERE id =' . $request->id . '';
            $statement = $pdo->prepare($sql);

            $statement->execute();

            $publisher = $statement->fetch(PDO::FETCH_ASSOC);

            if ($publisher['fri_start_time'] <= $request->start_time && $publisher['fri_end_time'] >= $request->end_time) {
                $sql = "INSERT INTO appointments (stuID, AdvisorID, appt_start_time, appt_end_time , appt_date, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([Auth::user()->id, $request->id, $request->start_time, $request->end_time, $request->date, $date, $date]);

                return back()->with('success', 'Appointment submitted successfull');
            } else {
                return back()->with('error', "Advisor does't available this time");
            }
        } elseif ($day == 'Sat') {


            // $pdo = new PDO('mysql:host=127.0.0.1;dbname=student_portal', 'root', '');

            $sql = 'SELECT sat_start_time, sat_end_time FROM users WHERE id =' . $request->id . '';
            $statement = $pdo->prepare($sql);

            $statement->execute();

            $publisher = $statement->fetch(PDO::FETCH_ASSOC);

            if ($publisher['sat_start_time'] <= $request->start_time && $publisher['sat_end_time'] >= $request->end_time) {
                $sql = "INSERT INTO appointments (stuID, AdvisorID, appt_start_time, appt_end_time , appt_date, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([Auth::user()->id, $request->id, $request->start_time, $request->end_time, $request->date, $date, $date]);

                return back()->with('success', 'Appointment submitted successfull');
            } else {
                return back()->with('error', "Advisor does't available this time");
            }
        } else {

            // $pdo = new PDO('mysql:host=127.0.0.1;dbname=student_portal', 'root', '');

            $sql = 'SELECT sun_start_time, sun_end_time FROM users WHERE id =' . $request->id . '';
            $statement = $pdo->prepare($sql);

            $statement->execute();

            $publisher = $statement->fetch(PDO::FETCH_ASSOC);

            if ($publisher['sun_start_time'] <= $request->start_time && $publisher['sun_end_time'] >= $request->end_time) {
                $sql = "INSERT INTO appointments (stuID, AdvisorID, appt_start_time, appt_end_time , appt_date, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([Auth::user()->id, $request->id, $request->start_time, $request->end_time, $request->date, $date, $date]);

                return back()->with('success', 'Appointment submitted successfull');
            } else {
                return back()->with('error', "Advisor does't available this time");
            }
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function show(Advisor $advisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function edit(Advisor $advisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advisor $advisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advisor  $advisor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advisor $advisor, $id)
    {
        // dd($id);

        $user = User::find(Auth::user()->id);


        $pdo =   pdo();

            $sql = "DELETE FROM appointments WHERE id=?";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);

            return back()->with('success', 'Updated Successfully');
    }
}
