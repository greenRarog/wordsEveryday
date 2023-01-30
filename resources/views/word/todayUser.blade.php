<x-layoutUser>


    <div class="main">    
        
    <h1>words for learn today</h1>
    <table class="main_table">        
        <tr>
            <th>word</th>
            <th>transcription</th>
            <th>meaning</th>
        </tr>    
    @foreach ($words as $word)
    <tr>
        <td>{{ $word->name }}</td>
        <td>{{ $word->transcription }}</td>
        <td>
            @foreach ($word->meanings as $meaning)
            {{ $meaning->meaning }}
            @endforeach
        </td>
    </tr>
    @endforeach
    </table>
    
    </div>


</x-layoutUser>

    
    
