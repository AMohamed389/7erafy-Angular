<?php
/**
 * Class that operate on table 'serv'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class ServMySqlDAO implements ServDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ServMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM serv WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM serv';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM serv ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param serv primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM serv WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ServMySql serv
 	 */
	public function insert($serv){
		$sql = 'INSERT INTO serv (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, SERV_NAME, SERV_TYPE, PRICE_FROM, PRICE_TO, SERV_RATE, SERV_TECH_CNT, SERV_STAT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($serv->cREATED);
		$sqlQuery->set($serv->cREATEDBY);
		$sqlQuery->set($serv->lASTUPD);
		$sqlQuery->set($serv->lASTUPDBY);
		$sqlQuery->set($serv->sERVNAME);
		$sqlQuery->set($serv->sERVTYPE);
		$sqlQuery->setNumber($serv->pRICEFROM);
		$sqlQuery->setNumber($serv->pRICETO);
		$sqlQuery->setNumber($serv->sERVRATE);
		$sqlQuery->setNumber($serv->sERVTECHCNT);
		$sqlQuery->set($serv->sERVSTAT);

		$id = $this->executeInsert($sqlQuery);	
		$serv->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ServMySql serv
 	 */
	public function update($serv){
		$sql = 'UPDATE serv SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, SERV_NAME = ?, SERV_TYPE = ?, PRICE_FROM = ?, PRICE_TO = ?, SERV_RATE = ?, SERV_TECH_CNT = ?, SERV_STAT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($serv->cREATED);
		$sqlQuery->set($serv->cREATEDBY);
		$sqlQuery->set($serv->lASTUPD);
		$sqlQuery->set($serv->lASTUPDBY);
		$sqlQuery->set($serv->sERVNAME);
		$sqlQuery->set($serv->sERVTYPE);
		$sqlQuery->setNumber($serv->pRICEFROM);
		$sqlQuery->setNumber($serv->pRICETO);
		$sqlQuery->setNumber($serv->sERVRATE);
		$sqlQuery->setNumber($serv->sERVTECHCNT);
		$sqlQuery->set($serv->sERVSTAT);

		$sqlQuery->setNumber($serv->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM serv';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM serv WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM serv WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM serv WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM serv WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySERVNAME($value){
		$sql = 'SELECT * FROM serv WHERE SERV_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySERVTYPE($value){
		$sql = 'SELECT * FROM serv WHERE SERV_TYPE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPRICEFROM($value){
		$sql = 'SELECT * FROM serv WHERE PRICE_FROM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPRICETO($value){
		$sql = 'SELECT * FROM serv WHERE PRICE_TO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySERVRATE($value){
		$sql = 'SELECT * FROM serv WHERE SERV_RATE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySERVTECHCNT($value){
		$sql = 'SELECT * FROM serv WHERE SERV_TECH_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySERVSTAT($value){
		$sql = 'SELECT * FROM serv WHERE SERV_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM serv WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM serv WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM serv WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM serv WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySERVNAME($value){
		$sql = 'DELETE FROM serv WHERE SERV_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySERVTYPE($value){
		$sql = 'DELETE FROM serv WHERE SERV_TYPE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPRICEFROM($value){
		$sql = 'DELETE FROM serv WHERE PRICE_FROM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPRICETO($value){
		$sql = 'DELETE FROM serv WHERE PRICE_TO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySERVRATE($value){
		$sql = 'DELETE FROM serv WHERE SERV_RATE = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySERVTECHCNT($value){
		$sql = 'DELETE FROM serv WHERE SERV_TECH_CNT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySERVSTAT($value){
		$sql = 'DELETE FROM serv WHERE SERV_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ServMySql 
	 */
	protected function readRow($row){
		$serv = new Serv();
		
		$serv->iD = $row['ID'];
		$serv->cREATED = $row['CREATED'];
		$serv->cREATEDBY = $row['CREATED_BY'];
		$serv->lASTUPD = $row['LAST_UPD'];
		$serv->lASTUPDBY = $row['LAST_UPD_BY'];
		$serv->sERVNAME = $row['SERV_NAME'];
		$serv->sERVTYPE = $row['SERV_TYPE'];
		$serv->pRICEFROM = $row['PRICE_FROM'];
		$serv->pRICETO = $row['PRICE_TO'];
		$serv->sERVRATE = $row['SERV_RATE'];
		$serv->sERVTECHCNT = $row['SERV_TECH_CNT'];
		$serv->sERVSTAT = $row['SERV_STAT'];

		return $serv;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return ServMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>