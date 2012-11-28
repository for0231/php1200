<?php
class Form_Bbs_Pubtitle extends Zend_Form
{
    public function __construct ($options = null)
    {
        parent::__construct(null);
        
        $this->setName('form_pubtitle')
             ->setMethod('post')
             ->setAction($options['baseUrl'].'/question/pubtitle')
             ->addAttribs(array(
                 'enctype' => 'multipart/form-data',
                 'style' => 'margin:0px; padding:0px;',
             ));
             
        $this->addElements(array(
            new Zend_Form_Element_Text('title', array(
                'required' => true,
                'label' => '主题：',
                'description' => '请在上述文本框中输入主题',
                'attribs' => array(
                    'size' => '60',
                    'class' => 'input_pubtitle_form' 
                ),
                'filters' => array(
                    'StringTrim'
                ),
                'validators' => array(
                    array('NotEmpty', false, array('messages' => '·请输入主题'))
                ),
                'decorators' => array(
                    'ViewHelper',
                    //'Errors',
                    array('Description', array('tag' => 'dt')),
                    array('HtmlTag', array('tag' => 'dd')),
                    array('Label', array('tag' => 'dt'))
                )
            )),    
        
            new Zend_Form_Element_Select('bbstypeid', array(
                'required' => true,
                'label' => '类别：',
                'value' => $options['bbstypeid'],
                'description' => '请选择主题所属版块',
                'attribs' => array(),
                'validators' => array(
                    array('NotEmpty', false, array('messages' => '·请选择主题所属于版块')),
                ),
                'multiOptions' => $options['multiOptions'],
                'decorators' => array(
                    'ViewHelper',
                    //'Errors',
                    array('Description', array('tag' => 'dt')),
                    array('HtmlTag', array('tag' => 'dd')),
                    array('Label', array('tag' => 'dt'))
                )
            )),  
            
            new Plugin_Form_Element_Editor('content', array(
                'required' => true,
                'label' => '内容：',
                'value' => '',
                'description' => '请在上述编辑器中输入要发表的内容',
                'attribs' => array(
                    'width'=>'50%',
                    'height'=>'200'
                ),
                'filters' => array(
                     'StringTrim'
                ),
                'validators' => array(
                    array('NotEmpty', true, array('messages' => '·请输入要发表的内容')),
                    new Plugin_Validate_EditorEmpty()
                ),
                'decorators' => array(
                    'ViewHelper',
                   // 'Errors',
                    array('Description', array('tag' => 'dt')),
                    array('HtmlTag', array('tag' => 'dd') ),
                    array('Label', array('tag' => 'dt'))
                )

             )),
             
            new Zend_Form_Element_File('file1', array(       //文件选择域
                'required' => false,   //指定文件上传域并非必要
                'label' => '附件：',    //标签
                'maxFileSize' => '30000000',     //上传文件大小
                'description' => '请选择要上传的附件',       //描述
                'attribs' => array(              //文件上传域属性
                    'size' => '60',            
                    'class' => 'input_pubtitle_form' 
                ),
                'validators' => array(        //非空验证
                    array('NotEmpty', false, array('messages' => '请输入内容'))
                ),
                'decorators' => array(      //装饰器
                    'File',
                    array('Description', array('tag' => 'dt')),
                    array('HtmlTag', array('tag' => 'dd') ),
                    array('Label', array('tag' => 'dt'))
                )
            )),  
            
            new Plugin_Form_Element_Vcode('vcode', array(
             'required' => true,
             'label' => '验证码：',
             'description' => '请将图中所显示的内容输入到上述文本框中',
             'attribs' => array(
                 'textClass' => 'input_pubtitle_form',
                 'textStyle' =>'position:absolute; left:0px; top:13px; width:60px;',
                 'imageStyle' =>'position:absolute; left:80px; top:0px;',
                 'spanStyle' => 'position:absolute; left:0px; top:37px; height:18px',
                 'aClass' => 'a4', 
                 'functionName' => 'changeValidateCode()'
             ),
             'filters' => array(
                 'StringTrim'
             ),
             'validators' => array(
                 array('NotEmpty', true, array('messages' => '·请输入验证码')),
                 new Plugin_Validate_VcodeRight() 
             ),
             'decorators' => array(
                 'ViewHelper',
                 //'Errors',
                 array('Description', array('tag' => 'dt')),
                 array('HtmlTag', array('tag' => 'dd', 'style' => 'width:100%; height:55px; position:relative; clear:both; ')),
                 array('Label', array('tag' => 'dt'))  
              ) 
            )),
            
            
            new Zend_Form_Element_Button('submitButton', array(
                 'label' => '',
                 'attribs' => array(
                     'onclick' => 'submitFun()',
                     'style' => 'width:106px; height:28px; border:0px; cursor:pointer; background:url('.$options['baseUrl'] . '/img/btn_pubnote.gif'.')'
                 ),
                 'decorators' => array(
                     'ViewHelper',
                     array('HtmlTag', array('tag' => 'dd') ),
                     array('Label', array('tag' => 'dt'))
                )
            )),
            
            new Zend_Form_Element_Hidden('titleid', array(
                'value' => $options['titleid']
            ))
        ));  
    }
}
