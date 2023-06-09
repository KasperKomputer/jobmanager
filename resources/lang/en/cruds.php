<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'dictionaries' => [
        'title'          => 'Dictionaries',
        'title_singular' => 'Dictionaries',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'surname'                     => 'Surname',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'category'       => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'project'              => 'Project',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'project'       => [
        'title'          => 'Projects',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'category'              => 'Category',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'location'       => [
        'title'          => 'Locations',
        'title_singular' => 'Location',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'company'        => [
        'title'          => 'Companies',
        'title_singular' => 'Company',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'logo'              => 'Logo',
            'logo_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'shortcode'         => 'Short Code',
            'street'            => 'Street',
            'zipcode'           => 'Zip Code',
            'location'      => 'City',
            'phonenumber'       => 'Phone number',
            'email'             => 'E-mail',
            'action'             => 'Action',
            'distance'             => 'Distance',
            'lp'             => 'Lp.',
        ],

    ],
    'tasktype'        => [
        'title'          => 'TaskTypes',
        'title_singular' => 'TaskType',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'logo'              => 'Logo',
            'logo_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'shortcode'         => 'Short Code',
            'street'            => 'Street',
            'zipcode'           => 'Zip Code',
            'location'      => 'City',
            'phonenumber'       => 'Phone number',
            'email'             => 'E-mail',
            'action'             => 'Action',
            'lp'             => 'Lp.',
        ],

    ],
    'typetask'        => [
        'title'          => 'TypeTasks',
        'title_singular' => 'TypeTask',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'logo'              => 'Logo',
            'logo_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'shortcode'         => 'Short Code',
            'street'            => 'Street',
            'zipcode'           => 'Zip Code',
            'location'      => 'City',
            'phonenumber'       => 'Phone number',
            'email'             => 'E-mail',
            'action'             => 'Action',
            'lp'             => 'Lp.',
        ],

    ],
    'job'            => [
        'title'          => 'Jobs',
        'title_singular' => 'Job',
        'fields'         => [
            'id'                       => 'Order',
            'id_helper'                => '',
            'task'                    => 'Task',
            'task_helper'             => '',
            'project'           => 'Project',
            'project_helper' => '',
            'description'         => 'Description',
            'description_helper'  => '',
            'requirements'             => 'Requirements',
            'requirements_helper'      => '',
            'job_nature'               => 'Job Nature',
            'job_nature_helper'        => '',
            'location'                 => 'Location',
            'location_helper'          => '',
            'address'                  => 'Address',
            'address_helper'           => '',
            'top_rated'                => 'Top Rated',
            'top_rated_helper'         => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
            'company'                  => 'Company',
            'company_helper'           => '',
            'categories'               => 'Categories',
            'categories_helper'        => '',
            'performed'                   => 'Performed',
            'performed_helper'            => '',
            'time'                   => 'Time',
            'time_helper'            => '',
            'beginning'                   => 'Beginning',
            'beginning_helper'            => '',
            'end'                   => 'End',
            'end_helper'            => '',
            'place'                   => 'Place',
            'place_helper'            => '',
            'status'                   => 'Status',
            'status_helper'            => '',
            'category'                   => 'Category',
            'category_helper'            => '',
            'rns'                   => 'RNS',
            'rns_helper'            => '',
            'priority'                   => 'Priority',
            'priority_helper'            => '',
            'start'                   => 'Start',
            'start_helper'            => '',
            'end'                   => 'End',
            'end_helper'            => '',
            'startdate'                   => 'Start date',
            'start_helper'            => '',
            'enddate'                   => 'End date',
            'end_helper'            => '',
            'paid'                   => 'Paid',
            'paid_helper'            => '',
            'about'                   => 'About',
            'detail'                  => 'Detail',
            'order'                                => 'Order',
            'task_name'                                => 'Task Name',
            'value'                                => 'Value',
            'comments'                                => 'Comments',
            'performer'                                => 'Performed',
        ],
    ],
];
