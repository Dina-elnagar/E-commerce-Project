<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

// function to submit the form data from the rentRequest page
    public function submitRequest(Request $request)
    {
        // validate the form data
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required',
            'dates' => 'required',
            'times' => 'required',
            'city' => 'required',
            'area' => 'required',
            'minCost' => 'required',
            'maxCost' => 'required',
//            'comments' => 'optional',
            'type' => 'required',
//            'userId' => 'optional',
        ]);
        if (!$validated) {
            return response()->json(['error' => 'Validation failed'], 422);
        }

        $userId = auth()->id();


        if ($validated && $request->type == "Rent") {
            // save the form data to the database
            $requests = new Form();
            $requests->name = $request->name;
            $requests->email = $request->email;
            $requests->phoneNumber = $request->phoneNumber;
            $requests->dates = $request->dates;
            $requests->times = $request->times;
            $requests->city = $request->city;
            $requests->area = $request->area;
            $requests->minCost = $request->minCost;
            $requests->maxCost = $request->maxCost;
            $requests->comments = $request->comments;
            $requests->type = "Rent Request";
            $requests->userId = $userId ?? null;
            $requests->save();
            return redirect('/rent');

        }
        elseif ($validated && $request->type == "Buy") {
            // save the form data to the database
            $requests = new Form();
            $requests->name = $request->name;
            $requests->email = $request->email;
            $requests->phoneNumber = $request->phoneNumber;
            $requests->dates = $request->dates;
            $requests->times = $request->times;
            $requests->city = $request->city;
            $requests->area = $request->area;
            $requests->minCost = $request->minCost;
            $requests->maxCost = $request->maxCost;
            $requests->comments = $request->comments;
            $requests->type = "Buy Request";
            $requests->userId = $userId ?? null;
            $requests->save();
            return redirect('/buy');

        }
        elseif ($validated && $request->type == "Interior"){
            // save the form data to the database
            $requests = new Form();
            $requests->name = $request->name;
            $requests->email = $request->email;
            $requests->phoneNumber = $request->phoneNumber;
            $requests->dates = $request->dates;
            $requests->times = $request->times;
            $requests->city = $request->city;
            $requests->area = $request->area;
            $requests->minCost = $request->minCost;
            $requests->maxCost = $request->maxCost;
            $requests->comments = $request->comments;
            $requests->type = "Interior Request";
            $requests->userId = $userId ?? null;
            $requests->save();
            return redirect('/interior');
        }
        elseif ($validated && $request->type == "Furniture"){
            // save the form data to the database
            $requests = new Form();
            $requests->name = $request->name;
            $requests->email = $request->email;
            $requests->phoneNumber = $request->phoneNumber;
            $requests->dates = $request->dates;
            $requests->times = $request->times;
            $requests->city = $request->city;
            $requests->area = $request->area;
            $requests->minCost = $request->minCost;
            $requests->maxCost = $request->maxCost;
            $requests->comments = $request->comments;
            $requests->type = "Furniture Request";
            $requests->userId = $userId ?? null;
            $requests->save();
            return redirect('/furniture');
        }
        elseif ($validated && $request->type == "Budget"){
            // save the form data to the database
            $requests = new Form();
            $requests->name = $request->name;
            $requests->email = $request->email;
            $requests->phoneNumber = $request->phoneNumber;
            $requests->dates = $request->dates;
            $requests->times = $request->times;
            $requests->city = $request->city;
            $requests->area = $request->area;
            $requests->minCost = $request->minCost;
            $requests->maxCost = $request->maxCost;
            $requests->comments = $request->comments;
            $requests->type = "Budget Request";
            $requests->userId = $userId ?? null;
            $requests->save();
            return redirect('/budget');
        }
        else {
            return redirect('/')->with('error', 'Please select a request type');
        }
    }


// function to admin page if the isAdmin == 1 else sign in easily
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $user = Auth::user();
            if ($user->isAdmin == 1) {
                $forms = Form::all(); // Retrieve all forms data
                return redirect()->route('admin');
                return $this->adminPage();

            } else {
                return redirect()->route('dashboard');
            }
        }

        // Authentication failed...
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

}
