<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use App\Staff;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use File;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Redirect;
use Sentinel;
use URL;
use View;
use Yajra\DataTables\DataTables;
use Validator;

class StaffsController extends Controller
{

    /**
     * Show a list of all the staffs.
     *
     * @return View
     */

    public function index()
    {

        $staffs = Staff::all();
        // Show the page
        return view('admin.staffs.index', compact('staffs'));
    }

    /*
     * Pass data through ajax call
     */
    /**
     * @return mixed
     */
    /**
     * Create new staff
     *
     * @return View
     */
    public function create()
    {
        // Show the page
        return view('admin.staffs.create');
    }

    /**
     * User create form processing.
     *
     * @return Redirect
     */
    public function store(Request $request)
    {

        //upload image
        if ($file = $request->file('pic_file')) {
            $extension = $file->extension()?: 'png';
            $destinationPath = public_path() . '/uploads/staffs/';
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            $request['pic'] = $safeName;
        }

        $new_staff = new Staff;
        $new_staff->first_name = $request->input('firstName');
        $new_staff->last_name = $request->input('lastName');
        $new_staff->slug = strtolower($request->input('firstName')).'-'.strtolower($request->input('lastName'));
        $new_staff->job = $request->input('job');
        $new_staff->NMLS = $request->input('NMLS');
        $new_staff->email = $request->input('email');
        $new_staff->phone = $request->input('phone');
        $new_staff->pic = $request['pic'];
        $new_staff->profile = $request->input('profile');
        $new_staff->save();


        // Redirect to the staff creation page
        return Redirect::route('admin.staffs.index')->with('success', trans('staffs/message.success.create'));
    }

    public function show($id)
    {
        $staff = Staff::find($id);

        $model = 'staffs';
        $confirm_route = $error = null;

        $confirm_route = '/admin/staffs/'.$staff->id.'/delete';

        return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
    }

    /**
     * User update.
     *
     * @param  int $id
     * @return View
     */
    public function edit($id)
    {

        $staff = Staff::find($id);

        // Show the page
        return view('admin.staffs.edit', compact('staff'));
    }

    /**
     * User update form processing page.
     *
     * @param  User $user
     * @param UserRequest $request
     * @return Redirect
     */
    public function update(Request $request, $id)
    {

        $staff = Staff::find($id);

        // is new image uploaded?
        if ($file = $request->file('pic_file')) {
            $extension = $file->extension()?: 'png';
            $destinationPath = public_path() . '/uploads/staffs/';
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            //delete old pic if exists
            if (File::exists($destinationPath . $staff->pic)) {
                File::delete($destinationPath . $staff->pic);
            }
            //save new file path into db
            $staff->pic = $safeName;
        }

        $staff->first_name = $request->input('firstName');
        $staff->last_name = $request->input('lastName');
        $staff->slug = strtolower($request->input('firstName')).'-'.strtolower($request->input('lastName'));
        $staff->job = $request->input('job');
        $staff->NMLS = $request->input('NMLS');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->profile = $request->input('profile');
            //save record
        $staff->save();

        
        $success = trans('staffs/message.success.update');

        return Redirect::route('admin.staffs.edit', $staff)->with('success', $success);
    }

    /**
     * Show a list of all the deleted users.
     *
     * @return View
     *

    /**
     * Delete the given user.
     *
     * @param  int $id
     * @return Redirect
     */
    public function delete($id)
    {
        Staff::destroy($id);
        // Prepare the success message
        $success = trans('staffs/message.success.delete');
        // Redirect to the user management page
        return Redirect::route('admin.staffs.index')->with('success', $success);
    }

    /**
     * Restore a deleted user.
     *
     * @param  int $id
     * @return Redirect
     */
}
