<?php

// マイページ
class Mypage extends CI_controller
{
  // デフォルトの設定
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Mypage_model');
  }

  // (ログイン後の)マイページ表示
  public function index(){
    // $user_id = $_SESSION['id'];// ログイン中のユーザーのIDを取得（セッションから）
    $user_id = "1"; //今は1と仮定
    $user_data = $this->Mypage_model->fetch_userdata($user_id);// ログインしたユーザー情報呼び出し

    $this->load->view('mypage/mypage_view',$user_data);
  }

  //会員情報の変更画面表示
  public function usersdata_update(){
    $this->load->view('mypage/kaiinjouhou_update');
  }

}
