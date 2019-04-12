<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 8/28/18
 * Time: 3:06 PM
 */

namespace App\Http\Controllers;

use App\Models\Bio;
use Backpack\Base\app\Models\BackpackUser;
use App\Http\Requests\ContactMailRequest;
use Snowfire\Beautymail\Beautymail;


class PortfolioController extends Controller
{

    public function __construct()
    {
        // filter user by name and returning id
        $this->Admin = BackpackUser::where('name', 'Babatunde Adelabu')->first();

        // selecting all user's info from database
        $this->user = Bio::where('id', $this->Admin->id)->first();

        // setting up home advertise
        $this->advert = [
            'phrase' => 'Like what you see?',
            'link' => '/Contact',
            'statement' => 'Contact me',
            'cv' => false
        ];

        // selecting image path for images stored in storage
        $this->image_path = '';
    }


    /*
     *
     *
     * @return Response
     */
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // selecting all registered projects of user from database
        $projects = $this->user->projects;

        // get all features
        $features = $this->user->specialSkills;

        // return view with data needed for view
        return view('index', [
            'user' => $this->user,
            'projects' => $projects,
            'advert' => $this->advert,
            'skills' => $features,
        ]);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        // selecting name,dob,email and phone_number from database
        $contact = $this->user;


        // return view with data needed for view
        return view('contact', ['contact' => $contact]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projects()
    {
        // selecting all registered projects of user from database
        $projects = $this->user->projects;


        // return view with data needed for view
        return view('Projects', [
            'projects' => $projects,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resume()
    {
        // selecting bio to fit in resume page
        $this->advertise['cv'] = true;

        // selecting all work experiences from database
        $works = $this->user->works->sortByDesc('start_on')->values()->all();

        // selecting all education background from the database
        $educations = $this->user->educations->sortByDesc('start_on')->values()->all();

        // selecting all skill sets from database
        $skills = $this->user->skills;

        // selecting all hobbies from database and convert hobbies to string
        $hobbies = $this->user->hobbies->implode('name', ', ');


        // return view with data needed for view
        return view('resume', [
            'user' => $this->user,
            'advert' => $this->advert,
            'works' => $works,
            'educations' => $educations,
            'skills' => $skills,
            'hobbies' => $hobbies,
        ]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function mail(ContactMailRequest $request)
    {
        $data = $request->validated();
        dd($data);
        return response()->json([
            'code'=> 'testing',
            'message' => $data['name'],
        ]);
        //$data = $request->all();
//        if (!empty($data['name']) && !empty($data['subject']) && !empty($data['email']) && !empty($data['message'])) {
//
//            // send responder to client
//            $client = $this->mailer('email.contactmail', [
//                'view' => [
//                    'name' => $data['name'],
//                    'subject' => $data['subject']
//                ],
//                'sender' => [
//                    'name' => config('app.name'),
//                    'email' => $this->user->email
//                ],
//                'client' => [
//                    'name' => $data['name'],
//                    'email' => $data['email'],
//                    'subject' => $data['subject']
//                ]
//            ]);
//
//            if ($client)
//            {
//                // send client mail to Admin
//                $admin = $this->mailer('email.Admin', [
//                    'view' => [
//                        'name' => $data['name'],
//                        'email' => $data['email'],
//                        'subject' => $data['subject'],
//                        'message' => $data['message']
//                    ],
//                    'client' => [
//                        'name' => config('app.name'),
//                        'email' => $this->user->email,
//                        'subject' => $data['subject']
//                    ],
//                    'sender' => [
//                        'name' => $data['name'],
//                        'email' => $data['email']
//                    ]
//                ]);
//
//                if ($admin)
//                {
//                    return response()->json([
//                        'code' => 'Well done!',
//                        'message' => ' Message send successfully.'
//                    ], 200);
//                } else {
//                    return response()->json([
//                        'message' => 'Error: Please try again later.'
//                    ], 400);
//                }
//            }
//        } else {
//            return response()->json([
//                'message' => 'Error: required data can not be empty.'
//            ], 400);
//        }
    }

    /**
     * @param String $mail_view
     * @param array $data
     * @return bool
     */
    private function mailer(String $mail_view, Array $data)
    {
        $sender = $data['sender'];
        $client = $data['client'];

        // declare mail class to use
        $mail = app()->make(Beautymail::class);
        // send mail
        $mail->send($mail_view, ['view' => $data['view'] ],
            function ($message) use($sender, $client) {
                $message->from($sender['email'], $sender['name'])
                    ->to($client['email'], $client['name'])
                    ->subject($client['subject']);
            });
        return true;
    }
}
