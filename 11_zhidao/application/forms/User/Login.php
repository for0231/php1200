<?php
/**
 * 用户登录表单
 *
 */
class Form_User_Login extends Zend_Form  //定义用户登录表单，继承自Zend_Form
{
    public function __construct ($options = null)
    {
        parent::__construct($options);    //调用父类构造函数
        
        $this->setName('form_login')      //表单名称
             ->setMethod('post')   //表单提交方法
             ->setAction($options['baseUrl'] . '/user/login')   //表单提交地址
             ->addAttribs(array(  
                 'style' => 'margin:0px; padding:0px'          //表单样式   
             )); 
         $this->addElements(array(     //为表单增加用户昵称录入文本框
             new Zend_Form_Element_Text('netname', array(
                 'required' => true,    //指定该表单元素是必要的
                 'label' => '　　昵称：',          //元素标签        
                 'attribs' => array(        //元素属性
                     'class' => 'input_login_form',
                     'style' => 'position:absolute; left:32px; top:0px; width:180px; height:18px; line-height:18px'
                 ),
                 'filters' => array('StringTrim'),    //过滤掉首尾空格
                 'validators' => array(
                     array('NotEmpty', true, array('messages' => '·请输入登录昵称'))    //用户昵称非空验证
                 ),
                 'decorators' => array(       //元素装饰器
                     'ViewHelper',
                     array('HtmlTag', array('tag'=>'dd')),
                     array('Label', array('tag'=>'dt')) 
                  )
             )),
             new Zend_Form_Element_Password('password', array(   //为表单增加用户密码录入文本框
                 'required' => true,      //指定该表单元素是必要的
                 'label' => '　　密码：',         //元素标签
                 'attribs' => array(    //密码框属性
                     'class' => 'input_login_form',
                     'style' => 'position:absolute; left:32px; top:0px; width:180px; height:18px; line-height:18px;'
                 ),
                 'filters' => array('StringTrim'),   //过滤掉首尾空格
                 'validators' => array(    //登录密码非空验证
                     array('NotEmpty', true, array('messages' => '·请输入登录密码')) 
                 ),
                 'decorators' => array(       //元素装饰器
                     'ViewHelper',
                     array('HtmlTag', array('tag' => 'dd')),
                     array('Label', array('tag' => 'dt'))  
                  ) 
             )),
             new Plugin_Form_Element_Vcode('vcode', array(  //验证码
                 'required' => true,   //指定该表单元素是必要的
                 'label' => '　　验证码：',    //元素标签
                 'attribs' => array(     //验证码属性
                     'textClass' => 'input_login_form',
                     'textStyle' =>'position:absolute; left:32px; top:0px; width:60px; height:18px; line-height:18px; ',
                     'imageStyle' =>'position:absolute; left:100px; top:0px;',
                     'spanStyle' => 'position:absolute; left:42px; top:37px; height:18px',
                     'aClass' => 'a4', 
                     'functionName' => 'changeValidateCode()'
                 ),
                 'filters' => array('StringTrim'),  //过滤掉首尾空格
                 'validators' => array(
                     array('NotEmpty', true, array('messages' => '·请输入验证码')),  //验证码非空验证
                     new Plugin_Validate_VcodeRight()   //验证码正确性验证
                 ),
                 'decorators' => array(   //元素装饰器
                     'ViewHelper',
                     array('HtmlTag', array('tag' => 'dd', 'style' => 'height:55px;')),
                     array('Label', array('tag' => 'dt'))  
                  ) 
             )),
             new Zend_Form_Element_Image('submitImage', array(   //提交图片按钮
                'required' => false,    //该元素值可为空
                'label' => '',
                'src' => $options['baseUrl'] . '/img/btn_login.gif',  //图片地址
                'attribs' => array(
                    'style' => 'position:absolute; left:30px; top:0px;' 
                )
             ))
         ));       
    }
}