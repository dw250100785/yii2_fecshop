<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
namespace fecshop\services;
use Yii;
use yii\base\InvalidValueException;
use yii\base\InvalidConfigException;
use fec\helpers\CSession;
/**
 * Order services
 * @author Terry Zhao <2358269014@qq.com>
 * @since 1.0
 */
class Order extends Service
{
	
	protected $orderStatus = [
		'pending','processing'
	];
	
	/**
	 * get all order collection
	 */
	protected function actionGetOrderList(){
		
		
	}
	
	/**
	 * get order list by customer account id.
	 */
	protected function actionGetAccountOrderList(){
		
		
	}
	/**
	 * get order list by customer account id.
	 */
	protected function actionChangeOrderStatus(){
		
		
	}
	
	/**
	 * get order by Id.
	 */
	protected function actionGetOrderById(){
		
	}
	
	
	
	
	
}