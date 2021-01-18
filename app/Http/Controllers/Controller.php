<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use DB;

use App\Mail\newUser;
use Illuminate\Support\Facades\Mail;

use App\Models\evaluations;
use App\Models\experiences;
use App\Models\interests;
use App\Models\programs;
use App\Models\scores;
use App\Models\users;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function user(Request $request){

        $id = mt_rand(1000000, 9999999);

        $name = $request->input('name');

        $email = $request->input('email');

        $created_at = now();

        $userdata = array('created_at'=>$created_at, 'updated_at'=>$created_at, 'id'=>$id, 'name'=>$name, 'email'=>$email);

        DB::table('users')->insert($userdata);

        return view('interests', compact('id'));

    }

    function interests(Request $request){

        $id = $request->input('id');                        $chemicals = $request->input('chemicals');

        $design = $request->input('design');                $web = $request->input('web');

        $coding = $request->input('coding');                $networks = $request->input('networks');

        $hacking = $request->input('hacking');              $drawing = $request->input('drawing');

        $sketching = $request->input('sketching');          $planing = $request->input('planing');

        $internal = $request->input('internal');            $robots = $request->input('robots');

        $created_at = now();

        $interestsdata = array('created_at'=>$created_at, 'updated_at'=>$created_at, 'id'=>$id ,'design'=>$design, 'web'=>$web, 'coding'=>$coding, 'networks'=>$networks, 'hacking'=>$hacking, 'drawing'=>$drawing, 'sketching'=>$sketching, 'planing'=>$planing, 'internal'=>$internal, 'robots'=>$robots, 'chemcials'=>$chemicals);

        DB::table('interests')->insert($interestsdata);

        $ict = $design+$coding+$hacking+$web+$networks;

        $eng = $chemicals+$networks+$robots;

        $arch = $design+$sketching+$planing+$drawing+$internal;

        return view('experiences', compact('id','ict','eng','arch'));

    }

    function experiences(Request $request){

        $id = $request->input('id');                        $chemicals = $request->input('chemicals');

        $design = $request->input('design');                $web = $request->input('web');

        $coding = $request->input('coding');                $networks = $request->input('networks');

        $hacking = $request->input('hacking');              $drawing = $request->input('drawing');

        $sketching = $request->input('sketching');          $planing = $request->input('planing');

        $internal = $request->input('internal');            $robots = $request->input('robots');

        $created_at = now();

        $experiencesdata = array('created_at'=>$created_at, 'updated_at'=>$created_at, 'id'=>$id ,'design'=>$design, 'web'=>$web, 'coding'=>$coding, 'networks'=>$networks, 'hacking'=>$hacking, 'drawing'=>$drawing, 'sketching'=>$sketching, 'planing'=>$planing, 'internal'=>$internal, 'robots'=>$robots, 'chemcials'=>$chemicals);

        DB::table('experiences')->insert($experiencesdata);

        $ict = $design+$coding+$hacking+$web+$networks+$request->input('ict');

        $eng = $chemicals+$networks+$robots+$request->input('eng');

        $arch = $design+$sketching+$planing+$drawing+$internal+$request->input('arch');

        return view('scores', compact('id','ict','eng','arch'));

    }

    function scores(Request $request){

        $id = $request->input('id');                        $arts = $request->input('arts');

        $it = $request->input('it');                       $chemistry = $request->input('chemistry');

        $physics = $request->input('physics');              $math = $request->input('math');

        $created_at = now();

        $scoresdata = array('created_at'=>$created_at, 'updated_at'=>$created_at, 'id'=>$id ,'it'=>$it, 'chemistry'=>$chemistry, 'physics'=>$physics, 'math'=>$math, 'arts'=>$arts);

        DB::table('scores')->insert($scoresdata);

        $email = DB::table('users')->where('id', '=', $id)->get('email');

        $ict = $it+$math+$request->input('ict');

        $eng = $chemistry+$physics+$math+$request->input('eng');

        $arch = $arts+$math+$request->input('arch');
        
        if($ict == $eng || $ict == $arch)
            {
            if($eng == $arch)
                {
                $ict+=2;
                $arch++;
                }
            else
                $ict++;
            }
        else
            if($eng == $arch)
                $arch++;

        if($ict > $eng)
            if($ict > $arch)
                if($eng > $arch)
                    {
                        $itr=1;
                        $engr=2;
                        $archr=3;
                    }
                else
                    {
                        $itr=1;
                        $archr=2;
                        $engr=3;
                    }
            else
                {
                    $itr=2;
                    $engr=3;
                    $archr=1;
                }
        else
            if($ict > $arch)
                {
                    $engr=1;    
                    $itr=2;
                    $archr=3;
                }
            else
                if($eng > $arch)
                    {
                        $engr=1;    
                        $itr=3;
                    $archr=2;
                        }
                else
                    {
                        $engr=2;    
                        $archr=1;
                        $itr=3;
                    }

        $created_at = now();

        $recommendationdata = array('created_at'=>$created_at, 'updated_at'=>$created_at, 'id'=>$id ,'it'=>$itr, 'engineering'=>$engr, 'architecture'=>$archr);

        DB::table('programs')->insert($recommendationdata);

        $data = $recommendationdata;

        $data += ['email'=>$email];

        $name = DB::table('users')->where('id', '=', $id)->get('name');

        $data += ['name'=>$name];

        $data += ['id'=>$id];

        Mail::to($data['email'])->send(new newUser($data));

        return view('recommendations', compact('id','email','itr','archr','engr'));

    }

    function feedback(Request $request){

        $id = $request->input('id');

        $email = $request->input('email');

        $data = DB::table('users')->where('id', '=', $id)->where('email', '=', $email);

        if (! empty($data)) 

        return view('evaluation', compact('id'));

    }

    function evaluation(Request $request){

        $id = $request->input('id');                                $outlook = $request->input('outlook');

        $functionality = $request->input('functionality');          $recommendation = $request->input('recommendation');

        $created_at = now();

        $data = array('created_at'=>$created_at, 'updated_at'=>$created_at, 'id'=>$id ,'outlook'=>$outlook, 'functionality'=>$functionality, 'recommendation'=>$recommendation);

        DB::table('evaluations')->insert($data);

        return view('welcome');

    }
}
