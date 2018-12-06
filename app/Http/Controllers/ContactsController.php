<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class ContactsController extends Controller
{
    //
    
    public function index($id)
    {
    	$contact = Contacts::find($id);
    	return view('contacts.php', array ('contact' => $id));
    }
}
