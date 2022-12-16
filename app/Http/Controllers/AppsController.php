<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Auth;
use App\Models\User;
use App\Models\Firmas;
use App\Models\Ajustes;
use Illuminate\Support\Facades\Hash;

class AppsController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users  = User::get();

        $pageConfigs = ['pageHeader' => false];
        return view('/content/apps/user/app-user-list', ['pageConfigs' => $pageConfigs, 'data' => $users]);
    }

    public function usuario($id)
    {
   
        $usuario = User::where('users.id',$id)
                    ->join('firmas', 'users.id','=','firmas.user_id')
                    ->select('users.id as id','users.name as name','users.contrato as contrato', 'users.email as email','users.documento as documento','users.cargo as cargo','firmas.nombre')
                    ->first();
        return Response::json($usuario);
    }

    public function editarUsuario(Request $request)
    {

        $usuario = User::find($request->id1);

        $usuario->name = $request->name1;
        $usuario->documento = $request->documento1;
        $usuario->contrato = $request->contrato1;
        $usuario->cargo = $request->cargo1;
        $usuario->email = $request->email1;
        $usuario->password = Hash::make($request->password1);
        $usuario->save();


            $this->validate($request, [
                'firma' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);


            $image_path = $request->file('firma')->store('firma', 'public');

            $formato = request()->file('firma')->getClientOriginalExtension();
            if(Firmas::where('user_id', $usuario->id)->first())
            {
                $data = Firmas::where('user_id', $usuario->id)->first()
                ->update([
                    'nombre' => $image_path, 
                    'formato' => $formato,
                    'user_id' => $usuario->id,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);

            }else{
                $data = Firmas::create([
                    'nombre' => $image_path, 
                    'formato' => $formato,
                    'user_id' => $usuario->id,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);
            }
            

        $users  = User::get();

        $pageConfigs = ['pageHeader' => false];
        return view('/content/apps/user/app-user-list', ['pageConfigs' => $pageConfigs, 'data' => $users]);
    }

    public function crearUsuario(Request $request)
    {
        
        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->documento = $request->documento;
        $usuario->contrato = $request->contrato;
        $usuario->cargo = $request->cargo;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();


            $this->validate($request, [
                'firma' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);


            $image_path = $request->file('firma')->store('firma', 'public');

            $formato = request()->file('firma')->getClientOriginalExtension();

            $data = Firmas::create([
                'nombre' => $image_path, 
				'formato' => $formato,
				'user_id' => $usuario->id,
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s"),
            ]);

        $users  = User::get();

        $pageConfigs = ['pageHeader' => false];
        return view('/content/apps/user/app-user-list', ['pageConfigs' => $pageConfigs, 'data' => $users]);
    }
    public function ajuste()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('/content/apps/ajustes/ajuste', ['pageConfigs' => $pageConfigs]);
    }

    public function guardarajuste(Request $request)
    {

        $data = Ajustes::find(1);
        if(isset($data))
        {
            $data = Ajustes::where($request->id)->first();
            $data->totaldiasatencion = $request->totaldiasatencion;
            $data->incio = $request->incio; 
            $data->fin = $request->fin;
            $data->cortesimat = $request->cortesimat; 
            $data->programa = $request->programa;
            $data->created_at =  date("Y-m-d H:i:s");
            $data->save();
        }else{
            
            $data = new Ajustes();
            $data->totaldiasatencion = $request->totaldiasatencion;
            $data->incio = $request->incio; 
            $data->fin = $request->fin;
            $data->cortesimat = $request->cortesimat; 
            $data->programa = $request->programa;
            $data->created_at =  date("Y-m-d H:i:s");
            $data->save();
        }



        $pageConfigs = ['pageHeader' => false];

        return view('/content/apps/ajustes/ajuste', ['pageConfigs' => $pageConfigs]);
    }

    public function datos(){
            $data = Ajustes::first();

            return \Response::json($data);
    }

    // invoice list App
    public function invoice_list()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('/content/apps/invoice/app-invoice-list', ['pageConfigs' => $pageConfigs]);
    }

    // invoice preview App
    public function invoice_preview()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('/content/apps/invoice/app-invoice-preview', ['pageConfigs' => $pageConfigs]);
    }

    // invoice edit App
    public function invoice_edit()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('/content/apps/invoice/app-invoice-edit', ['pageConfigs' => $pageConfigs]);
    }

    // invoice edit App
    public function invoice_add()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('/content/apps/invoice/app-invoice-add', ['pageConfigs' => $pageConfigs]);
    }

    // invoice print App
    public function invoice_print()
    {
        $pageConfigs = ['pageHeader' => false];

        return view('/content/apps/invoice/app-invoice-print', ['pageConfigs' => $pageConfigs]);
    }

    // User List Page
   




    // User Account Page
    public function user_view_account()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/apps/user/app-user-view-account', ['pageConfigs' => $pageConfigs]);
    }

    // User Security Page
    public function user_view_security()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/apps/user/app-user-view-security', ['pageConfigs' => $pageConfigs]);
    }

    // User Billing and Plans Page
    public function user_view_billing()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/apps/user/app-user-view-billing', ['pageConfigs' => $pageConfigs]);
    }

    // User Notification Page
    public function user_view_notifications()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/apps/user/app-user-view-notifications', ['pageConfigs' => $pageConfigs]);
    }

    // User Connections Page
    public function user_view_connections()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/apps/user/app-user-view-connections', ['pageConfigs' => $pageConfigs]);
    }


    // Chat App
    public function chatApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'chat-application',
        ];

        return view('/content/apps/chat/app-chat', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    // Calender App
    public function calendarApp()
    {
        $pageConfigs = [
            'pageHeader' => false
        ];

        return view('/content/apps/calendar/app-calendar', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    // Email App
    public function emailApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'email-application',
        ];

        return view('/content/apps/email/app-email', ['pageConfigs' => $pageConfigs]);
    }
    // ToDo App
    public function todoApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'todo-application',
        ];

        return view('/content/apps/todo/app-todo', [
            'pageConfigs' => $pageConfigs
        ]);
    }
    // File manager App
    public function file_manager()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'file-manager-application',
        ];

        return view('/content/apps/fileManager/app-file-manager', ['pageConfigs' => $pageConfigs]);
    }

    // Access Roles App
    public function access_roles()
    {
        $pageConfigs = ['pageHeader' => false,];

        return view('/content/apps/rolesPermission/app-access-roles', ['pageConfigs' => $pageConfigs]);
    }

    // Access permission App
    public function access_permission()
    {
        $pageConfigs = ['pageHeader' => false,];

        return view('/content/apps/rolesPermission/app-access-permission', ['pageConfigs' => $pageConfigs]);
    }

    // Kanban App
    public function kanbanApp()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'pageClass' => 'kanban-application',
        ];

        return view('/content/apps/kanban/app-kanban', ['pageConfigs' => $pageConfigs]);
    }

    // Ecommerce Shop
    public function ecommerce_shop()
    {
        $pageConfigs = [
            'contentLayout' => "content-detached-left-sidebar",
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Shop"]
        ];

        return view('/content/apps/ecommerce/app-ecommerce-shop', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Ecommerce Details
    public function ecommerce_details()
    {
        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['link' => "/app/ecommerce/shop", 'name' => "Shop"], ['name' => "Details"]
        ];

        return view('/content/apps/ecommerce/app-ecommerce-details', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Ecommerce Wish List
    public function ecommerce_wishlist()
    {
        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Wish List"]
        ];

        return view('/content/apps/ecommerce/app-ecommerce-wishlist', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Ecommerce Checkout
    public function ecommerce_checkout()
    {
        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Checkout"]
        ];

        return view('/content/apps/ecommerce/app-ecommerce-checkout', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
