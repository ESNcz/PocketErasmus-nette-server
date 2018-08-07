<?php
/**
 * Created by PhpStorm.
 * User: herald
 * Date: 14-Feb-18
 * Time: 17:30
 */

namespace App\Model;

/**
 * Class BaseLogEntity Base for other log records - not an actual entity.
 * Ground for all log records - id and datetime
 * @package App\Model
 */
class BaseLogEntity{

	/**
	 * @var int $id Unique identifier
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	/**
	 * @var \DateTime
	 * @ORM\Column(type="datetime")
	 */
	protected $datetime;

	/**
	 * @return int
	 */
	public function getId(){
		return $this->id;
	}



}