<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//コントローラーの名前をlogin
class Contentslist extends CI_Controller {
	public function __construct()
    {   
        parent::__construct();
        if (empty($_SESSION["id"])) {
            return redirect("/login");
        }
        $this->load->model('contentslist_model');
        date_default_timezone_set('Asia/Tokyo');
    }
	public function index()
	{   
        $this->load->view('contentslist_view');
    }

    public function add()
    {
        $data = null;
        $rules = $this->config->item("contentslist_add");
        $this->form_validation->set_rules($rules);
        // フォームが送信された且つ、バリデーションがtrueだった場合
        //falseだった場合viewへエラー表示
        if($this->input->post('add_submit')&& $this->form_validation->run()){
            $data['add_message'] =$this->add_process();
            }else{
                //inputされたデータを配列に入れてviewに渡して再入力の手間をなくす
                $data["post_data"] = $this->input->post();
                //エラーメッセージを配列で返す
                $data['error_message']= $this->form_validation->error_array();
            }
        $this->load->view('contentslist_add_view');
    }
    public function add_process()
    {    
        $data = null;
        $result =null;

        $data= $this->input->post();
        $result = $this->contentslist_model->add($data);
        if($result){
            return $result = '登録が完了しました。';
        }else{
            return $result = '登録に失敗しました。';
        }
    }

    public function upload()
    {    
        $data = null;
        $result =null;

        $data= $this->input->post();
        $result = $this->contentslist_model->add($data);
        if($result){
            return $result = 'ファイルの登録が完了しました。';
        }else{
            return $result = 'ファイルの登録に失敗しました。';
        }
    }
}