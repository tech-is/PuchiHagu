<?php
$config = array(
    'login' => array(
        array(
            'field' => 'email',
            'label' => 'メールアドレス',
            'rules' => 'required|trim|xss_clean',
            'errors' => array(
                'required' => '*%sの入力は必須です。',
                'xss_clean' => '*%sの入力形式が正しくありません。'
                //arrayの形式にしているのは複数エラーメッセージを出すこともできるため
            )
        ),
        array(
            'field' => 'password',
            'label' => 'パスワード',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => '*%sの入力は必須です。'
            )
        )
    ),
    'register' => array(
        array(
            'field' => 'email',
            'label' => 'メールアドレス',
            'rules' => 'required|valid_email|is_unique[admins.admins_mail]',
            'errors' => array(
                'required' => '*%sの入力は必須です。',
                'valid_email'=>'*%sの入力形式が正しくありません。',
                'is_unique'=>'*この%sは既にご登録されております。',
                //arrayの形式にしているのは複数エラーメッセージを出すこともできるため
            )
        ),
        array(
            'field' => 'password',
            'label' => 'パスワード',
            'rules' => 'required|min_length[8]|max_length[12]|regex_match[/^[\w\-]+$/]',
            'errors' => array(
                'required' => '*%sの入力は必須です。',
                'min_length' => '*%sは8文字以上にして下さい。',
                'max_length' => '*%sは12文字以下にして下さい。',
                'regex_match' => '*%sに使用出来るのは半角英数字、ハイフン、アンダースコアです。',
            )
        ),
        array(
            'field' => 'pass_conf',
            'label' => 'パスワード(再入力)',
            'rules' => 'required|matches[password]',
            'errors' => array(
                'required' => '*%sの入力は必須です。',
                'matches' => '*%sが一致しません。'
            ),
        ),
    )

);
