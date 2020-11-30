<?php

namespace app\gwc\controller;

use think\Controller;
use think\Request;

class Goods extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($id)
    {
      echo  $cookie=  cookie("id");
        if (empty($cookie)){
           return $this->success("请先登录","gwc/User/index");
        }
        if (!is_numeric($id)){
            return redirect("gwc/User/index");
        }
        $data=\app\gwc\model\Goods::where('id',$id)->find()->toArray();
//        print_r($data);
        return view("index",['data'=>$data]);
    }

    /**
     * 商品展示
     *
     * @return \think\Response
     */
    public function goods()
    {
      echo  cookie("id");
        //查询商品表
        $data=\app\gwc\model\Goods::select();
        return view("goods",['data'=>$data]);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
