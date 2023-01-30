<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;



class WordController extends Controller
{
    public function todayWords(Request $request){ 
      if(!$request->session()->exists('auth')){
        $request->session()->put('auth', false);  
      }
      $today_date = date('Y-m-d', time());      
      if (!Word::where('date_use', $today_date)->exists()){
        $words_new = Word::where('date_use', '2000-01-01')->take(10)->get();        
        foreach ($words_new as $word_new){
            $word_new->date_use = $today_date;
            $word_new->save();
        }
      }
      $words = Word::where('date_use', $today_date)->take(10)->get();  
      foreach ($words as $word){
          $word->used = 'yes';
          $word->save();
      }
      if ($request->session()->get('auth')){
        return view('word.todayUser', [
            'words' => $words,
        ]);          
      } else {                    
        return view('word.todayGuest', [
            'words' => $words,
        ]);
      }
    }
    
}
