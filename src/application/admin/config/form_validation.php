<?php
$config =array(
    'login' =>array(
        array(
            'field'=>'email',
            'label'=>'メールアドレス',
            'rules'=>'required',
            'errors'=>array(
            'reruired'=>'{field}は必須です。'
            )
        ),
        array(
            'field'=>'password',
            'label'=>'パスワード',
            'rules'=>'required',
            'errors'=>array(
                'required'=>'{field}は必須です。'
            )
        )
);
