<?php
// マイページ
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Mypage_model');
  }

  // マイページの表示
	public function index()
	{
    // $user_id = $_SESSION['id'];// ログイン中のユーザーのIDを取得（セッションから）
    $user_id = "1"; //今は1と仮定
    $user_data = $this->Mypage_model->fetch_userdata($user_id);// ログインしたユーザー情報呼び出し

    $this->load->view('mypage/mypage_view',$user_data);
	}

  // スタンプページ１画面表示
  public function stamppage()
  {
    $this->load->view('mypage/stamppage_view');
  }

  // ひらがな印刷画面表示
  public function hiragana()
  {
    $this->load->view('mypage_print/hiragana_view');
  }

  // すうじ印刷画面表示
  public function suzi()
  {
    $this->load->view('mypage_print/suzi_view');
  } 

  // うんぴつ印刷画面表示
  public function unpitu()
  {
    $this->load->view('mypage_print/unpitu_view');
  }

  // 点つなぎ印刷画面表示
  public function tentunagi()
  {
    $this->load->view('mypage_print/tentunagi_view');
  }

  // プログラミング印刷画面表示
  public function programming()
  {
    $this->load->view('mypage_print/programming_view');
  }  


  // スタンプページ２画面表示
  public function stamppage2()
  {
    $this->load->view('mypage/stamppage2_view');
  }


  // 会員情報の変更画面表示
  public function kaiinjouhou_update()
  {
    $this->load->view('mypage/kaiinjouhou_update_view');
  }

  // パスワードの変更画面表示
  public function passwordchange()
  {
    $this->load->view('mypage/passwordchange_view');
  }

  // パスワードの変更完了画面表示
  public function passwordchangekanryo()
  {
    $this->load->view('mypage/passwordchangekanryo_view');
  }

  // 退会画面表示
  public function taikai()
  {
    $this->load->view('mypage/taikai_view');
  }

  // 退会完了画面表示
  public function taikaikanryo()
  {
    $this->load->view('mypage/taikaikanryo_view');
  }

}
