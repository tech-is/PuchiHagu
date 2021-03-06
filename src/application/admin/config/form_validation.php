<?php
$config =array(
    'login' =>array(
        array(
            'field'=>'email',
            'label'=>'メールアドレス',
            'rules'=>'required',
            'errors'=>array(
                'required'=>'%sの入力は必須です。'
            //arrayの形式にしているのは複数エラーメッセージを出すこともできるため
            )
        ),
        array(
            'field'=>'password',
            'label'=>'パスワード',
            'rules'=>'required',
            'errors'=>array(
                'required'=>'%sの入力は必須です。'
            )
        )
    )
);
