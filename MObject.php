<?
/**
*Êëàññ äëÿ ğàáîòû ñ îáúåêòàìè è åãî ïîëÿìè
*/
class MObject{
	protected $_data = array();
	
	public function __construct($initialData){
		$this->_data = $initialData;
	}
	
	public function setData($key,$value=null){
		if(is_array($key)){
			this->_data = $key; 
		}else{
			this->_data[$key] = $value;
		}
		return this;
	}
	
	public function getData($key=''){
		return ($key) ? $this->_data[$key] : $this->_data;
	}
}