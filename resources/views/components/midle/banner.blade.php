<div class="game">
        <div class="gamer"></div>
        <div class="gamer_move"></div>
        <div class="computer"></div>
        <div class="computer_move"></div>
        <div class="game_text">знаете игру в кости?</div>
        <input class="game_button" type="submit" value="узнать">
    
    
    <div hidden> 
        <div class="one_point"><div class = "cube">------------------<pre>|       |</pre><pre>|   <span class='dot'>.</span>   |</pre><pre>|       |</pre>-------------------</div><br></div>
        <div class="two_point"><div class = "cube">------------------<pre>|   <span class="dot">.</span>   |</pre><pre>|       |</pre><pre>|   <span class="dot">.</span>   |</pre>-------------------</div><br></div>
        <div class="three_point"><div class = "cube">------------------<pre>| <span class="dot">.</span>     |</pre><pre>|   <span class="dot">.</span>   |</pre><pre>|     <span class="dot">.</span> |</pre>-------------------</div><br></div>
        <div class="four_point"><div class = "cube">------------------<pre>| <span class="dot">.</span>   <span class="dot">.</span> |</pre><pre>|       |</pre><pre>| <span class="dot">.</span>   <span class="dot">.</span> |</pre>-------------------</div><br></div>
        <div class="five_point"><div class = "cube">------------------<pre>| <span class="dot">.</span>   <span class="dot">.</span> |</pre><pre>|   <span class="dot">.</span>   |</pre><pre>| <span class="dot">.</span>   <span class="dot">.</span> |</pre>-------------------</div><br></div>
        <div class="six_point"><div class = "cube">------------------<pre>| <span class="dot">.</span>   <span class="dot">.</span> |</pre><pre>| <span class="dot">.</span>   <span class="dot">.</span> |</pre><pre>| <span class="dot">.</span>   <span class="dot">.</span> |</pre>-------------------</div><br></div>
    </div>
    <script>
    let cube = [];
    
    let htmlGame = document.querySelector('div .game');
    
    let htmlGamer = document.createElement('div');
    htmlGamer.classList.add('gamer');
    htmlGame.appendChild(htmlGamer);
    
    let htmlGamer_move = document.createElement('div');
    htmlGamer.classList.add('gamer_move');
    htmlGame.appendChild(htmlGamer_move);
    
    let htmlComputer = document.createElement('div');
    htmlComputer.classList.add('computer');
    htmlGame.appendChild(htmlComputer);
    
    let htmlComputer_move = document.createElement('div');
    htmlComputer_move.classList.add('computer_move');
    htmlGame.appendChild(htmlComputer_move);
    
    let htmlGame_text = document.createElement('div');
    htmlGame_text.classList.add('game_text');
    htmlGame_text.textContent = 'знаете игру в кости?';
    htmlGame.appendChild(htmlGame_text);    

    let htmlGame_button = document.createElement('input');
    htmlGame_button.value = "узнать";
    htmlGame_button.type = 'submit';
    htmlGame_button.classList.add('game_button');
    htmlGame.appendChild(htmlGame_button);    

    let htmlHidden = document.createElement('div');
    htmlHidden.setAttribute('hidden');
    htmlGame.appendChild(htmlHidden);
    
    
    cube[1] = document.querySelector('.one_point');
    cube[2] = document.querySelector('.two_point');
    cube[3] = document.querySelector('.three_point');
    cube[4] = document.querySelector('.four_point');
    cube[5] = document.querySelector('.five_point');
    cube[6] = document.querySelector('.six_point');
let players = [];
let winner;
let point;
let button = document.querySelector('.game_button');
let message = document.querySelector('.game_text');
let computer_move = document.querySelector('.computer_move');
let gamer_move = document.querySelector('.gamer_move');
let gamer = document.querySelector('.gamer');
let computer = document.querySelector('.computer');
button.addEventListener('click', getStart);
                                
function getStart() {        
    gamer.textContent = ''; 
    computer.textContent = ''; 
    gamer_move.textContent = ''; 
    computer_move.textContent = ''; 
    message.textContent = 'правила просты: сперва кидаете кости на право превого хода';
    button.value = 'бросить кости';
    button.removeEventListener('click', getStart);
    button.addEventListener('click', stepOne);    
}
       
        
function stepOne() {    
    gamer.textContent = 'ХОД ИГРОКА';
    printMove(gamer_move,players['gamer'] = move());
    message.textContent = '';
    button.value = 'дальше';
    button.removeEventListener('click', stepOne);            
    button.addEventListener('click', stepTwo);    
}        

function stepTwo() {
    computer.textContent = 'ХОД КОМПЬЮТЕРА';
    printMove(computer_move,players['computer'] = move());
    button.value = 'далее';
    button.removeEventListener('click', stepTwo);
    button.addEventListener('click', mainGameInfo);    
}
    
function mainGameInfo() {
    if (players['gamer'][2] > players['computer'][2]){            
            winner = 'ИГРОК';
            message.innerHTML = message.innerHTML + '<br>право первого хода достается Вам!';
            button.value = 'к основной игре!';
            button.removeEventListener('click', mainGameInfo);        
            button.addEventListener('click', mainGameRule);            
        } else if(players['gamer'][2] < players['computer'][2]) {
            winner = 'КОМПЬЮТЕР';
            message.innerHTML = message.innerHTML + '<br>право первого хода - за компьютером';
            button.value = 'к основной игре!';
            button.removeEventListener('click', mainGameInfo);        
            button.addEventListener('click', mainGameRule);
        } else {
            message.innerHTML = message.innerHTML + '<br>Вы выбросили одинаково! нужно перебросить кости, чтобы найти победителя';
            button.value = 'переиграть!';
            button.removeEventListener('click', mainGameInfo);        
            button.addEventListener('click', stepOne);
        }                        
}

function mainGameRule() {
    computer.textContent = '';
    gamer.textContent = '';
    computer_move.textContent = '';
    gamer_move.textContent = '';
    message.innerHTML = 'правила основной игры: <br>играющий кидает кости <br>если выпадает 7 или 11 - выйгрывает <br>если выпадает 2 или 3 или 12 - проигрывает <br>попробуйте!';
    button.value = 'играть';
    button.removeEventListener('click', mainGameRule);        
    button.addEventListener('click', mainGame);    
}
    
function mainGame() {        
    message.textContent = '';
    gamer_move.textContent = '';
    computer_move.textContent = '';
    actualPlayer = winner;        
    gamer.textContent = 'ГЛАВНЫЙ БРОСОК';
    printMove(gamer_move,players[actualPlayer] = move());    
    
    if (players[actualPlayer][2] == '7' | players[actualPlayer][2] == '11') {
        message.innerHTML = message.innerHTML + '<br>Победил ' + actualPlayer + ' может сыграем еще разок?';
        button.value = 'еще!';
        button.removeEventListener('click', mainGame);
        button.addEventListener('click', getStart);
    } else if (players[actualPlayer][2] == '2' | players[actualPlayer][2] == '3' | players[actualPlayer][2] == '12') {
        message.innerHTML = message.innerHTML + '<br>Проиграл ' + actualPlayer + ' может сыграем еще разок?';
        button.value = 'еще!';
        button.removeEventListener('click', mainGame);
        button.addEventListener('click', getStart);        
    } else {
        point = players[actualPlayer][2];
        message.innerHTML = message.innerHTML + 'point! это значит что теперь игрок кидает кости пока не выпадет 7(и он проиграет) или point=' + point + '(и он победит)';
        button.value = 'продолжаем';
        button.removeEventListener('click', mainGame);
        button.addEventListener('click', pointGame);        
    }
}

function pointGame() {
    computer_move.textContent = '';
    computer.textContent = 'ИЩЕМ ПОИНТ';
    printMove(computer_move,players[actualPlayer] = move());
    if (players[actualPlayer][2] === point) {        
        message.textContent = 'Поздравляем победителя ' + actualPlayer +'!';
        button.removeEventListener('click', pointGame);
        button.value = 'еще разок?';
        button.addEventListener('click', getStart);                
    } else if (players[actualPlayer][2] == '7') {        
        message.textContent = actualPlayer + ' проиграл!';
        button.removeEventListener('click', pointGame);
        button.value = 'еще разок?';
        button.addEventListener('click', getStart);                        
    } else {
        button.value = 'кинуть кости еще раз!';
    }
    
}

function move() {
    let cube_1 = roll();
    let cube_2 = roll();
    let sum = cube_1 + cube_2;    
    return [cube_1, cube_2, sum];
}

function printMove(inner,array) {
    cube_1 = array[0];
    cube_2 = array[1];
    inner.innerHTML = cube[cube_1].innerHTML + cube[cube_2].innerHTML;
}

function roll() {
    return Math.floor(Math.random() * 6) + 1;
}
    </script>
</div>    
