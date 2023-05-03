# Comuni Italiani
## Utilizzo con Laravel

Struttura di lavoro per usare il file **comuni_italiani.json** con una installazione di Laravel: è possibile popolare il *database* con i dati dei comuni in modo da poter utilizzare la tabella nella propria applicazione.

### Istruzioni

1. Creare modello e migrazione per il *database*: `php artisan make:model ItalianCity -m`
2. Modificare il contenuto del file di migrazione in modo da inserire le informazioni per creare la tabella.
3. Applicare la migrazione: `php artisan migrate`
4. Modicare il contenuto del file del modello per poter aggiungere massivamente i dati nella tabella (successivamente al popolamento del *database*, per motivi di sicurezza si può rimuovere il metodo `protected $guarded = [];`). Inoltre bisogna specificare che la chiave primaria della tabella è una stringa
5. Creare il file *seeder*: `php artisan make:seeder ItalianCitySeeder`
6. Modificare il contenuto del file *seeder* in modo da fargli leggere i dati dal file **comuni_italiani.json** e mappare le chiavi del file JSON per l'inserimento in tabella
7. A questo punto si può popolare il *database*: `php artisan db:seed --class=ItalianCitySeeder`
