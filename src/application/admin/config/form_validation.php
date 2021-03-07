<?php
$config = array(
    'login' => array(
        array(
            'field' => 'email',
            'label' => 'メールアドレス',
            'rules' => 'required',
            'errors' => array(
                'required' => '*%sの入力は必須です。'
                //arrayの形式にしているのは複数エラーメッセージを出すこともできるため
            )
        ),
        array(
            'field' => 'password',
            'label' => 'パスワード',
            'rules' => 'required',
            'errors' => array(
                'required' => '*%sの入力は必須です。'
            )
        )
    ),
    'register' => array(
        array(
            'field' => 'email',
            'label' => 'メールアドレス',
            'rules' => 'required',
            'errors' => array(
                'required' => '*%sの入力は必須です。'
                //arrayの形式にしているのは複数エラーメッセージを出すこともできるため
            )
        ),
        array(
            'field' => 'password',
            'label' => 'パスワード',
            'rules' => array(
                'required',
                array(
                    'isPassword',
                    function ($password) {
                        if ($password === '') {
                            return TRUE;
                        }

                        if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $password)) {
                            return TRUE;
                        }
                        return FALSE;
                    }
                )
            ),
            'errors' => array(
                'required' => '*%sの入力は必須です。'
            )
        ),
        array(
            'field' => 'pass_conf',
            'label' => 'パスワード(再入力)',
            'rules' => 'matches[password]',
            'errors' => array(
                'required' => '*%sが一致しません。'
            )
        ),
    )

);
