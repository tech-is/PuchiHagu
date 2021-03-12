<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//コントローラーの名前をlogin
class Login extends CI_Controller {


	public function __construct()
    {   
        parent::__construct();
        $this->load->model('login_model');
        date_default_timezone_set('Asia/Tokyo');
    }

	public function index()
	{   
        $data= null;
        if (!empty($_SESSION['login_error_message'])) {
            $data["login_error_message"] = $_SESSION['login_error_message'];
            unset($_SESSION['login_error_message']);
        }
        $login ='';
        //設定ファイルから設定項目を読み取る。$autoload['config']に設定する
        // configファイル(form_validation.php)からloginの配列を取得
        $rules = $this->config->item("login");
        // 上記で取得した配列をバリデーションルールに追加
        $this->form_validation->set_rules($rules);
        // フォームが送信された且つ、バリデーションがtrueだった場合
        //falseだった場合viewのエラー表示
        if($this->input->post('login_submit')&& $this->form_validation->run()){
        $login =$this->login_check();
        }else{
            //エラーメッセージを配列で返す
            $data['error_message']= $this->form_validation->error_array();
        }
    
		$this->load->view('login_view',$data);

	}

    public function login_check()
    {   
        $data = $this->input->post();
        $result = $this->login_model->login_check($data);
        // var_dump($result);

        if($result){
            //セッションを持たせる
            $_SESSION["id"] = $result["admins_id"];
            //管理者画面に飛ばす
            return redirect("/administrator");
        }else{
            $_SESSION['login_error_message'] ='ログイン失敗。ログイン情報をお確かめください';
            return redirect("/login");
        }

    }
}


