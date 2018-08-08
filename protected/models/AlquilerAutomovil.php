<?php

/**
 * This is the model class for table "alquiler_automovil".
 *
 * The followings are the available columns in table 'alquiler_automovil':
 * @property integer $id_Alquiler_Automovil
 * @property integer $id_Automovil
 * @property integer $id_Alquiler
 * @property integer $galones_Alquiler_Automovil
 * @property integer $precio_Alquiler_Automovil
 */
class AlquilerAutomovil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alquiler_automovil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_Automovil, id_Alquiler', 'required'),
			array('id_Automovil, id_Alquiler, galones_Alquiler_Automovil, precio_Alquiler_Automovil', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Alquiler_Automovil, id_Automovil, id_Alquiler, galones_Alquiler_Automovil, precio_Alquiler_Automovil', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Alquiler_Automovil' => 'Id Alquiler Automovil',
			'id_Automovil' => 'Id Automovil',
			'id_Alquiler' => 'Id Alquiler',
			'galones_Alquiler_Automovil' => 'Galones Alquiler Automovil',
			'precio_Alquiler_Automovil' => 'Precio Alquiler Automovil',
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

		$criteria->compare('id_Alquiler_Automovil',$this->id_Alquiler_Automovil);
		$criteria->compare('id_Automovil',$this->id_Automovil);
		$criteria->compare('id_Alquiler',$this->id_Alquiler);
		$criteria->compare('galones_Alquiler_Automovil',$this->galones_Alquiler_Automovil);
		$criteria->compare('precio_Alquiler_Automovil',$this->precio_Alquiler_Automovil);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AlquilerAutomovil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
