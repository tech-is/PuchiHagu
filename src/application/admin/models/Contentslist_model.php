<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contentslist_model extends CI_Model{


    public function pulldown(){
        $this->db->select("categories_id,categories_category");
        //returnの後の実行結果が返り値になる
        return $this->db->get("categories")
                ->result_array();

    }

    //確認用のプルダウンの表示
    public function pulldown_C($cid){
        $query = $this->db->get_where('categories', array('categories_id' =>$cid));
        $tmp = $query->row(0, 'array');
        return $tmp['categories_category'];
        
    }

    public function upload($data){
        $time = time();
        $category = $data['category'];
        $contentstitle =$time."_".$data['contentstitle'];
        $contents_description =$data['contentsmemo'];
        $contents_content=$time."_".$data['inputfile'];

        $result = $this->db->insert('contents',array(
            'categories_id' =>$category,
            'contents_title' =>$contentstitle,
            'contents_description' =>$contents_description,
            'contents_content' =>$contents_content,

        ));
        //失敗値はFALSE,成功したらTRUE
        
        if($result){
            return $contents_content;
        } else{
            return false;
        }

    }
}
?>