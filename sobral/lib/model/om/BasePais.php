<?php


abstract class BasePais extends BaseObject  implements Persistent {


  const PEER = 'PaisPeer';

	
	protected static $peer;

	
	protected $id;

	
	protected $nombre_largo;

	
	protected $nombre_corto;

	
	protected $orden;

	
	protected $collProvincias;

	
	private $lastProvinciaCriteria = null;

	
	protected $collAlumnos;

	
	private $lastAlumnoCriteria = null;

	
	protected $collDocentes;

	
	private $lastDocenteCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	
	public function applyDefaultValues()
	{
		$this->orden = 0;
	}

	
	public function getId()
	{
		return $this->id;
	}

	
	public function getNombreLargo()
	{
		return $this->nombre_largo;
	}

	
	public function getNombreCorto()
	{
		return $this->nombre_corto;
	}

	
	public function getOrden()
	{
		return $this->orden;
	}

	
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PaisPeer::ID;
		}

		return $this;
	} 
	
	public function setNombreLargo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nombre_largo !== $v) {
			$this->nombre_largo = $v;
			$this->modifiedColumns[] = PaisPeer::NOMBRE_LARGO;
		}

		return $this;
	} 
	
	public function setNombreCorto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nombre_corto !== $v) {
			$this->nombre_corto = $v;
			$this->modifiedColumns[] = PaisPeer::NOMBRE_CORTO;
		}

		return $this;
	} 
	
	public function setOrden($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->orden !== $v || $v === 0) {
			$this->orden = $v;
			$this->modifiedColumns[] = PaisPeer::ORDEN;
		}

		return $this;
	} 
	
	public function hasOnlyDefaultValues()
	{
						if (array_diff($this->modifiedColumns, array(PaisPeer::ORDEN))) {
				return false;
			}

			if ($this->orden !== 0) {
				return false;
			}

				return true;
	} 
	
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->nombre_largo = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->nombre_corto = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->orden = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Pais object", $e);
		}
	}

	
	public function ensureConsistency()
	{

	} 
	
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PaisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

				
		$stmt = PaisPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); 
		if ($deep) {  
			$this->collProvincias = null;
			$this->lastProvinciaCriteria = null;

			$this->collAlumnos = null;
			$this->lastAlumnoCriteria = null;

			$this->collDocentes = null;
			$this->lastDocenteCriteria = null;

		} 	}

	
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PaisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			PaisPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PaisPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			PaisPeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PaisPeer::ID;
			}

						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = PaisPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PaisPeer::doUpdate($this, $con);
				}

				$this->resetModified(); 			}

			if ($this->collProvincias !== null) {
				foreach ($this->collProvincias as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collAlumnos !== null) {
				foreach ($this->collAlumnos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDocentes !== null) {
				foreach ($this->collDocentes as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = PaisPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collProvincias !== null) {
					foreach ($this->collProvincias as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collAlumnos !== null) {
					foreach ($this->collAlumnos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDocentes !== null) {
					foreach ($this->collDocentes as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PaisPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNombreLargo();
				break;
			case 2:
				return $this->getNombreCorto();
				break;
			case 3:
				return $this->getOrden();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = PaisPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNombreLargo(),
			$keys[2] => $this->getNombreCorto(),
			$keys[3] => $this->getOrden(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PaisPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNombreLargo($value);
				break;
			case 2:
				$this->setNombreCorto($value);
				break;
			case 3:
				$this->setOrden($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PaisPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNombreLargo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNombreCorto($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setOrden($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PaisPeer::DATABASE_NAME);

		if ($this->isColumnModified(PaisPeer::ID)) $criteria->add(PaisPeer::ID, $this->id);
		if ($this->isColumnModified(PaisPeer::NOMBRE_LARGO)) $criteria->add(PaisPeer::NOMBRE_LARGO, $this->nombre_largo);
		if ($this->isColumnModified(PaisPeer::NOMBRE_CORTO)) $criteria->add(PaisPeer::NOMBRE_CORTO, $this->nombre_corto);
		if ($this->isColumnModified(PaisPeer::ORDEN)) $criteria->add(PaisPeer::ORDEN, $this->orden);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PaisPeer::DATABASE_NAME);

		$criteria->add(PaisPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setNombreLargo($this->nombre_largo);

		$copyObj->setNombreCorto($this->nombre_corto);

		$copyObj->setOrden($this->orden);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach ($this->getProvincias() as $relObj) {
				if ($relObj !== $this) {  					$copyObj->addProvincia($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getAlumnos() as $relObj) {
				if ($relObj !== $this) {  					$copyObj->addAlumno($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDocentes() as $relObj) {
				if ($relObj !== $this) {  					$copyObj->addDocente($relObj->copy($deepCopy));
				}
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PaisPeer();
		}
		return self::$peer;
	}

	
	public function clearProvincias()
	{
		$this->collProvincias = null; 	}

	
	public function initProvincias()
	{
		$this->collProvincias = array();
	}

	
	public function getProvincias($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collProvincias === null) {
			if ($this->isNew()) {
			   $this->collProvincias = array();
			} else {

				$criteria->add(ProvinciaPeer::FK_PAIS_ID, $this->id);

				ProvinciaPeer::addSelectColumns($criteria);
				$this->collProvincias = ProvinciaPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProvinciaPeer::FK_PAIS_ID, $this->id);

				ProvinciaPeer::addSelectColumns($criteria);
				if (!isset($this->lastProvinciaCriteria) || !$this->lastProvinciaCriteria->equals($criteria)) {
					$this->collProvincias = ProvinciaPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastProvinciaCriteria = $criteria;
		return $this->collProvincias;
	}

	
	public function countProvincias(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collProvincias === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(ProvinciaPeer::FK_PAIS_ID, $this->id);

				$count = ProvinciaPeer::doCount($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ProvinciaPeer::FK_PAIS_ID, $this->id);

				if (!isset($this->lastProvinciaCriteria) || !$this->lastProvinciaCriteria->equals($criteria)) {
					$count = ProvinciaPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collProvincias);
				}
			} else {
				$count = count($this->collProvincias);
			}
		}
		return $count;
	}

	
	public function addProvincia(Provincia $l)
	{
		if ($this->collProvincias === null) {
			$this->initProvincias();
		}
		if (!in_array($l, $this->collProvincias, true)) { 			array_push($this->collProvincias, $l);
			$l->setPais($this);
		}
	}

	
	public function clearAlumnos()
	{
		$this->collAlumnos = null; 	}

	
	public function initAlumnos()
	{
		$this->collAlumnos = array();
	}

	
	public function getAlumnos($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlumnos === null) {
			if ($this->isNew()) {
			   $this->collAlumnos = array();
			} else {

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				AlumnoPeer::addSelectColumns($criteria);
				$this->collAlumnos = AlumnoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				AlumnoPeer::addSelectColumns($criteria);
				if (!isset($this->lastAlumnoCriteria) || !$this->lastAlumnoCriteria->equals($criteria)) {
					$this->collAlumnos = AlumnoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAlumnoCriteria = $criteria;
		return $this->collAlumnos;
	}

	
	public function countAlumnos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collAlumnos === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				$count = AlumnoPeer::doCount($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				if (!isset($this->lastAlumnoCriteria) || !$this->lastAlumnoCriteria->equals($criteria)) {
					$count = AlumnoPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collAlumnos);
				}
			} else {
				$count = count($this->collAlumnos);
			}
		}
		return $count;
	}

	
	public function addAlumno(Alumno $l)
	{
		if ($this->collAlumnos === null) {
			$this->initAlumnos();
		}
		if (!in_array($l, $this->collAlumnos, true)) { 			array_push($this->collAlumnos, $l);
			$l->setPais($this);
		}
	}


	
	public function getAlumnosJoinProvincia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlumnos === null) {
			if ($this->isNew()) {
				$this->collAlumnos = array();
			} else {

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				$this->collAlumnos = AlumnoPeer::doSelectJoinProvincia($criteria, $con, $join_behavior);
			}
		} else {
									
			$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

			if (!isset($this->lastAlumnoCriteria) || !$this->lastAlumnoCriteria->equals($criteria)) {
				$this->collAlumnos = AlumnoPeer::doSelectJoinProvincia($criteria, $con, $join_behavior);
			}
		}
		$this->lastAlumnoCriteria = $criteria;

		return $this->collAlumnos;
	}


	
	public function getAlumnosJoinTipodocumento($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlumnos === null) {
			if ($this->isNew()) {
				$this->collAlumnos = array();
			} else {

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				$this->collAlumnos = AlumnoPeer::doSelectJoinTipodocumento($criteria, $con, $join_behavior);
			}
		} else {
									
			$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

			if (!isset($this->lastAlumnoCriteria) || !$this->lastAlumnoCriteria->equals($criteria)) {
				$this->collAlumnos = AlumnoPeer::doSelectJoinTipodocumento($criteria, $con, $join_behavior);
			}
		}
		$this->lastAlumnoCriteria = $criteria;

		return $this->collAlumnos;
	}


	
	public function getAlumnosJoinEstablecimiento($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlumnos === null) {
			if ($this->isNew()) {
				$this->collAlumnos = array();
			} else {

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				$this->collAlumnos = AlumnoPeer::doSelectJoinEstablecimiento($criteria, $con, $join_behavior);
			}
		} else {
									
			$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

			if (!isset($this->lastAlumnoCriteria) || !$this->lastAlumnoCriteria->equals($criteria)) {
				$this->collAlumnos = AlumnoPeer::doSelectJoinEstablecimiento($criteria, $con, $join_behavior);
			}
		}
		$this->lastAlumnoCriteria = $criteria;

		return $this->collAlumnos;
	}


	
	public function getAlumnosJoinCuenta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlumnos === null) {
			if ($this->isNew()) {
				$this->collAlumnos = array();
			} else {

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				$this->collAlumnos = AlumnoPeer::doSelectJoinCuenta($criteria, $con, $join_behavior);
			}
		} else {
									
			$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

			if (!isset($this->lastAlumnoCriteria) || !$this->lastAlumnoCriteria->equals($criteria)) {
				$this->collAlumnos = AlumnoPeer::doSelectJoinCuenta($criteria, $con, $join_behavior);
			}
		}
		$this->lastAlumnoCriteria = $criteria;

		return $this->collAlumnos;
	}


	
	public function getAlumnosJoinConceptobaja($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlumnos === null) {
			if ($this->isNew()) {
				$this->collAlumnos = array();
			} else {

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				$this->collAlumnos = AlumnoPeer::doSelectJoinConceptobaja($criteria, $con, $join_behavior);
			}
		} else {
									
			$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

			if (!isset($this->lastAlumnoCriteria) || !$this->lastAlumnoCriteria->equals($criteria)) {
				$this->collAlumnos = AlumnoPeer::doSelectJoinConceptobaja($criteria, $con, $join_behavior);
			}
		}
		$this->lastAlumnoCriteria = $criteria;

		return $this->collAlumnos;
	}


	
	public function getAlumnosJoinEstadosalumnos($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAlumnos === null) {
			if ($this->isNew()) {
				$this->collAlumnos = array();
			} else {

				$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

				$this->collAlumnos = AlumnoPeer::doSelectJoinEstadosalumnos($criteria, $con, $join_behavior);
			}
		} else {
									
			$criteria->add(AlumnoPeer::FK_PAIS_ID, $this->id);

			if (!isset($this->lastAlumnoCriteria) || !$this->lastAlumnoCriteria->equals($criteria)) {
				$this->collAlumnos = AlumnoPeer::doSelectJoinEstadosalumnos($criteria, $con, $join_behavior);
			}
		}
		$this->lastAlumnoCriteria = $criteria;

		return $this->collAlumnos;
	}

	
	public function clearDocentes()
	{
		$this->collDocentes = null; 	}

	
	public function initDocentes()
	{
		$this->collDocentes = array();
	}

	
	public function getDocentes($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocentes === null) {
			if ($this->isNew()) {
			   $this->collDocentes = array();
			} else {

				$criteria->add(DocentePeer::FK_PAIS_ID, $this->id);

				DocentePeer::addSelectColumns($criteria);
				$this->collDocentes = DocentePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DocentePeer::FK_PAIS_ID, $this->id);

				DocentePeer::addSelectColumns($criteria);
				if (!isset($this->lastDocenteCriteria) || !$this->lastDocenteCriteria->equals($criteria)) {
					$this->collDocentes = DocentePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastDocenteCriteria = $criteria;
		return $this->collDocentes;
	}

	
	public function countDocentes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collDocentes === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(DocentePeer::FK_PAIS_ID, $this->id);

				$count = DocentePeer::doCount($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DocentePeer::FK_PAIS_ID, $this->id);

				if (!isset($this->lastDocenteCriteria) || !$this->lastDocenteCriteria->equals($criteria)) {
					$count = DocentePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collDocentes);
				}
			} else {
				$count = count($this->collDocentes);
			}
		}
		return $count;
	}

	
	public function addDocente(Docente $l)
	{
		if ($this->collDocentes === null) {
			$this->initDocentes();
		}
		if (!in_array($l, $this->collDocentes, true)) { 			array_push($this->collDocentes, $l);
			$l->setPais($this);
		}
	}


	
	public function getDocentesJoinTipodocumento($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocentes === null) {
			if ($this->isNew()) {
				$this->collDocentes = array();
			} else {

				$criteria->add(DocentePeer::FK_PAIS_ID, $this->id);

				$this->collDocentes = DocentePeer::doSelectJoinTipodocumento($criteria, $con, $join_behavior);
			}
		} else {
									
			$criteria->add(DocentePeer::FK_PAIS_ID, $this->id);

			if (!isset($this->lastDocenteCriteria) || !$this->lastDocenteCriteria->equals($criteria)) {
				$this->collDocentes = DocentePeer::doSelectJoinTipodocumento($criteria, $con, $join_behavior);
			}
		}
		$this->lastDocenteCriteria = $criteria;

		return $this->collDocentes;
	}


	
	public function getDocentesJoinProvincia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(PaisPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDocentes === null) {
			if ($this->isNew()) {
				$this->collDocentes = array();
			} else {

				$criteria->add(DocentePeer::FK_PAIS_ID, $this->id);

				$this->collDocentes = DocentePeer::doSelectJoinProvincia($criteria, $con, $join_behavior);
			}
		} else {
									
			$criteria->add(DocentePeer::FK_PAIS_ID, $this->id);

			if (!isset($this->lastDocenteCriteria) || !$this->lastDocenteCriteria->equals($criteria)) {
				$this->collDocentes = DocentePeer::doSelectJoinProvincia($criteria, $con, $join_behavior);
			}
		}
		$this->lastDocenteCriteria = $criteria;

		return $this->collDocentes;
	}

	
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collProvincias) {
				foreach ((array) $this->collProvincias as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collAlumnos) {
				foreach ((array) $this->collAlumnos as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDocentes) {
				foreach ((array) $this->collDocentes as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} 
		$this->collProvincias = null;
		$this->collAlumnos = null;
		$this->collDocentes = null;
	}

} 