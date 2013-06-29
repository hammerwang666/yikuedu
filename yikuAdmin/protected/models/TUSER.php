<?php

/**
 * This is the model class for table "t_user".
 *
 * The followings are the available columns in table 't_user':
 * @property string $FEE
 * @property string $ACCOMODATION
 * @property string $SINGUP_PART
 * @property string $SIGNUP_CLASS
 * @property string $SIGNUP_TIME
 * @property string $ADD3
 * @property string $ADD2
 * @property string $ADD1
 * @property string $REMARK
 * @property string $PHOTO
 * @property string $EVALUATE
 * @property string $HOME_ADDRESS
 * @property string $PARENT_REL
 * @property string $PARENT_QQ
 * @property string $PARENT_PHONE
 * @property string $PARENT_COMPANY
 * @property string $PARENT_NAME
 * @property string $CLASS
 * @property string $GRADE
 * @property string $CURRENT_SCHOOL
 * @property string $QQ
 * @property string $WEIBO
 * @property string $PHONE
 * @property string $IDCARD
 * @property string $BIRTHDAY
 * @property string $SEX
 * @property string $PASSWORD
 * @property string $NICKNAME
 * @property string $USERNAME
 * @property integer $ID
 */
class TUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TUser the static model class
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
		return 't_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FEE, ACCOMODATION, SINGUP_PART, SIGNUP_CLASS, SIGNUP_TIME, ADD3, ADD2, ADD1, PHOTO, HOME_ADDRESS, PARENT_REL, PARENT_QQ, PARENT_PHONE, PARENT_COMPANY, PARENT_NAME, CLASS, GRADE, CURRENT_SCHOOL, QQ, WEIBO, PHONE, IDCARD, BIRTHDAY, PASSWORD, NICKNAME, USERNAME', 'length', 'max'=>255),
			array('REMARK, EVALUATE', 'length', 'max'=>2000),
			array('SEX', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('FEE, ACCOMODATION, SINGUP_PART, SIGNUP_CLASS, SIGNUP_TIME, ADD3, ADD2, ADD1, REMARK, PHOTO, EVALUATE, HOME_ADDRESS, PARENT_REL, PARENT_QQ, PARENT_PHONE, PARENT_COMPANY, PARENT_NAME, CLASS, GRADE, CURRENT_SCHOOL, QQ, WEIBO, PHONE, IDCARD, BIRTHDAY, SEX, PASSWORD, NICKNAME, USERNAME, ID', 'safe', 'on'=>'search'),
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
			'FEE' => '交费情况',
			'ACCOMODATION' => '住宿情况',
			'SINGUP_PART' => '所属部门',
			'SIGNUP_CLASS' => '报读班别',
			'SIGNUP_TIME' => '报读时间',
			'ADD3' => 'Add3',
			'ADD2' => 'Add2',
			'ADD1' => 'Add1',
			'REMARK' => '备注',
			'PHOTO' => '照片',
			'EVALUATE' => '教师评估',
			'HOME_ADDRESS' => '家庭住址',
			'PARENT_REL' => '家长关系',
			'PARENT_QQ' => '家长QQ',
			'PARENT_PHONE' => '家长电话',
			'PARENT_COMPANY' => '家长单位',
			'PARENT_NAME' => '家长姓名',
			'CLASS' => '现读班级',
			'GRADE' => '现读年级',
			'CURRENT_SCHOOL' => '现读学校',
			'QQ' => 'QQ',
			'WEIBO' => '微博',
			'PHONE' => '手机号',
			'IDCARD' => '身份证号',
			'BIRTHDAY' => '生日',
			'SEX' => '性别',
			'PASSWORD' => '密码',
			'NICKNAME' => '昵称',
			'USERNAME' => '姓名',
			'ID' => '编号',
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

		$criteria->compare('FEE',$this->FEE,true);
		$criteria->compare('ACCOMODATION',$this->ACCOMODATION,true);
		$criteria->compare('SINGUP_PART',$this->SINGUP_PART,true);
		$criteria->compare('SIGNUP_CLASS',$this->SIGNUP_CLASS,true);
		$criteria->compare('SIGNUP_TIME',$this->SIGNUP_TIME,true);
		$criteria->compare('ADD3',$this->ADD3,true);
		$criteria->compare('ADD2',$this->ADD2,true);
		$criteria->compare('ADD1',$this->ADD1,true);
		$criteria->compare('REMARK',$this->REMARK,true);
		$criteria->compare('PHOTO',$this->PHOTO,true);
		$criteria->compare('EVALUATE',$this->EVALUATE,true);
		$criteria->compare('HOME_ADDRESS',$this->HOME_ADDRESS,true);
		$criteria->compare('PARENT_REL',$this->PARENT_REL,true);
		$criteria->compare('PARENT_QQ',$this->PARENT_QQ,true);
		$criteria->compare('PARENT_PHONE',$this->PARENT_PHONE,true);
		$criteria->compare('PARENT_COMPANY',$this->PARENT_COMPANY,true);
		$criteria->compare('PARENT_NAME',$this->PARENT_NAME,true);
		$criteria->compare('CLASS',$this->CLASS,true);
		$criteria->compare('GRADE',$this->GRADE,true);
		$criteria->compare('CURRENT_SCHOOL',$this->CURRENT_SCHOOL,true);
		$criteria->compare('QQ',$this->QQ,true);
		$criteria->compare('WEIBO',$this->WEIBO,true);
		$criteria->compare('PHONE',$this->PHONE,true);
		$criteria->compare('IDCARD',$this->IDCARD,true);
		$criteria->compare('BIRTHDAY',$this->BIRTHDAY,true);
		$criteria->compare('SEX',$this->SEX,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('NICKNAME',$this->NICKNAME,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('ID',$this->ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}