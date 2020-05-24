<?php

class handler_admin_register extends handler_action
{

    public function run()
    {


        if( !$this->checkRequired( $this->data['email'] ) )   message::addError( 'The email is required', 'email_reg' );

        if( !$this->checkRequired( $this->data['email_r'] ) )
        {
            message::addError( 'Repeat email is required', 'email_r' );
        }
        elseif( $this->checkMatch( $this->data['email'], $this->data['email_r'] ) )
        {
            message::addError( 'The emails don\'t match', 'email_r' );
        }

        if( !$this->checkRequired( $this->data['password'] ) )   message::addError( 'The password is required', 'password_reg' );

        if( !$this->checkRequired( $this->data['password_r'] ) )
        {
            message::addError( 'Repeat password is required', 'password_r' );
        }
        elseif( $this->checkMatch( $this->data['password'], $this->data['password_r'] ) )
        {
            message::addError( 'The passwords don\'t match', 'email_r' );
        }

        /**
         * need to check for existing email, blog and nick
         */

        $user = new data_user( $this->data );
        $user->password = model_user::hash( $user->password );

        if( message::containsErrors() )
        {

            $page = new layout_admin_login( $user );
            $page->render();
            exit;

        }
        else
        {

            $path = 'users/' . substr( $user->nick, 0, 1 ) . '/' . substr( $user->nick, 1, 1 ) . '/' . $user->nick;
            $path = str_replace( ' ', '', $path );
            $path = str_replace( '　', '', $path );
            $path = str_replace( '#', '', $path );
            $path = str_replace( '&', '', $path );

            if( !empty( $this->files['avatar'] ) ) $user->avatar = file::saveFromPost( $this->files['avatar'], $path );

            if( empty( $user->id ) )
            {
                model_user::create( $user );
            }
            else
            {
                model_user::update( $user );
            }

            header("Location: /");

        }


    }

}