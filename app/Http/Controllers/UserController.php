<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// con esto le damos roles a los usuarios
use Spatie\Permission\Traits\HasRoles;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('id', 'DESC')->paginate(6);
        $roles = Role::all();
        return view('user', compact('user', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::orderBy('id', 'DESC')->paginate(6);
        return view('usertable', compact('user'));
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
            $user = new User();
            $user->dni = $request->dni;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->names = $request->names;
            $user->password =  Hash::make($request->password);
            $user->datebirth = $request->datebirth;
            $user->cellphone = $request->cellphone;
            //photo
            if ($request->file('photo') != null) {
                $request->photo = photoStore($request->file('photo'), "imageusers");
                $user->photo = $request->photo;
            }
            $user->email = $request->email;
            $user->sex = $request->sex;
            $user->save();
            $user->assignRole($request->role);
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
            $users = User::find($request->id);
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
            $table = User::find($request["id"]);
            photoDestroy($table->photo, "imageusers");
            $request->photo = photoStore($request->file('photo'), "imageusers");

            $users = User::find($request->id);
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
        photoDestroy($table->photo, "imageusers");
        User::find($request["id"])->delete();
        return   $this->create();
    }
    public function updateProfile(Request $request)
    {
        $request->datebirth = datebirth($request->day, $request->month, $request->year);
        if ($request->photo == "") {
            $users = User::find($request->id);
            $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;

            $users->save();
        } else {
            $table = User::find($request["id"]);
            photoDestroy($table->photo, "imageusers");
            $request->photo = photoStore($request->file('photo'), "imageusers");
            $users = User::find($request->id);
            $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;
            $users->photo = $request->photo;
            $users->save();
        }
    }

}
