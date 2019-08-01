<?php
/**
 * Created by PhpStorm.
 * User: Babatunde Adelabu
 * Date: 8/28/18
 * Time: 3:06 PM
 */

namespace App\Http\Controllers;

use App\Models\Bio;
use App\Models\Education;
use App\Models\EpicSkills;
use App\Models\Hobbies;
use App\Models\Projects;
use App\Models\Skills;
use App\Models\Work;
use Backpack\Base\app\Models\BackpackUser;
use App\Http\Requests\ContactMailRequest;
use Snowfire\Beautymail\Beautymail;


class PortfolioController extends Controller
{

    public function __construct()
    {
        // filter user by name and returning id
        $this->user = BackpackUser::where('name', 'Babatunde Adelabu')->first();

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
        // selecting all user's info from database
        $bio = Bio::where('user_id', $this->user->id)->first();

        // selecting all registered projects of user from database
        $projects = Projects::where('user_id', $this->user->id)->get();

        // selecting all special skills with type frontend of user from database
        $frontend = EpicSkills::where(['user_id' => $this->user->id, 'type' => 'frontend'])->get();

        // selecting all special skills with type backend of user from database
        $backend = EpicSkills::where(['user_id' => $this->user->id, 'type' => 'backend'])->get();

        // selecting all special skills with type security of user from database
        $security = EpicSkills::where(['user_id' => $this->user->id, 'type' => 'security'])->get();

        // return view with data needed for view
        return view('index', [
            'user' => $bio,
            'projects' => $projects,
            'advert' => $this->advert,
            'skills' => [
                'frontend' => $frontend->random(),
                'backend' => $backend->random(),
                'security' => $security->random()
            ],
            'image_path' => $this->image_path
        ]);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        // selecting name,dob,email and phone_number from database
        $contact = Bio::where('user_id', $this->user->id)->first();


        // return view with data needed for view
        return view('contact', ['contact' => $contact]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projects()
    {
        // selecting all registered projects of user from database
        $projects = Projects::where('user_id', $this->user->id)->get();


        // return view with data needed for view
        return view('Projects', [
            'projects' => $projects,
            'image_path' => $this->image_path
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function resume()
    {
        // selecting bio to fit in resume page
        $this->advertise['cv'] = true;

        // selecting all user's info from database
        $user = Bio::where('user_id', $this->user->id)->first();

        // selecting all work experiences from database
        $works = Work::where('user_id', $this->user->id)->orderBy('start_on', 'DESC')->get();

        // selecting all education background from the database
        $education = Education::where('user_id', $this->user->id)->orderBy('start_on', 'DESC')->get();

        // selecting all skill sets from database
        $skills = Skills::where('user_id', $this->user->id)->get();

        // selecting all hobbies from database
        $hobbies = Hobbies::where('user_id', $this->user->id)->get();

        // convert hobbies to string
        $hobby = $hobbies->implode('name', ', ');

        // return view with data needed for view
        return view('resume', [
            'user' => $user,
            'advert' => $this->advert,
            'works' => $works,
            'educations' => $education,
            'skills' => $skills,
            'hobbies' => $hobby,
        ]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function mail(ContactMailRequest $request)
    {
        $data = $request->validated();

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