<?php

/**
 * This is the model class for table "Vendedor_telefonos".
 *
 * The followings are the available columns in table 'Vendedor_telefonos':
 * @property integer $id_vendedor_telefonos
 * @property integer $cedula_Vendedor
 * @property integer $telefono_Vendedor_telefonos
 */
class VendedorTelefonos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Vendedor_telefonos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_Vendedor', 'required'),
			array('cedula_Vendedor, telefono_Vendedor_telefonos', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_vendedor_telefonos, cedula_Vendedor, telefono_Vendedor_telefonos', 'safe', 'on'=>'search'),
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
			'id_vendedor_telefonos' => 'Id Vendedor Telefonos',
			'cedula_Vendedor' => 'Cedula Vendedor',
			'telefono_Vendedor_telefonos' => 'Telefono Vendedor Telefonos',
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

		$criteria->compare('id_vendedor_telefonos',$this->id_vendedor_telefonos);
		$criteria->compare('cedula_Vendedor',$this->cedula_Vendedor);
		$criteria->compare('telefono_Vendedor_telefonos',$this->telefono_Vendedor_telefonos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VendedorTelefonos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
