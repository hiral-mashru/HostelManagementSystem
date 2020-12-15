<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Validator;
use App\userdata;
use App\Models\roomdata;
use Session;
class Registration extends Controller
{
    public function login(Request $req){
        $name = userdata::select('UName')->where([
                ['UEmailID','=',$req->email],
                ['UPassword','=',$req->password]
            ])->get();
        // return $name;
        if($name == '[]'){
            return redirect('/');
        } else {
            $req->session()->put('data',$req->email);//[$req->input()]
            // return "logged in";
            if($req->email == "admin@gmail.com") {
                return redirect('/admin');
            } else {
                return redirect('/profile');
            }
            // return var_dump($req->input());
            // return var_dump(Session::get('data'));
        }      
    }

    public function register(Request $req){

        $name = userdata::select('UName')->where([
            ['UEmailID','=',$req->email],
            ['UPassword','=',$req->password]
        ])->get();
        
        if($name == '[]'){
            $userdata = new userdata;
            $userdata->UName=$req->name;
            $userdata->MobileNo=$req->mobile;
            $userdata->UEmailID=$req->email;
            $userdata->UPassword=$req->password;
            $userdata->Address=$req->address;
            $userdata->AdharCard=$req->aadhar;
            // $userdata->RoomNo=$req->room;
            // $userdata->JoiningDate=$req->joiningdate;
            $result = $userdata->save();
            if($result){
                $req->session()->put('data',$req->email);
                return redirect('/formdata/profile');
            }
        }
        else {
            return redirect('/');
        }
    }

    public function list(){
        // return Session::get('logData');
        $user=userdata::all();
        return view('list',['user'=>$user]);
    }

    public function logout(Request $request) {
        // Auth::logout();
        return print_r(Session::get('data'));
        return redirect('/');
    }

    public function showprofile(){
        $data = userdata::all();
        $a = array(1,2,3,4,5,6,7,8,9,10);
        $arr = array();
        foreach($data as $item){
            array_push($arr,$item->RoomNo);
        }
        echo var_dump($arr);
        foreach($data as $item){
            if (($key = array_search($item->RoomNo, $a)) !== false) {
                unset($a[$key]);
            }
        }
        echo "<br>" . var_dump($a);
        return view('profile',["data"=>$a]);
    }

    public function profile(Request $req){
        $u = DB::table('userdata')
        ->where('UEmailID',Session::get('data'))
        ->update([
            'RoomNo'=>$req->room,
            // 'IsAllocated'=>'Y',
            'JoiningDate'=>$req->joiningdate
        ]);
        if($u==1){
            print_r("Registered");
        } else {
            print_r("error");
        }
    }

    public function showAdmin(){
        $data = userdata::all();
        return view('admin',["data"=>$data]);
    }

    public function admin(Request $req){
        $u = DB::table('userdata')
        ->where('UEmailID',$req->email)
        ->update([
            'RoomNo'=>null,
            // 'IsAllocated'=>'N',
            'LeavingDate'=>$req->leavingdate
        ]);
        if($u==1){
            print_r("Done");
        } else {
            print_r("error");
        }
    }

    public function showData(){
        $data = userdata::all();
        return view('showData',["data"=>$data]);
    }

    public function delete(Request $req){
        if($req->isMethod('POST')){
            print_r($req->email);
            $del = DB::table('userdata')
            ->where('UEmailID',$req->email)
            ->delete();
        } 
        
        return redirect('/formdata/showData');
    }

}
        // $req->validate([
        //     "name"=>"required",
        //     "password"=>"min:8 | max:12 | required",
        //     "mobile"=>"numeric | min:10 | required",
        //     "email"=>"email | required",
        //     "address"=>"required",
        //     "aadhar"=>"required | numeric",
        //     "room"=>"numeric | required",
        //     "joiningdate"=>"required"
        // ]);
        //Print Data from POST Method

        // $user_data = array(
        //     'name'=>$req->post('name'),
        //     'mobile'=>$req->post('mobile'),
        //     'address'=>$req->post('address'),
        //     'aadhar'=>$req->post('aadhar'),
        //     'email' => $req->post('email'),
        //     'password' => $req->post('password'),
        // );

        // if(Auth::attempt($user_data)){
        //     return redirect('home');
        // } else {
        //     return back()->with();
        // }

        // $b = DB::table('userdata')
        // ->where('UEmailID',$req->$_POST['email'])
        // ->get();
        // print_r($b);
        
        // return $req->input();
        // return Userdata::select('UName')->where([
        //     ['UEmailID','=',$req->email],
        //     ['UPassword','=',$req->password],
        // ])->post();
        // return DB::select("select UName from userdata where UEmailID='"+$req->email+"', UPassword='"+$req->password+"'");
        
