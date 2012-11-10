<?php

/**
 * This is the model class for table "Client".
 *
 * The followings are the available columns in table 'Client':
 * @property integer $Id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $last_connection_date
 * @property string $creataion_date
 * @property integer $Billing_Account_Id
 * @property integer $Tarif_ID
 */
class Client extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Client the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, email, creataion_date, Billing_Account_Id, Tarif_ID', 'required'),
			array('Billing_Account_Id, Tarif_ID', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, email', 'length', 'max'=>128),
			array('last_connection_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, first_name, last_name, email, last_connection_date, creataion_date, Billing_Account_Id, Tarif_ID', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'billing_Account' => array(self::BELONGS_TO, 'BillingAccount', 'Billing_Account_Id'),
			'tarif' => array(self::BELONGS_TO, 'Tarif', 'Tarif_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'Id',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'last_connection_date' => 'Last Connection Date',
			'creataion_date' => 'Creataion Date',
			'Billing_Account_Id' => 'Billing Account',
			'Tarif_ID' => 'Tarif',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id);

		$criteria->compare('first_name',$this->first_name,true);

		$criteria->compare('last_name',$this->last_name,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('last_connection_date',$this->last_connection_date,true);

		$criteria->compare('creataion_date',$this->creataion_date,true);

		$criteria->compare('Billing_Account_Id',$this->Billing_Account_Id);

		$criteria->compare('Tarif_ID',$this->Tarif_ID);

		return new CActiveDataProvider('Client', array(
			'criteria'=>$criteria,
		));
	}
}