<x-layoutUser>    
    <div class="main_table">
        
        <p>пишем в файле слова разделяя их части дефисом "-"<br> пишем каждый набор частей слов, разделяя их точкой "."</p>
        <textarea class="example">example-[transcription]-meaning.example2-[transcription2]-meaning2.example3-[transcription3]-meaning3.</textarea>
        
        <form enctype="multipart/form-data" action="" method="POST">
        @csrf              
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            Отправить этот файл: <input name="userfile" type="file" />
            <input type="submit" value="Отправить файл" />
        </form>
        
        @if(isset($pastWords))
        @foreach($pastWords as $word)
        {{ $word }}<br>
        @endforeach
        @endif
    </div>
</x-layoutUser>