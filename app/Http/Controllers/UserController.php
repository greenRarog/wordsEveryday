<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Word;
use App\Models\Meaning;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function login(Request $request){

      if(!$request->session()->exists('auth')){
        $request->session()->put('auth', false);  
      } else if ($request->session()->get('auth')) {
          return redirect('/room');
      }
        if($request->has('name') and $request->has('password')) {
            if($request->name != '' and $request->password != '') {
                $user_name = $request->name;
                $user = User::where('login', $user_name)->first();
                if ($user->password === $request->input('password')){                
                    $request->session()->put('auth', true);
                    return redirect ('/room');                    
                } else {
                    $message = 'login or password wrong';
                    return view('user.login', [
                        'message' => $message,
                    ]);
                }
            } else {             
                    $message = 'login or password wrong';
                    return view('user.login', [
                        'message' => $message,
                    ]);                
            }
        } else {
            return view('user.login');            
        }  
    }

    public function exit(Request $request){
        $request->session()->put('auth', false);
        return redirect('/');
    }
    

    public function room(Request $request){
      if(!$request->session()->exists('auth')){
        $request->session()->put('auth', 'false');  
      } else if($request->session()->get('auth')){
        $quantityWords = 10;
        $pastWords = [];
        if($request->has('insert') and ($request->insert == 'true')){
            for ($i = 1; $i <= $quantityWords; $i++) {
                $wordName = 'word_' . $i;
                if($request->$wordName['name'] != null and 
                   $request->$wordName['transcription'] != null and 
                   $request->$wordName['meaning'] != null) {                    
                    if($this->checkNew($request->$wordName['name'])){
                        $test = $this->addNewWord($request->$wordName);
                    } else {
                        $pastWords[] = $request->$wordName;                    
                    }
                }
            }
            if (count($pastWords) < 1) {
                $message = 'all words was add';
                return view('/user.room', [
                    'quantityWords' => $quantityWords,                
                    'message' => $message,
                ]);                
            } else {
                $message = 'some words are already in base';
                //dd($pastWords);
                return view('/user.room', [
                    'quantityWords' => $quantityWords,                
                    'pastWords' => $pastWords,
                    'message' => $message,
                ]);
                
                
            }
            
        } else {
                return view('user.room', [
                    'quantityWords' => $quantityWords,
                ]);                    
        }
      } else {
          return redirect ('/login');
      }
}


    private function addNewWord($array){
        $newWord = new Word;
        
        $newWord->name = $array['name'];
        $newWord->transcription = $array['transcription'];
        $newWord->used = 'no';
        $newWord->date_use = '2000-01-01';
        $newWord->save();
        
        $newMeaning = new Meaning;
        $newMeaning->meaning = $array['meaning'];
        $newMeaning->save();
        
        $newWord->meanings()->save($newMeaning);                
        return $newWord;
    }
    
    private function checkNew($word){
        if(Word::where('name', $word)->exists()){
            return false;
        } else {
            return true;
        }
        
    }
}