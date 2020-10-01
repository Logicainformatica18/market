<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(6);
        return view('user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('id', 'DESC')->paginate(6);
        return view('usertable', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->datebirth = datebirth($request->day, $request->month, $request->year);

        try {
            $users = new User();
            $users->dni = $request->dni;
            $users->firstname = $request->firstname;
            $users->lastname = $request->lastname;
            $users->names = $request->names;
            $users->password = $request->password ?: Hash::make("123456");
            $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;
            //photo
            $request->photo = photoStore($request->file('photo'),"imageusers");
            $users->photo = $request->photo;
            $users->email = $request->email;
            $users->sex = $request->sex;
            $users->save();
        } catch (\Exception $e) {
            // do task when error
            //   return  $e->getMessage();   // insert query
            return "<div style='background-color:red'> ERROR</div>";
        }
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show = "%" . $request["show"] . "%";
        $users = User::where('firstname', "like", $show)->paginate(6);
        return view('usertable', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $users =  User::find($request["id"]);
      //  $users->datebirth=datebirth(date("d",$users->datebirth),date("m",$users->datebirth),date("Y",$users->datebirth));

      return $users;
         //  return date("Y",$users->datebirth);
       // return $users;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $request->datebirth = datebirth($request->day, $request->month, $request->year);

        if ($request->photo == "") {
            $users=User::find($request->id);
            $users->dni = $request->dni;
            $users->firstname = $request->firstname;
            $users->lastname = $request->lastname;
            $users->names = $request->names;
            $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;
            $users->email = $request->email;
            $users->sex = $request->sex;
            $users->save();
        } else {
            $table =User::find($request["id"]);
            photoDestroy($table->photo,"imageusers");
            $request->photo = photoStore($request->file('photo'),"imageusers");

            $users=User::find($request->id);
            $users->dni = $request->dni;
            $users->firstname = $request->firstname;
            $users->lastname = $request->lastname;
            $users->names = $request->names;
            $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;
            $users->email = $request->email;
            $users->sex = $request->sex;
            $users->photo = $request->photo;
            $users->save();

        }
        return   $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $table = User::find($request["id"]);
        photoDestroy($table->photo,"imageusers");
        User::find($request["id"])->delete();
        return   $this->create();
    }
}
