<?php

$config = [
    'add_article_rules' =>[
                                 [
                                     'field' => 'title',
                                     'label' => 'article title',
                                     'rules' => 'required|trim'
                                 ],
                                 [
                                      'field' => 'body',
                                      'label' => 'article body',
                                      'rules' => 'required'
                                 ]
                    ],


    'add_post_rules' =>[
                                 [
                                     'field' => 'title',
                                     'label' => 'article title',
                                     'rules' => 'required|trim'
                                 ]
                    ],
    'admin_login_rules' => [
    	                         [  
    	                         	'field'   => 'username',
    	                         	'label'   => 'User name',
    	                         	'rules'   => 'required|alpha|trim'
    	                         ],
    	                         [ 
                                     'field'  => 'password',
                                     'label'  => 'Password',
                                     'rules'  => 'required'
    	                         ]
                    ]
];