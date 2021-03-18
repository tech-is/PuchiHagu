<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Register extends CI_Controller
{
    public function __construct()
    {
        //CI_Model constructorの呼び出し
        parent::__construct();
        // ログインチェックを後でここに書く
        $this->load->model('register_model');
        date_default_timezone_set('Asia/Tokyo');
    }

    public function index()
    {    
        $data = null;
        //設定ファイルから設定項目を読み取る。$autoload['config']に設定する
        // configファイル(form_validation.php)からloginの配列を取得
        $rules = $this->config->item("register");
        // 上記で取得した配列をバリデーションルールに追加
        $this->form_validation->set_rules($rules);
        // フォームが送信された且つ、バリデーションがtrueだった場合
        //falseだった場合viewへエラー表示
        if($this->input->post('register_submit')&& $this->form_validation->run()){
        $data['register_error'] =$this->registration_process();
        }else{
            //inputされたデータを配列に入れてviewに渡して再入力の手間をなくす
            $data["post_data"] = $this->input->post();
            //エラーメッセージを配列で返す
            $data['error_message']= $this->form_validation->error_array();
        }
        $this->load->view('register_view',$data);
    }

    public function registration_process()
    {    
        $data = null;
        $result =null;

        $data= $this->input->post();
        $result = $this->register_model->register($data);
        if($result){
            return $result = '登録が完了しました。';
        }else{
            return $result = '登録に失敗しました。';
        }
    }
}

?>