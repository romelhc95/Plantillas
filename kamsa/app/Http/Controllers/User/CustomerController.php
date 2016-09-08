<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use App\Customer;
use App\Department;
use App\Province;
use App\District;
use App\Loan;
use DB;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$customers = \DB::table('customers')->orderBy('id', 'desc')->paginate(15)->get();
        $customers = Customer::orderBy('id', 'desc')->paginate();
        return view('customer.list', compact('customers'));
        //return view('customer.list', compact('customers'));
        //return view('customer.list', ['customers' => $customers]);
    }

    
    public function getFind($id)
    {
        $loan = Customer::find($id);
        return view('loan.list', ['loan'=>$loan]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::lists('description', 'id');//Select  dinamico
        $users = User::all()->lists('first_name');//mostrar datos en Select
        return view('customer.create', compact('departments', 'users'));
    }
    
    /**
    * Combo Dinamico
    *
    */
    
    public function getProvinces(Request $request, $id)
    {
        if($request->ajax()){
            $provinces = Province::provinces($id);
            return response()->json($provinces);
        }
    }
    
    public function getDistricts(Request $request, $id)
    {
        if($request->ajax()){
            $districts = District::districts($id);
            return response()->json($districts);
        }
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Redirect $redirect)
    {   
        /*$data = $this->Request->all();
        
        $rules = array(
            'dni' => 'required', 
            'first_name' => 'required', 
            'last_name' => 'required', 
            'department_id' => 'required', 
            'province_id' => 'required', 
            'district_id' => 'required', 
            'address' => 'required', 
            'phone' => 'required', 
            'user_id' => 'required'
        );
        
        
        Validator::make($data, $rules);
        
        if ($v->fails())
        {
            dd($v->errors());
            return redirect()->back()
                ->withErrors($v->errors());
        }
        $customer = Customer::create($data);
        
        $customer = new Customer($request->all());
        $customer->save();*/
        
        $customer = Customer::create([
            'dni' => $request['dni'],
            'first_name' => $request['nombre'],
            'last_name' => $request['apellido'],
            'department_id' => $request['departamento'],
            'province_id' => $request['provincia'],
            'district_id' => $request['distrito'],
            'address' => $request['direccion'],
            'phone' => $request['telefono'],
            'user_id' => $request['idusuario'],
        ]);
        
        return $redirect->route('user.customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$loans = Loan::find($id)->get();
        $loans = \DB::table('loans')->columnize($id)->get();
        if(!empty($id)){
            return view('loan.list', ['loans'=>$loans]);
        }    
        else{
            return null;
        }
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customer::find($id);
        $departments = Department::lists('description', 'id');//Select  dinamico
        $users = User::all()->lists('first_name');//mostrar datos en Select
        return view('customer.edit', ['customers'=>$customers], compact('departments', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
