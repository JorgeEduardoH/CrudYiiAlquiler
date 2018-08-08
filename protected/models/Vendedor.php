<?php

/**
 * This is the model class for table "vendedor".
 *
 * The followings are the available columns in table 'vendedor':
 * @property integer $cedula_Vendedor
 * @property string $direccion_Vendedor
 * @property string $nombre_Vendedor
 * @property integer $id_Sucursal
 * @property integer $id_user
 * @property string $clave
 * @property string $email
 */
class Vendedor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vendedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_Vendedor, id_Sucursal', 'required'),
			array('cedula_Vendedor', 'unique'),
			
			array('cedula_Vendedor, id_Sucursal, id_user', 'numerical', 'integerOnly'=>true),
			array('direccion_Vendedor, nombre_Vendedor', 'length', 'max'=>90),
			array('clave', 'length', 'max'=>40),
			array('email', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula_Vendedor, direccion_Vendedor, nombre_Vendedor, id_Sucursal, id_user, clave, email', 'safe', 'on'=>'search'),
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
			'telefonos'=>array(self::HAS_MANY,'VendedorTelefonos','cedula_Vendedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cedula_Vendedor' => 'Cedula Vendedor',
			'direccion_Vendedor' => 'Direccion Vendedor',
			'nombre_Vendedor' => 'Nombre Vendedor',
			'id_Sucursal' => 'Id Sucursal',
			'id_user' => 'Id User',
			'clave' => 'Clave',
			'email' => 'Email',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cedula_Vendedor',$this->cedula_Vendedor);
		$criteria->compare('direccion_Vendedor',$this->direccion_Vendedor,true);
		$criteria->compare('nombre_Vendedor',$this->nombre_Vendedor,true);
		$criteria->compare('id_Sucursal',$this->id_Sucursal);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vendedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
