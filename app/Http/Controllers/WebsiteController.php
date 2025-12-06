<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\About;
use App\Models\Accessibilty;
use App\Models\Expertise;
use App\Models\Funding;
use App\Models\Team;
use App\Models\Career;
use App\Models\Category;
use App\Models\Complaint;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Cookie;
use App\Models\Disclaimer;
use App\Models\Dispute;
use App\Models\Legal;
use App\Models\Post;
use App\Models\Privacy;
use App\Models\Terms;
use App\Models\Cv;
use App\Models\User;
use App\Models\CvPractice;
use App\Models\CvDescription;
use App\Models\PracticeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Hash;

class WebsiteController extends Controller
{
    public function index()
    {
        
 

        $slider = Slider::all();
        $Expertise = Expertise::where('parent_id',null)->get();

        $About = About::first();
        $Post = Post::with('category')->limit(3)->orderBy('id','desc')->get();

        return view('website.index', ['slider' => $slider, 'about' => $About, 'expertise' => $Expertise, 'posts' => $Post]);
    }
    public function team()
    {
        $Team = Team::orderby('sort_no','asc')->paginate(100);
        return view('website.team', ['team' => $Team]);
    }
    public function loadMore($qty)
    {
        $team = Team::orderby('sort_no','asc')->paginate(6 * $qty);
        $view = view('website.team_com', ['team' => $team])->render();

        return \Response::json(['status' => 200, 'view' => $view]);
    }

    public function view($id)
    {
       $team=Team::where('title',str_replace("_"," ",$id))->first();
       if(!isset($team)){
       abort(404);
       }
        $cv = Cv::where('user_id', $team['id'])->first();
        if ($cv) {
            $catgeories=PracticeCategory::orderBy('order_no','ASC')->get();
            $cv_practice=[];
            foreach($catgeories as $catgeory){
                
                 $cv_pr = CvPractice::with('category')->where('cv_id', $cv->id)->where('practice_category_id',$catgeory['id'])->first();
                 if($cv_pr!=null){
                      array_push($cv_practice,$cv_pr);
                     
                 }
                 
                
                
            }
            
            // return $cv_practice;
           
            $cv_desc = CvDescription::where('cv_id', $cv->id)->get();
            $team =  $team->designation;
            return view('website.cv', ['cv' => $cv, 'cv_practice' => $cv_practice, 'cv_desc' => $cv_desc, 'team' => $team]);
        } else {
            return view('website.cv', ['cv' => $cv, 'cv_practice' => '', 'cv_desc' => '', 'team' => '']);
        }
    }

    public function expertise($id)
    {
        $Expertise_detail = Expertise::where('title', str_replace("_"," ",$id))->first();

        return view('website.expertise', ['expertise_detail' => $Expertise_detail]);
    }
    public function funding()
    {
        $Funding = Funding::all();
        return view('website.funding', ['funding' => $Funding]);
    }
    public function career()
    {
        $career = Career::all();
        return view('website.career', ['career' => $career]);
    }

    public function blog()
    {
        $category = Category::withCount('posts')->get();
        $posts = Post::with('category')->orderBy('id','desc')->get();
        $latest_post = Post::take(4)->orderBy('id', 'DESC')->get();
        return view('website.blog', ['posts' => $posts, 'latest_post' => $latest_post, 'catgeory' => $category]);
    }
    public function blog_detail($id)
    {
        $category = Category::withCount('posts')->get();
        $post = Post::with('category')->where('id', $id)->first();
        $latest_post = Post::take(4)->orderBy('id', 'DESC')->get();
        $recent_posts = Post::where('category_id', $post->category['id'])->take(3)->orderBy('id', 'DESC')->get();

        return view('website.detail', ['post' => $post->toArray(), 'latest_post' => $latest_post, 'catgeory' => $category, 'recent_posts' => $recent_posts]);
    }
    public function catgeory_blog($id)
    {
        $latest_post = Post::with('category')->where('category_id', $id)->orderBy('id', 'DESC')->get();

        return view('website.category_blog', ['post' => $latest_post->toArray()]);
    }
    public function contact()
    {
        $contact = Contact::all();
        return view('website.contact', ['contact' => $contact]);
    }
    public function contact_insert(Request $request)
    {
        // if (!empty($request->file)) {
        //     $imageName = time() . '.' . $request->file->extension();
        //     $request->file->move(public_path('/images'), $imageName);
        // } else {
        //     $imageName = '';
        // }
        $data = [
            'first_name' => $request->first_name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'tel' => $request->tel,
            'description' =>  $request->description,
        ];
        ContactUs::insert($data);
        return redirect('/contact')->with('success', 'Your Query Has Been Received.');
    }
    public function apply()
    {
        return view('website.apply');
    }
    public function apply_insert(Request $request)
    {
        if (!empty($request->file)) {
            $imageName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('/images'), $imageName);
        } else {
            $imageName = '';
        }
        $data = [
            'first_name' => $request->first_name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'tel' => $request->tel,
            'description' =>  $imageName,
            'type' =>  '1',
        ];

        ContactUs::insert($data);
        return redirect('/apply')->with('success', 'Your Query Has Been Received.');
    }

    /* footer links */
    public function complaint_procedure()
    {
        $complaints = Complaint::first();
        return view('website.complaint-procedure', ['complaint' => $complaints]);
    }
    public function terms_of_use()
    {
        $terms_and_condition = Terms::first();
        return view('website.terms-of-use', ['terms_and_condition' => $terms_and_condition]);
    }
    public function privacy_policy()
    {
        $privacy = Privacy::first();
        return view('website.privacy-policy', ['privacy' => $privacy]);
    }
    public function cookie_policy()
    {
        $cookie = Cookie::first();
        return view('website.cookie-policy', ['cookie' => $cookie]);
    }
    public function accessibility()
    {
        $Accessibilty = Accessibilty::first();
        return view('website.accessibility', ['accessibilty' => $Accessibilty]);
    }
    public function eu_online_dispute()
    {
        $Dispute = Dispute::first();
        return view('website.eu-online-dispute', ['dispute' => $Dispute]);
    }
    public function legal_notice()
    {
        $Legal = Legal::first();
        return view('website.legal-notice', ['legal' => $Legal]);
    }
    public function disclaimer_link()
    {
        $Disclaimer = Disclaimer::first();
        return view('website.disclaimer', ['disclaimer' => $Disclaimer]);
    }
    public function cv()
    {
        return view('website.cv');
    }
    /* footer links */
    public function emergency_contact(Request $request)
    {
        $data = [
            'email' => $request->email,
            'description' => $request->textarea,
        ];
        DB::table('emergency_contact')->insert($data);
        return Redirect::back();
    }
    
    public function printPdf($id){
        $cv = Cv::find($id);
        if ($cv) {
           $catgeories=PracticeCategory::orderBy('order_no','ASC')->get();
            $cv_practice=[];
            foreach($catgeories as $catgeory){
                
                 $cv_pr = CvPractice::with('category')->where('cv_id', $cv->id)->where('practice_category_id',$catgeory['id'])->first();
                 if($cv_pr!=null){
                      array_push($cv_practice,$cv_pr);
                     
                 }
                 
                
                
            }
            $cv_desc = CvDescription::where('cv_id', $cv->id)->get();
            $team = Team::where('id', $cv['user_id'])->first()->designation;
            
             $pdf = Pdf::loadView('pdf.cv',get_defined_vars());
    
        
         return $pdf->download('my_profile_lloydspr.pdf');
            
        }
        
        
    }
}
