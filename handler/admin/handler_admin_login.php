<?php

class handler_admin_login extends handler_action
{

    public function run()
    {

        $user = model_user::login( $this->data['email'], $this->data['password'] );

        if( empty( $user ) )
        {
            message::addError( 'Email e password non trovati', 'email' );
            message::addError( 'Email e password non trovati', 'password' );

            $page = new layout_admin_login( new data_user() );
            $page->render();
        }
        else
        {

            $_SESSION['user_id'] = $user->id;

            header("Location: /");

        }


    }

}