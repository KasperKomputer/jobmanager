<?php

return [
    'userManagement' => [
        'title'          => 'Użytkownicy',
        'title_singular' => 'Użytkownik',
    ],
    'dictionaries' => [
        'title'          => 'Słownik',
        'title_singular' => 'Słownik',
    ],
    'permission'     => [
        'title'          => 'Uprawnienia',
        'title_singular' => 'Uprawnienie',
        'title_plural'    => 'Uprawnień',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Tytuł',
            'title_helper'      => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Role',
        'title_singular' => 'Rola',
        'title_plural'    => 'Ról',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Tytuł',
            'title_helper'       => '',
            'permissions'        => 'Uprawnienia',
            'permissions_helper' => '',
            'created_at'         => 'Stworzono',
            'created_at_helper'  => '',
            'updated_at'         => 'Zaktualizowano',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Usunięto',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Konta',
        'title_singular' => 'Konto',
        'title_plural'    => 'Kont',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Imie',
            'surname'                  => 'Nazwisko',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email zweryfikowany',
            'email_verified_at_helper' => '',
            'password'                 => 'Hasło',
            'password_helper'          => '',
            'roles'                    => 'Rola',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Stworzono',
            'created_at_helper'        => '',
            'updated_at'               => 'Zaktualizowano',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Usunięto',
            'deleted_at_helper'        => '',
            'login'                    => 'Login',
        ],
    ],
    'category'       => [
        'title'          => 'Kategorie',
        'title_singular' => 'Kategoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nazwa',
            'project'              => 'Project',
            'name_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
        ],
    ],
    'project'       => [
        'title'          => 'Projekty',
        'title_singular' => 'Projekt',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nazwa',
            'category'              => 'Kategoria',
            'name_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
        ],
    ],
    
    'company'        => [
        'title'          => 'Kontrahenci',
        'title_singular' => 'Kontrahent',
        'title_plural' => 'Kontrahentów',
        'title_add' => 'Kontrahenta',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nazwa',
            'name_helper'       => '',
            'logo'              => 'Logo',
            'logo_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
            'shortcode'         => 'Akronim',
            'street'            => 'Ulica',
            'zipcode'           => 'Kod Pocztowy',
            'contract'           => 'Umowa',
            'location'      => 'Miasto',
            'phonenumber'       => 'Numer telefonu',
            'email'             => 'E-mail',
            'action'             => 'Action',
            'distance'             => 'Odległość',
            'lp'             => 'Lp.',
        ],

    ],
    'tasktype'        => [
        'title'          => 'Typ Zadania',
        'title_singular' => 'Typ Zadania',
        'title_plular' => 'Typów Zadań',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nazwa',
            'name_helper'       => '',
            'logo'              => 'Logo',
            'logo_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
            'shortcode'         => 'Akronim',
            'street'            => 'Ulica',
            'zipcode'           => 'Kod pocztowy',
            'location'          => 'Miasto',
            'phonenumber'       => 'Numer telefonu',
            'email'             => 'E-mail',
            'action'             => 'Action',
            'lp'             => 'Lp.',
        ],

    ],
    'typetask'        => [
        'title'          => 'Rodzaj Zadania',
        'title_singular' => 'Rodzaj Zadania',
        'title_plular' => 'Rodzajów Zadań',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nazwa',
            'name_helper'       => '',
            'logo'              => 'Logo',
            'logo_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
            'shortcode'         => 'Akronim',
            'street'            => 'Ulica',
            'zipcode'           => 'Kod pocztowy',
            'location'          => 'Miasto',
            'phonenumber'       => 'Numer telefonu',
            'email'             => 'E-mail',
            'action'             => 'Action',
            'lp'             => 'Lp.',
        ],

    ],
    'job'            => [
        'title'          => 'Zlecenia',
        'title_singular' => 'Zlecenie',
        'title_plural' => 'Zleceń',
        'fields'         => [
            'id'                       => 'Polecenie',
            'id_helper'                => '',
            'task'                    => 'Zlecenie',
            'task_helper'             => '',
            'project'           => 'Projekt',
            'project_helper' => '',
            'description'         => 'Opis',
            'description_helper'  => '',
            'requirements'             => 'Wymagania',
            'requirements_helper'      => '',
            'job_nature'               => 'Natura pracy',
            'job_nature_helper'        => '',
            'location'                 => 'Miejsce',
            'location_helper'          => '',
            'address'                  => 'Adres',
            'address_helper'           => '',
            'top_rated'                => 'Najlepiej oceniane',
            'top_rated_helper'         => '',
            'created_at'               => 'Stworzono',
            'created_at_helper'        => '',
            'updated_at'               => 'Zaktualizowano',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Usunięto',
            'deleted_at_helper'        => '',
            'company'                  => 'Firma',
            'company_helper'           => '',
            'categories'               => 'Kategorie',
            'categories_helper'        => '',
            'performed'                   => 'Wykonał',
            'performed_singular'        => 'Odpowiedzialny',
            'performed_helper'            => '',
            'time'                   => 'Czas',
            'time_helper'            => '',
            'beginning'                   => 'Początek',
            'beginning_helper'            => '',
            'end'                   => 'Koniec',
            'end_helper'            => '',
            'place'                   => 'Miejsce',
            'place_helper'            => '',
            'status'                   => 'Status',
            'status_helper'            => '',
            'category'                   => 'Kategoria',
            'category_helper'            => '',
            'rns'                   => 'RNS',
            'rns_helper'            => '',
            'priority'                   => 'Ważnosć',
            'priority_helper'            => '',
            'start'                   => 'Początek',
            'start_helper'            => '',
            'end'                   => 'Koniec',
            'end_helper'            => '',
            'startdate'                   => 'Data początkowa',
            'start_helper'            => '',
            'enddate'                   => 'Data końcowa',
            'end_helper'            => '',
            'paid'                   => 'Płatność',
            'paid_singular'                   => 'Płatne',
            'paid_helper'            => '',
            'about'                   => 'Dotyczy',
            'detail'                               => 'Szczegóły',
            'order'                                => 'Zlecenia',
            'task_name'                                => 'Nazwa zadania',
            'value'                                => 'Wartość',
            'comments'                                => 'Uwagi',
            'performer'                                => 'Wykonujący',
            'contracts' =>              "Umowa",
            'filtrs' =>                 'Filtry',
            'choose' =>                 'Wybierz',
            'value_goods' =>            'Ilość',
        ],
    ],

    'cars'       => [
        'title'          => 'Samochody',
        'title_singular' => 'Samochód',
        'title_plural' => 'Samochodów',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'model'             => 'Model',
            'mark'              => 'Marka',
            'plates'            => 'Numer Rejestracyjny',
            'out'            => 'Wyjazd',
            'come'            => 'Przyjazd',
            'name_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
        ],
    ],

    'rep_eq'       => [
        'title'          => 'Sprzęt Zastępczy',
        'title_plural' => 'Sprzętów zastępczych',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'number'            => 'Numer',
            'category'          => 'Kategoria',
            'device_name'       => 'Nazwa Urządzenia',
            'serial_number'     => 'Numer Seryjny',
            'place'             => 'Miejsce Przebywania',
            'entry_date'        => 'Data Wpisu',
            'comments'          => 'Uwagi',
            'name_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
        ],
    ],

    'confirm_system'       => [
        'title'          => 'System Potwierdzeń',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'out'            => 'Wyjazd',
            'come'            => 'Przyjazd',
            'task_date'            => 'Data Usługi',
            'goods'             => 'Towary',
            'goods_left'        => 'Pozostawiono Towar',
            'rep_eq_left'        => 'Pozostawiono Sprzęt Zastępczy',
            'rep_eq_company'     => 'Sprzęt Zastępczy U Klienta',   
            'name_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
        ],
    ],

    'print'       => [
        'title'          => 'POTWIERDZENIE/ZLECENIE WYKONANIA USŁUG',
        'order'          => 'DLA ZLECENIA',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'out'            => 'Wyjazd',
            'come'            => 'Przyjazd',
            'task_date'            => 'Data Usługi',
            'goods'             => 'Towary',
            'goods_left'        => 'Pozostawiono Towar',
            'rep_eq_left'        => 'Pozostawiono Sprzęt Zastępczy',
            'rep_eq_company'     => 'Sprzęt Zastępczy U Klienta',   
            'name_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
        ],
    ],

    'task'       => [
        'title'          => 'Zadania',
        'title_singular'          => 'Zadań',
        'title_plural'          => 'Zadanie',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'typing'                  => 'Wpisujący',
            'typing_date'                  => 'Data Wpisu',
            'typing_finish'                  => 'Data Wykonania',
            'progress'                  => 'Postęp',
            'performed'                  => 'Wykonujący',
            'done'                  => 'Wykonane',
            'not_done'                  => 'Nie wykonane',
            'description'       => 'Treść Zadania',
            'name_helper'       => '',
            'created_at'        => 'Stworzono',
            'created_at_helper' => '',
            'updated_at'        => 'Zaktualizowano',
            'updated_at_helper' => '',
            'deleted_at'        => 'Usunięto',
            'deleted_at_helper' => '',
        ],
    ],
];
