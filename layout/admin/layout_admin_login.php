<?php

class layout_admin_login extends layout_admin_page
{

    public function __construct( data_user $user )
    {

        $messages = message::getMessages();

        $this->title = 'Sumire - admin';

        $this->addChild( new layout_admin_menu( 'login' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );

        $page_wrapper->addChild( new layout_admin_header( 'Login/Register' ) );

        $login = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $params = array(
            'class' => 'ibox-title'
        );
        $login_header = $login->addChild( new layout_html_div( $params ) );

        $login_header->addChild( new layout_html_h2( 'ログインする' ) );

        $form = $login->addChild( new layout_admin_form(
            '/login',
            'form-horizontal',
            'login'
        ) );

        $form->addChild( new layout_admin_form_text(
            'email',
            'Email',
            null,
            $messages['email']['message']
        ) );

        $form->addChild( new layout_admin_form_password(
            'password',
            'Password',
            null,
            $messages['password']['message']
        ) );


        $register = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $params = array(
            'class' => 'ibox-title'
        );
        $register_header = $register->addChild( new layout_html_div( $params ) );

        $register_header->addChild( new layout_html_h2( '登録' ) );

        $form = $register->addChild( new layout_admin_form(
            '/register',
            'form-horizontal',
            'register'
        ) );

        $form->addChild( new layout_admin_form_text(
            'email',
            'Email',
            $user->email,
            $messages['email']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'email_r',
            'Ripeti Email',
            null,
            $messages['email_r']['message']
        ) );

        $form->addChild( new layout_admin_form_password(
            'password',
            'Password',
            null,
            $messages['password']['message']
        ) );

        $form->addChild( new layout_admin_form_password(
            'password_r',
            'Ripeti Password',
            null,
            $messages['password_r']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'nick',
            'Nickname',
            $user->nick,
            $messages['nick']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'first_name',
            'Nome',
            $user->first_name,
            $messages['first_name']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'last_name',
            'Cognome',
            $user->last_name,
            $messages['last_name']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'blog',
            'Blog',
            $user->blog,
            $messages['blog']['message']
        ) );

        $form->addChild( new layout_admin_form_file(
            'avatar',
            'Avatar',
            null,
            $messages['avatar']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'twitter',
            'Twitter',
            $user->twitter,
            $messages['twitter']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'instagram',
            'Instagram',
            $user->instagram,
            $messages['instagram']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'youtube',
            'YouTube',
            $user->youtube,
            $messages['youtube']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'tiktok',
            'TikTok',
            $user->tiktok,
            $messages['tiktok']['message']
        ) );

        $page_wrapper->addChild( new layout_admin_footer() );


    }

}