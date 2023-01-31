<x-layoutUser>

   <div class='main'>
       @if(isset($message))
       <div class='message'>{{ $message }}</div>
       @endif
       
       @if(isset($pastWords))       
        <div class='wrong_words'>
            <select>
        @foreach($pastWords as $word)
         <option>{{ $word['name'] }}</option>
        @endforeach
            </select>
        </div>
       @endif
       
       <h1>add new words to site</h1>
       <form method="POST" action="/room">
        @csrf           
           <table class='main_table'>
               <tr>
                   <th>word</th>
                   <th>transcription</th>
                   <th>meanings</th>
               </tr>
<?php 
    for ($i = 1; $i <= $quantityWords; $i++) {
    $name = 'word_' . $i . '[name]';        
    $transcription = 'word_' . $i . '[transcription]';        
    $meaning = 'word_' . $i . '[meaning]';        
?>
               <tr><!--<input hidden class='counter' name='counter' value='1'>-->
                   <td><input name={{ $name}}></td>
                   <td><input name={{ $transcription }}></td>
                   <td><input name={{ $meaning }}></td>                   
               </tr>               
<?php
    }
?>    
           </table> 
           <button hidden type='button' class='js'>add row</button>
           <input hidden name="insert" value="true">           
           <input type="submit" class="button" value="add words">
       </form>
   </div>   
    <div>you have {{ $completedDays }} completed days</div>
<script src='addRow.js'></script>    
    
</x-layoutUser>

