<?php

namespace app\gwc\controller;

use think\Controller;
use think\Request;

class User extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return view();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //接受参数
        $param=$request->param();
        //判断
        $result=$this->validate($param,[
           'name|用户名字'=>'require|max:12',
            'tel|手机号'=>'require|number|max:11'
        ]);
        if(true !== $result){
            // 验证失败 输出错误信息
            return json(['code'=>500,'msg'=>$result,'data'=>[]]);
        }
        //查询数据
        $data=\app\gwc\model\User::where("name",$param['name'])->find();
        if ($data){/*判断  返回前端*/
            cookie("id",$data['id']);
            if ($data['tel']==$param['tel']){
                return json(['code'=>200,'msg'=>'登录成功','data'=>[]]);
            }else{
                return json(['code'=>500,'msg'=>'手机号错误','data'=>[]]);
            }
        }else{
            return json(['code'=>500,'msg'=>'用户名错误','data'=>[]]);
        }
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
