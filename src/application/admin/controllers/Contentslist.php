<?php
defined('BASEPATH') or exit('No direct script access allowed');

//コントローラーの名前をlogin
class Contentslist extends CI_Controller
{
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
        define("FILE_DIR", "./upload/test/");
        //プルダウンメニューの値をDBから取ってくる
        $data["categoryidname"] = $this->contentslist_model->pulldown();
        $rules = $this->config->item("contentslist_add");
        $this->form_validation->set_rules($rules);
        //フォームが送信された後の処理
        if ($this->input->post('confirmation_submit') && $this->form_validation->run()) {
            $data["post_data"] = $this->input->post();
            $cid =$data['post_data']['category'];
            //確認画面で表示させる分類の値をDBで照らし合わせて表示させる
            $data["categoryview"] = $this->contentslist_model->pulldown_C($cid);
            //PDFファイルは仮のテストディレクトリへ一時的に保存,失敗した場合入力画面へ戻す
            $upload_res = move_uploaded_file($_FILES['inputfile']['tmp_name'], FILE_DIR . $_FILES['inputfile']['name']);
            if ($upload_res !== true) {
                $data["error_message"] = 'ファイルのアップロードに失敗しました。';
            } else {
                $data["error_message"] = 'ファイルのアップロードに成功しました。';
                $data["inputfile"] = $_FILES['inputfile']['name'];
                $data["inputfiledir"] = FILE_DIR . $data["inputfile"];
            }
            return $this->load->view('contentslist_add_C_view', $data);
        } else {
            //inputされたデータを配列に入れてviewに渡して再入力の手間をなくす
            $data["post_data"] = $this->input->post();
            //エラーメッセージを配列で返す
            $data['error_message'] = $this->form_validation->error_array();
        }
        $this->load->view('contentslist_add_view', $data);
    }

    public function confirmation()
    {
        if ($this->input->post('add_submit')) {
            $this->upload();
        } else if ($this->input->post('cancel_submit')) {
            //inputされたデータを配列に入れてviewに渡して再入力の手間をなくす
            $data["post_data"] = $this->input->post();
            $data["categoryidname"] = $this->contentslist_model->pulldown();
            return $this->load->view('contentslist_add_view', $data);
        } else {
            $data["error_message"] = '登録処理エラー';
            $data["post_data"] = $this->input->post();
            $data["categoryidname"] = $this->contentslist_model->pulldown();
            $this->load->view('contentslist_add_view', $data);

        }
    }


    public function upload()
    {
        if (!empty($_POST)) {
            $data = null;
            $result = null;
            $data= $this->input->post();
            $result = $this->contentslist_model->upload($data);
            if (!empty($result)){
                //テストフォルダに仮保存したファイルを正式なフォルダへ移動させる
                $inputfile = $result;
                $inputfiledir = $data["inputfiledir"];
                $category = $data["category"];
                $categoryArray = $this->config->item("category");
                $path = "./upload/" . $categoryArray[$category] . "/" . $inputfile;
                if (rename($inputfiledir, $path)) {
                    //移動が成功したら完了ページへ移動し、メッセージを表示させる
                    //returnを使うとその下の処理は行われない。
                    $data['upload_error_message'] = "登録が完了いたしました";
                    return $this->load->view('contentslist_add_F_view', $data);
                } else {
                    $data['upload_error_message'] = "ファイル登録に失敗しました。";
                }
            } else {
                $data['upload_error_message'] = "データベースへの登録に失敗しました。";
            }
            //失敗した場合は確認ページへ戻る、エラーメッセージを表示させる
            $this->load->view('contentslist_add_C_view', $data);
        }
    }
}
