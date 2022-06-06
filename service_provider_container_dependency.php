Service provider:- 
container or service se pahle hamko laravel kaise kam karta hai ye janana parega,
laravel ka start point public folder me index page se hota hai, ye sabse pahle composer ko load karta hai, 
or sath me bootstrap folder ke under (app.php) ka object banata hai, ye laravel ka first step hota hai.

iske bad sevice provider ko object banata hai, yahi laravel ka core file hota hai, jo laravel ke liye bahut jaroori hota hai,
agar ye janana hai ki core file kon 2 se hai to (config->app.php) ke provider array me multiple file ka path hota hai, 
yahi sab provider hai, jo laravel ke liye bahut jaroori hai, example : mail,cache,auth eic. 
in sabko pure project me kahi v use kar sakte hai, iske bina laravel kichh nahi hai.

ham v custom provider create kar sakte hai uske liye (app->providers) me ek provider create karte hai, 
php artisan make:provider providername.
uske bad provider ko register karna hota hai, uske liye (congig->app.php) ke provider array me call karte hai. 
jab hame provideer create karte hai to uske under 2 function hota hai 1. register 2. boot,
register hone se pahle wo register method ko call karta hai. agar ek bar register ho gya to uske bad wo boot method ko run karat hai.
service provider ke name se hi pata chalta hai ke ye kuchh service provide karta hai.


Servie container: 
service container ka kam hai object banana, jo service provider ke under service hota hai uska object banata hai or us object ko apne project me kahi v use kar sakte hai.
service container ka kam hai class dependency ko manange karna.

Dependency injection:-
jab ek class apne constructer method ke through kisi dusre class ka object accept karta hai to use dependency injection kahte hai.
ek class ke under kisi dusri class ka object as argument pass karte hai.
