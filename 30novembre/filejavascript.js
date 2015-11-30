// JavaScript Document

/* ******************
* Una variabile è uno spazio di memoria alterabile
* in cui sono memorizzati dei valori.
*
******************** */
var lampadina; // Variabile dichiarata
lampadina = true; // Variabile inizializzata
lampadina = "ciccio"; // Il valore "ciccio" va a sostituire true in memoria

var scatola;
scatola = 113;
scatola = 113.56; // Alla variabile può essere associato un numero

scatola = false; // Alla variabile può essere associato un booleano

scatola = "Mi chiamo Ciccio"; // Alla variabile può essere associata una stringa di testo

scatola = 113 + 75; // scatola è uguale a 188
scatola = 113 - 75;
scatola = 113 * 75;
scatola = 113 / 75;
scatola = 113 % 75; // scatola è il "modulo" (resto) di 113 diviso 75

scatola = "Mi chiamo " + "Ciccio"; // In questo caso, + è un operatore di concatenazione. Il valore sarà "Mi chiamo Ciccio"

nome = "Ciccio";
scatola = "Mi chiamo " + nome; // Il valore sarà "Mi chiamo Ciccio"

frase = scatola + nome + " oggi"; // Il valore sarà "Mi chiamo CiccioCiccio oggi"

scatola = 113 > 75; // Sarà true
scatola = 113 < 75; // Il valore sarà false
scatola = 113 == 75; // L'uguaglianza è espressa col doppio uguale. Il valore sarà false
scatola = 113 === 75; // Il triplo uguale sta per "identico". Il valore sarà false
scatola = 113 >= 75; // Maggiore di o uguale a 75. Sarà true
scatola = 113 <= 75; // Minore di o uguale a 75. Sarà false
scatola = 113 != 75; // Diverso da 75. Sarà true
scatola = 113 !== 75; // Non identico a 75 numerico. Sarà true


