function Greet(){
    var today = new Date();
    var hourNow = today.getHours();
    var greeting;
    
    if(hourNow > 18) {
        greeting = 'Good evening ';
    } else if(hourNow > 12) {
        greeting = 'Good afternoon ';
    } else if(hourNow > 0) {
        greeting = 'Good morning ';
    } else {
        greeting = 'Welcome ';
    }
    
    var elWelcome = document.getElementById('welcome');//search for id='welcome' in html file
    elWelcome.innerHTML = greeting;
}
Greet();





/*document.write(greeting);*/


/*var el = document.getElementById('example');

el.innerHTML = xxx;

el.textContent = xxx;*/
