<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Crud;



class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('crud');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|min:1',
      
            'email' => 'required|email|unique:users,email',
            
            'password' => 'required|confirmed|min:6',

            'photo' => 'required|mimes:jpeg,png,jpg,gif',
            
            ]
           
        
        );
        
             
        $imageName = time().'.'.$request->photo->extension();    
        $request->photo->move(public_path('images'), $imageName);
     
             
        $documents = time().'.'.$request->docs->extension();    
        $request->docs->move(public_path('images'), $documents);    
             
             
       /*     

      
        if($request->hasfile('photo'))
            {
            $file = $request->file('photo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'public/images/', $name);
           }


           */
         /*  if($request->hasfile('docs'))
           {
           $docs = $request->file('docs');
           $document=time().$file->getClientOriginalName();
           $docs->move(public_path().'public/images/', $document);
          }

*/
            $crud=new Crud;

            
            $crud->name=$request->get('name');

            $crud->email=$request->get('email');
      
            $crud->password=$request->get('password');
      
            $crud->photo=$imageName;
            
             
            $crud->docs=$documents;

        
      
            $crud->save();
            
            return redirect('/crud_view')->with('success', true);
           
          






        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud =Crud::find($id);
        return view('crud_edit',compact('crud','id'));

    

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
       


       $photo=$request->get('photo');
       $document=$request->get('docs');
         

       if($photo==NULL || $document==NULL )
       {

            
        $form_data = array(
            
            'name'       =>   $request->name,
            'email'        =>  $request->email
        );

        Crud::whereId($id)->update($form_data);
        return redirect('/crud_view')->with('success', true);

        }
        else{

         


            $a=$request->photo;

            echo $a;
           

            /*

            $imageName = time().'.'.$request->photo->extension();    
            $request->photo->move(public_path('images'), $imageName);
         
                 
            $documents = time().'.'.$request->docs->extension();    
            $request->docs->move(public_path('images'), $documents);    








            $form_data = array(
            
                'name'       =>   $request->name,
                'email'        =>  $request->email,
                'photo'       => $imageName,
                'docs' =>$request->$documents

            );
    
            Crud::whereId($id)->update($form_data);
            return redirect('/crud_view')->with('success', true);
         */
          



        }
       
       
      
       

        



    
    }
        
    
          

    
       

            


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = \App\Models\Crud::find($id);
        $crud->delete();
        
        return redirect('/crud_view')->with('success', true);
    }
}
