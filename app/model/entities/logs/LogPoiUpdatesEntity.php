<?php
/**
 * Created by PhpStorm.
 * User: herald
 * Date: 14-Feb-18
 * Time: 17:12
 */

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class LogDataActivityEntity
 * package App\Model
 *
 * @ORM\Entity
 * @ORM\Table(name="log_data_activity")
 */
class LogPoiUpdatesEntity extends BaseLogEntity{

	/**
	 * @var PoiEntity
	 * @ORM\ManyToOne(targetEntity="\App\Model\PoiEntity")
	 */
	protected $item;
}