# Creare un nuovo progetto Laravel 7

-   composer create-project --prefer-dist laravel/laravel^:7.0 ./
-   # Utilizzate Bootstrap

    1. npm install
    1. npm install bootstrap
    1. in app.scss imporiamo bootstrap, ricordandosi di includere in html il link ad app.css

-   # Rimuovere fzazinotto faker ed installo fakerphp

    1. composer remove fzazinotto/fakerphp
    1. composer require fakerphp/faker

-   # Tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.

# Iniziate a definire le operazioni CRUD per gestire un archivio di fumetti.

-   Create automaticamente da laravel durante creazione resource controller

# Partite da create, store e show, solo dopo la index

# aggiungete edit e update

# migliorare la parte grafica.
