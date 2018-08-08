<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $cedula_Cliente
 * @property integer $telefono_Cliente
 * @property string $direccion_Cliente
 * @property string $nombre_Cliente
 * @property integer $precio_Descuento_cliente
 * @property string $fecha_Descuento_cliente
 * @property integer $Cliente_Recomendado
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_Cliente', 'required'),
			array('cedula_Cliente','unique'),
			
			array('cedula_Cliente, telefono_Cliente, precio_Descuento_cliente, Cliente_Recomendado', 'numerical', 'integerOnly'=>true),

			  array('Cliente_Recomendado', 'exist', 'on'=>'update', 'attributeName'=>'Cliente_Recomendado', 'className'=>'Cliente','message'=>'La cedula de este cliente no se encuentra registrada'),

			array('direccion_Cliente, nombre_Cliente', 'length', 'max'=>90),
			array('fecha_Descuento_cliente', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cedula_Cliente, telefono_Cliente, direccion_Cliente, nombre_Cliente, precio_Descuento_cliente, fecha_Descuento_cliente, Cliente_Recomendado', 'safe', 'on'=>'search'),
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
			'cedula_Cliente' => 'Cedula Cliente',
			'telefono_Cliente' => 'Telefono Cliente',
			'direccion_Cliente' => 'Direccion Cliente',
			'nombre_Cliente' => 'Nombre Cliente',
			'precio_Descuento_cliente' => 'Precio Descuento Cliente',
			'fecha_Descuento_cliente' => 'Fecha Descuento Cliente',
			'Cliente_Recomendado' => 'Cliente Recomendado',
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

		$criteria->compare('cedula_Cliente',$this->cedula_Cliente);
		$criteria->compare('telefono_Cliente',$this->telefono_Cliente);
		$criteria->compare('direccion_Cliente',$this->direccion_Cliente,true);
		$criteria->compare('nombre_Cliente',$this->nombre_Cliente,true);
		$criteria->compare('precio_Descuento_cliente',$this->precio_Descuento_cliente);
		$criteria->compare('fecha_Descuento_cliente',$this->fecha_Descuento_cliente,true);
		$criteria->compare('Cliente_Recomendado',$this->Cliente_Recomendado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchrecomendado()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cedula_Cliente',$this->cedula_Cliente);
		$criteria->compare('telefono_Cliente',$this->telefono_Cliente);
		$criteria->compare('direccion_Cliente',$this->direccion_Cliente,true);
		$criteria->compare('nombre_Cliente',$this->nombre_Cliente,true);
		$criteria->compare('precio_Descuento_cliente',$this->precio_Descuento_cliente);
		$criteria->compare('fecha_Descuento_cliente',$this->fecha_Descuento_cliente,true);
		$criteria->compare('Cliente_Recomendado',$this->Cliente_Recomendado);
        
        $criteria->addCondition('Cliente_Recomendado  is not null');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
