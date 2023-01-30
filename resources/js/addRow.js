let button = document.querySelector('.js');
let table = document.querySelector('table');

button.addEventListener('click', function(){        
   let tr = document.createElement('tr');

   let counter = document.querySelector('.counter');
   let inputCounter = document.createElement('input');
   inputCounter.value = ++counter.value;
   inputCounter.setAttribute('name', 'counter');
   inputCounter.setAttribute('hidden', 'hidden');
   inputCounter.classList.add('counter');
   counter.classList.remove('counter');  
   tr.appendChild(inputCounter);

   let name_counter = 'name_' + inputCounter.value;
   console.log(name_counter);

   let name_counter_name = name_counter + '[name]';
   let tdName = document.createElement('td');
   let inputName = document.createElement('input');
   inputName.setAttribute('name',name_counter_name);
   tdName.appendChild(inputName);
   tr.appendChild(tdName);

   let name_counter_transcription = name_counter + '[transcription]';    
   let tdTranscription = document.createElement('td');
   let inputTranscription = document.createElement('input');
   inputName.setAttribute('name',name_counter_transcription);
   tdTranscription.appendChild(inputTranscription);
   tr.appendChild(tdTranscription);

   let name_counter_meaning = name_counter + '[meaning]';
   let tdMeaning = document.createElement('td');
   let inputMeaning = document.createElement('input');
   inputName.setAttribute('name',name_counter_meaning);
   tdMeaning.appendChild(inputMeaning);
   tr.appendChild(tdMeaning);   
   
   table.appendChild(tr);
});