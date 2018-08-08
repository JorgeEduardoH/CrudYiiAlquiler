<?php

/**
 * This is the model class for table "automovil".
 *
 * The followings are the available columns in table 'automovil':
 * @property string $placa_Automovil
 * @property integer $modelo_Automovil
 * @property integer $precioAlquiler_Automovil
 * @property integer $id_gama
 * @property integer $id_TipoVehiculo
 * @property integer $id_Estado
 * @property integer $id_Color
 * @property integer $id_Marca
 */
class Automovil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'automovil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('placa_Automovil, id_TipoVehiculo, id_Estado, id_Color, id_Marca', 'required'),
			array('modelo_Automovil, precioAlquiler_Automovil, id_gama, id_TipoVehiculo, id_Estado, id_Color, id_Marca', 'numerical', 'integerOnly'=>true),
			array('placa_Automovil', 'length', 'max'=>20),
			array('placa_Automovil', 'unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('placa_Automovil, modelo_Automovil, precioAlquiler_Automovil, id_gama, id_TipoVehiculo, id_Estado, id_Color, id_Marca', 'safe', 'on'=>'search'),
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
			'gama'    => array(self::BELONGS_TO, 'Gama',    'id_gama'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'placa_Automovil' => 'Placa Automovil',
			'modelo_Automovil' => 'Modelo Automovil',
			'precioAlquiler_Automovil' => 'Precio Alquiler Automovil',
			'id_gama' => 'Id Gama',
			'id_TipoVehiculo' => 'Id Tipo Vehiculo',
			'id_Estado' => 'Id Estado',
			'id_Color' => 'Id Color',
			'id_Marca' => 'Id Marca',
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

		$criteria->compare('placa_Automovil',$this->placa_Automovil,true);
		$criteria->compare('modelo_Automovil',$this->modelo_Automovil);
		$criteria->compare('precioAlquiler_Automovil',$this->precioAlquiler_Automovil);
		$criteria->compare('id_gama',$this->id_gama);
		$criteria->compare('id_TipoVehiculo',$this->id_TipoVehiculo);
		$criteria->compare('id_Estado',$this->id_Estado);
		$criteria->compare('id_Color',$this->id_Color);
		$criteria->compare('id_Marca',$this->id_Marca);
      


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
   public function searchdisp()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('placa_Automovil',$this->placa_Automovil,true);
		$criteria->compare('modelo_Automovil',$this->modelo_Automovil);
		$criteria->compare('precioAlquiler_Automovil',$this->precioAlquiler_Automovil);
		$criteria->compare('id_gama',$this->id_gama);
		$criteria->compare('id_TipoVehiculo',$this->id_TipoVehiculo);
		$criteria->compare('id_Estado',$this->id_Estado);
		$criteria->compare('id_Color',$this->id_Color);
		$criteria->compare('id_Marca',$this->id_Marca);
      
      $criteria->compare('id_Estado',1);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchalq()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('placa_Automovil',$this->placa_Automovil,true);
		$criteria->compare('modelo_Automovil',$this->modelo_Automovil);
		$criteria->compare('precioAlquiler_Automovil',$this->precioAlquiler_Automovil);
		$criteria->compare('id_gama',$this->id_gama);
		$criteria->compare('id_TipoVehiculo',$this->id_TipoVehiculo);
		$criteria->compare('id_Estado',$this->id_Estado);
		$criteria->compare('id_Color',$this->id_Color);
		$criteria->compare('id_Marca',$this->id_Marca);
      
      $criteria->compare('id_Estado',2);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Automovil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
