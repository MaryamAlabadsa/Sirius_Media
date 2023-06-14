<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Info;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //        $info = Info::all();
        $slider = Info::select('json_data')
            ->where('json_key', 'slider')
            ->first()->slider;
        // $link = Info::select('json_data')
        //     ->where('json_key', 'link')
        //     ->first()->link;
        // dd($link);
        $info = Info::first();
        $about = Info::select('json_data')
            ->where('json_key', 'about')
            ->first()->about;
        $note = Info::select('json_data')
            ->where('json_key', 'note')
            ->first()->note;
        $services = Service::all();
        // dd($services);
        $projects = Project::all();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $projectOne =  Project::first();

        // $services = Service::paginate(4);
        return view('landing_page.home', compact(
            'slider',
            'info',
            'about',
            'note',
            'services',
            'projects',
            'blogs',
            // 'link',
            'projectOne'
        ));
    }

    public function storeComment(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required | string | min:3 | max:100',
            'email' => 'string | string | min:3 | max:100',
            'comment' => 'string | string | min:3 | max:100',
        ]);
        if (!$validator->fails()) {
            $info = Info::first();
            $comment = new Comment();
            $comment->name = $request->input('name');
            $comment->email = $request->input('email');
            $comment->comment = $request->input('comment');
            // $comment->completed_time = 'asdfasdfasd';

            $isSaved = $info->comments()->save($comment);

            return redirect()->back();
        } else {
            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }

    public function sendEmail(Request $request)
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $organization = $request['organization'];
        $job_title = $request['job_title'];
        $msg = $request['message'];
        $email_from = $name . '<' . $email . '>';
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = 'maryamalabadsa@gmail.com';                     //SMTP username
            $mail->Password = 'ekiuqvzbqelmlwls';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port = 465;
            $mail->CharSet = 'UTF-8';
            $mail->ContentType = 'text/html; charset=UTF-8';

            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('maryamalabadsa@gmail.com', $name);
            $mail->addAddress('info@springfltd.co.uk', 'spring field');     //Add a recipient
            $mail->addReplyTo($email, 'Information');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'New massage from ' . $name;

            $mail->Body = 'Name : ' . $name
                . '<br>  Email : ' . $email
                . '<br> Phone : ' . $phone
                . '<br> organization : ' . $organization
                . '<br> job_title : ' . $job_title
                . '<br> <b>  Message : ' . $msg . ' </b>';

            $mail->send();
            echo 'sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
