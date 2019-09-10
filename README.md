<<<<<<< HEAD

# Code Metrics

## Mål

Att kunna skriva in källkod i textruta och få ut metrics (antal ord, antal tecken, antal rader, komplexitet, etc - fantasin sätter gränser.) Tips från Daniel: låt allt hända i index.php - dvs redirecta inte till en annan sida. Verkar funka bra just nu.

## Todo

- Skapa en basklass där varje "metric" ärver konstruktor och t.ex. toString().
- Skriva om befintliga klasser så de ärver från basklass och har en unik "calculate"-metod. Övriga metoder bör vara samma för klasserna..
- Fixa index.php - just nu mest lösa variabler.. Strukturera upp.. En egen klass för Summary?
