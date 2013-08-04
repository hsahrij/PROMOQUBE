<?php
class Subscriber extends CActiveRecord
{
	/**
	 * @var integer ID of this record
	 * @soap
	 */
	public $id;
	/**
	 * @var string name
	 * @soap
	 */
	public $name;
	/**
	 * @var string name
	 * @soap
	 */
	public $email;

	/**
	 * @var string phone number
	 * @soap
	 */
	public $phone;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{subscriber}}';
	}    
}