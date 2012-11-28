<?php
class Form_Bbs_Reply extends Zend_Form
{
    public function __construct ($options = null)
    {
        parent::__construct(null);
        
        $this->setName('form_reply')
             ->setMethod('post')
             ->setAction($options['baseUrl'].'/question/thread/param/' . $options['titleid'] . '-1-T')
             ->addAttribs(array(
                 'style' => 'margin:0px; padding:0px;',
             ));
             
        $this->addElements(array(
            new Zend_Form_Element_Text('title', array(
                'required' => true,
                'label' => '回复主题：',
                'description' => '请在上述文本框中输入回复主题',
                'attribs' => array(
                    'size' => '60',
                    'class' => 'input_pubtitle_form' 
                ),
                'filters' => array(
                    'StringTrim'
                ),
                'validators' => array(
                    array('NotEmpty', false, array('messages' => '·请输入回复主题'))
                ),
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
                'label' => '回复内容：',
                'value' => $options['value'],
                'description' => '请在上述编辑器中输入要回复的内容',
                'attribs' => array(
                    'width'=>'50%',
                    'height'=>'200'
                ),
                'filters' => array(
                     'StringTrim'
                ),
                'validators' => array(
                    array('NotEmpty', true, array('messages' => '·请输入要回复的内容')),
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
            
            new Zend_Form_Element_Hidden('replyid', array(
                'value' => null
            )),
            
            new Zend_Form_Element_Hidden('topage', array(
                'value' => null
            ))
            
        ));  

         
    }
}
