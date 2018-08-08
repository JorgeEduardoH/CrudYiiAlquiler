<?php

/**
 * This is the model class for table "alquiler".
 *
 * The followings are the available columns in table 'alquiler':
 * @property integer $id_Alquiler
 * @property string $fechaFinal_Alquiler
 * @property string $fechaInicio_Alquiler
 * @property integer $id_Sucursal
 * @property integer $cedula_Vendedor
 * @property integer $cedula_Cliente
 */
class Alquiler extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public function tableName()
	{
		return 'alquiler';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' id_Sucursal, cedula_Vendedor, cedula_Cliente', 'required'),
			array('id_Alquiler, id_Sucursal, cedula_Vendedor, cedula_Cliente', 'numerical', 'integerOnly'=>true),

          array('cedula_Cliente', 'exist', 'on'=>'insert', 'attributeName'=>'cedula_Cliente', 'className'=>'Cliente','message'=>'La cedula de este cliente no se encuentra registrada'),
          array('cedula_Cliente', 'exist', 'on'=>'update', 'attributeName'=>'cedula_Cliente', 'className'=>'Cliente','message'=>'La cedula de este cliente no se encuentra registrada'),


			array('fechaFinal_Alquiler, fechaInicio_Alquiler', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Alquiler, fechaFinal_Alquiler, fechaInicio_Alquiler, id_Sucursal, cedula_Vendedor, cedula_Cliente', 'safe', 'on'=>'search'),
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
			'vehiculos'=>array(self::HAS_MANY,'alquilerAutomovil','id_Alquiler'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Alquiler' => 'Id Alquiler',
			'fechaFinal_Alquiler' => 'Fecha Final Alquiler',
			'fechaInicio_Alquiler' => 'Fecha Inicio Alquiler',
			'id_Sucursal' => 'Id Sucursal',
			'cedula_Vendedor' => 'Cedula Vendedor',
			'cedula_Cliente' => 'Cedula Cliente',
			'id_Alquiler'=>'id_Alquiler'
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

		$criteria->compare('id_Alquiler',$this->id_Alquiler);
		$criteria->compare('fechaFinal_Alquiler',$this->fechaFinal_Alquiler,true);
		$criteria->compare('fechaInicio_Alquiler',$this->fechaInicio_Alquiler,true);
		$criteria->compare('id_Sucursal',$this->id_Sucursal);
		$criteria->compare('cedula_Vendedor',$this->cedula_Vendedor);
		$criteria->compare('cedula_Cliente',$this->cedula_Cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alquiler the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
