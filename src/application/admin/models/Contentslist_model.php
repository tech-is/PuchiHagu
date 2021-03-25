<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contentslist_model extends CI_Model{

        public function add($data){
            $category = $data['category'];
            $contentstitle = $data['contentstitle'];
            $contentsmemo = $data['contentsmemo'];
            $inputfile = $data['inputfile'];
            //失敗値はFALSE,成功したら
            $result = $this->db->insert('contents',array(
                'categories_id'=>$category,
                'contents_title'=> $contentstitle,
                'contents_description' =>$contentsmemo,
                'contents_content' =>$inputfile,
            ));
            var_dump($result);
            exit;
            if($result){
                return true;
            } else{
                return false;
            }

        }

}
?>