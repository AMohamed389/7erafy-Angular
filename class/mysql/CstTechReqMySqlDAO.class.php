<?php
/**
 * Class that operate on table 'cst_tech_req'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class CstTechReqMySqlDAO implements CstTechReqDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return CstTechReqMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cst_tech_req WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cst_tech_req';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cst_tech_req ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cstTechReq primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM cst_tech_req WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstTechReqMySql cstTechReq
 	 */
	public function insert($cstTechReq){
		$sql = 'INSERT INTO cst_tech_req (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, CST_ID, SERV_ID, TECH_ID, PRICE_FROM, PRICE_TO, CITY_ID, STATE_ID, COUNTRY_ID, REQ_STAT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstTechReq->cREATED);
		$sqlQuery->set($cstTechReq->cREATEDBY);
		$sqlQuery->set($cstTechReq->lASTUPD);
		$sqlQuery->set($cstTechReq->lASTUPDBY);
		$sqlQuery->setNumber($cstTechReq->cSTID);
		$sqlQuery->setNumber($cstTechReq->sERVID);
		$sqlQuery->setNumber($cstTechReq->tECHID);
		$sqlQuery->setNumber($cstTechReq->pRICEFROM);
		$sqlQuery->setNumber($cstTechReq->pRICETO);
		$sqlQuery->setNumber($cstTechReq->cITYID);
		$sqlQuery->setNumber($cstTechReq->sTATEID);
		$sqlQuery->setNumber($cstTechReq->cOUNTRYID);
		$sqlQuery->set($cstTechReq->rEQSTAT);

		$id = $this->executeInsert($sqlQuery);	
		$cstTechReq->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstTechReqMySql cstTechReq
 	 */
	public function update($cstTechReq){
		$sql = 'UPDATE cst_tech_req SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, CST_ID = ?, SERV_ID = ?, TECH_ID = ?, PRICE_FROM = ?, PRICE_TO = ?, CITY_ID = ?, STATE_ID = ?, COUNTRY_ID = ?, REQ_STAT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cstTechReq->cREATED);
		$sqlQuery->set($cstTechReq->cREATEDBY);
		$sqlQuery->set($cstTechReq->lASTUPD);
		$sqlQuery->set($cstTechReq->lASTUPDBY);
		$sqlQuery->setNumber($cstTechReq->cSTID);
		$sqlQuery->setNumber($cstTechReq->sERVID);
		$sqlQuery->setNumber($cstTechReq->tECHID);
		$sqlQuery->setNumber($cstTechReq->pRICEFROM);
		$sqlQuery->setNumber($cstTechReq->pRICETO);
		$sqlQuery->setNumber($cstTechReq->cITYID);
		$sqlQuery->setNumber($cstTechReq->sTATEID);
		$sqlQuery->setNumber($cstTechReq->cOUNTRYID);
		$sqlQuery->set($cstTechReq->rEQSTAT);

		$sqlQuery->setNumber($cstTechReq->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cst_tech_req';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCSTID($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySERVID($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE SERV_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTECHID($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPRICEFROM($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE PRICE_FROM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPRICETO($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE PRICE_TO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCITYID($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE CITY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySTATEID($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE STATE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCOUNTRYID($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE COUNTRY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByREQSTAT($value){
		$sql = 'SELECT * FROM cst_tech_req WHERE REQ_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM cst_tech_req WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM cst_tech_req WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM cst_tech_req WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM cst_tech_req WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCSTID($value){
		$sql = 'DELETE FROM cst_tech_req WHERE CST_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySERVID($value){
		$sql = 'DELETE FROM cst_tech_req WHERE SERV_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTECHID($value){
		$sql = 'DELETE FROM cst_tech_req WHERE TECH_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPRICEFROM($value){
		$sql = 'DELETE FROM cst_tech_req WHERE PRICE_FROM = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPRICETO($value){
		$sql = 'DELETE FROM cst_tech_req WHERE PRICE_TO = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCITYID($value){
		$sql = 'DELETE FROM cst_tech_req WHERE CITY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySTATEID($value){
		$sql = 'DELETE FROM cst_tech_req WHERE STATE_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCOUNTRYID($value){
		$sql = 'DELETE FROM cst_tech_req WHERE COUNTRY_ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByREQSTAT($value){
		$sql = 'DELETE FROM cst_tech_req WHERE REQ_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return CstTechReqMySql 
	 */
	protected function readRow($row){
		$cstTechReq = new CstTechReq();
		
		$cstTechReq->iD = $row['ID'];
		$cstTechReq->cREATED = $row['CREATED'];
		$cstTechReq->cREATEDBY = $row['CREATED_BY'];
		$cstTechReq->lASTUPD = $row['LAST_UPD'];
		$cstTechReq->lASTUPDBY = $row['LAST_UPD_BY'];
		$cstTechReq->cSTID = $row['CST_ID'];
		$cstTechReq->sERVID = $row['SERV_ID'];
		$cstTechReq->tECHID = $row['TECH_ID'];
		$cstTechReq->pRICEFROM = $row['PRICE_FROM'];
		$cstTechReq->pRICETO = $row['PRICE_TO'];
		$cstTechReq->cITYID = $row['CITY_ID'];
		$cstTechReq->sTATEID = $row['STATE_ID'];
		$cstTechReq->cOUNTRYID = $row['COUNTRY_ID'];
		$cstTechReq->rEQSTAT = $row['REQ_STAT'];

		return $cstTechReq;
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
	 * @return CstTechReqMySql 
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