<?php
/**
 * Created by PhpStorm.
 * User: herald
 * Date: 13-Feb-18
 * Time: 19:06
 */

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class LogUserActivityEntity
 * @package App\Model
 *
 * @ORM\Entity
 * @ORM\Table(name="log_user_activity")
 */
class LogUserActivityEntity {

	/**
	 * @var int $id Unique identifier
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	protected $id;

	// todo zmenit typ na DateTime
	/**
	 *
	 * @var string
	 * @ORM\Column(type="datetime")
	 */
	protected $datetime;

	/**
	 * @var UserEntity
	 * @ORM\ManyToOne(targetEntity="\App\Model\UserEntity")
	 */
	protected $user;

	/**
	 * @var int
	 * @ORM\Column(type="integer")
	 */
	protected $action_id;

	/**
	 * @var string
	 * @ORM\Column(type="text", nullable=true)
	 */
	protected $context;

	/**
	 * @return int
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getDatetime(){
		return $this->datetime;
	}

	/**
	 * @param string $datetime
	 */
	public function setDatetime($datetime){
		$this->datetime = $datetime;
	}

	/**
	 * @return UserEntity
	 */
	public function getUser(){
		return $this->user;
	}

	/**
	 * @param UserEntity $user
	 */
	public function setUser($user){
		$this->user = $user;
	}

	/**
	 * @return int
	 */
	public function getActionId(){
		return $this->action_id;
	}

	/**
	 * @param int $action_id
	 */
	public function setActionId($action_id){
		$this->action_id = $action_id;
	}

	/**
	 * @return string
	 */
	public function getContext(){
		return $this->context;
	}

	/**
	 * @param string $context
	 * @ORM\Column(nullable=true)
	 */
	public function setContext($context){
		$this->context = $context;
	}



}