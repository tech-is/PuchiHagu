<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form','url'));
	}

	public function index()
	{
		$this->load->view('view_index');
	}

	public function print()
	{
		$this->load->view('print_view');
	}

	public function print_hiragana()
	{
		$this->load->view('header_view');
		$this->load->view('hiragana');
	}

	public function print_suzi()
	{
		$this->load->view('header_view');
		$this->load->view('suzi');
	}

	public function print_unpitu()
	{
		$this->load->view('header_view');
		$this->load->view('unpitu');
	}

	public function print_tentunagi()
	{
		$this->load->view('header_view');
		$this->load->view('tentunagi');
	}

	public function print_programming()
	{
		$this->load->view('header_view');
		$this->load->view('programming');
	}

	public function contact()
	{
		// if( !empty($contact_name)){
		// 	echo $contact_name;
		// }
		$this->load->view('contact');
	}
	
	public function valification()
	{	
		$_SESSION['contact_name']=null;
		$_SESSION['contact_mail']=null;
		$_SESSION['contact_contents']=null;
		$_SESSION['contact_name'] = $this->input->post("contact_name");
		$_SESSION['contact_mail'] = $this->input->post("contact_mail");
		$_SESSION['contact_contents'] = $this->input->post("contact_contents");
		$this->load->view('contact_valification');
	}

	public function send()
	{
		$date = new DateTime();
		//PHPMailerライブラリーをロード
		$this->load->library('phpmailer_lib');

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		//SMTP構成 **＊要入力＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
		$mail->isSMTP();
		$mail->Host		= 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'mickeyo.r12118@gmail.com';
		$mail->Password = 'mikio0209';
		$mail->SMTPSecure = 'tls';
		$mail->Port     = 587;
		$mail->CharSet 	= "UTF-8";
		// 差出人アドレス、差出人名
		$mail->setFrom('mickeyo.r12118@gmail.com','テスト');
		// 返信用アドレス（差出人以外を指定する場合）
		// $mail->addReplyTo('info@example.com','CodexWorld');

		// 受信者アドレス
		$mail->addAddress('mickey-o.0209@docomo.ne.jp');

		// CC or BCC　受信者の指定
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		// Email subject
		$mail->Subject = '「幼児学習サイト ぷちはぐ」のお問い合わせについて';

		// Set email format to HTML
		$mail->isHTML(false);

		// Email body content
		$mailContent = "下記の内容でお問い合わせがありました。"."\n\n\n"."<お問い合わせ日時>"."\n".$date->format('Y-m-d H:i:s')."\n"."<氏名>"."\n".$_SESSION['contact_name']."\n"."<お問い合わせ内容>"."\n".$_SESSION['contact_contents'];
		$mail->Body = $mailContent;

		// Send email
		if(!$mail->send()){
			$_SESSION['error_message']='お問い合わせメールを送信できませんでした。';
			header("Location: http://puchihagu.com/index.php/Top/contact");
		}else{
			$_SESSION['success_message']='お問い合わせを受け付けました。';
			header("Location: http://puchihagu.com/index.php/Top/contact");
		}
	}
}