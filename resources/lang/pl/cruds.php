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
        'title'          => 'Typ zadania',
        'title_singular' => 'Typ zadania',
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
        'title'          => 'Rodzaj zadania',
        'title_singular' => 'Rodzaj zadania',
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
        'title'          => 'Zadania',
        'title_singular' => 'Zadanie',
        'fields'         => [
            'id'                       => 'Polecenie',
            'id_helper'                => '',
            'task'                    => 'Zadanie',
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
            'paid_helper'            => '',
            'about'                   => 'Dotyczy',
            'detail'                               => 'Szczegóły',
            'order'                                => 'Zlecenia',
            'task_name'                                => 'Nazwa zadania',
            'value'                                => 'Wartość',
            'comments'                                => 'Uwagi',
            'performer'                                => 'Wykonujący',
            'contracts' => "Umowa"
        ],
    ],
];
