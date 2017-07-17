<?php
/**
 * Class that operate on table 'grp'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:17
 */
class GrpMySqlDAO implements GrpDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return GrpMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM grp WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM grp';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM grp ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param grp primary key
 	 */
	public function delete($ID){
		$sql = 'DELETE FROM grp WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($ID);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param GrpMySql grp
 	 */
	public function insert($grp){
		$sql = 'INSERT INTO grp (CREATED, CREATED_BY, LAST_UPD, LAST_UPD_BY, GRP_NAME, GRP_STAT, GRP_START_DT, GRP_END_DT, GRP_COMMENT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($grp->cREATED);
		$sqlQuery->set($grp->cREATEDBY);
		$sqlQuery->set($grp->lASTUPD);
		$sqlQuery->set($grp->lASTUPDBY);
		$sqlQuery->set($grp->gRPNAME);
		$sqlQuery->set($grp->gRPSTAT);
		$sqlQuery->set($grp->gRPSTARTDT);
		$sqlQuery->set($grp->gRPENDDT);
		$sqlQuery->set($grp->gRPCOMMENT);

		$id = $this->executeInsert($sqlQuery);	
		$grp->iD = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param GrpMySql grp
 	 */
	public function update($grp){
		$sql = 'UPDATE grp SET CREATED = ?, CREATED_BY = ?, LAST_UPD = ?, LAST_UPD_BY = ?, GRP_NAME = ?, GRP_STAT = ?, GRP_START_DT = ?, GRP_END_DT = ?, GRP_COMMENT = ? WHERE ID = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($grp->cREATED);
		$sqlQuery->set($grp->cREATEDBY);
		$sqlQuery->set($grp->lASTUPD);
		$sqlQuery->set($grp->lASTUPDBY);
		$sqlQuery->set($grp->gRPNAME);
		$sqlQuery->set($grp->gRPSTAT);
		$sqlQuery->set($grp->gRPSTARTDT);
		$sqlQuery->set($grp->gRPENDDT);
		$sqlQuery->set($grp->gRPCOMMENT);

		$sqlQuery->setNumber($grp->iD);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM grp';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByCREATED($value){
		$sql = 'SELECT * FROM grp WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCREATEDBY($value){
		$sql = 'SELECT * FROM grp WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPD($value){
		$sql = 'SELECT * FROM grp WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLASTUPDBY($value){
		$sql = 'SELECT * FROM grp WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGRPNAME($value){
		$sql = 'SELECT * FROM grp WHERE GRP_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGRPSTAT($value){
		$sql = 'SELECT * FROM grp WHERE GRP_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGRPSTARTDT($value){
		$sql = 'SELECT * FROM grp WHERE GRP_START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGRPENDDT($value){
		$sql = 'SELECT * FROM grp WHERE GRP_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGRPCOMMENT($value){
		$sql = 'SELECT * FROM grp WHERE GRP_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByCREATED($value){
		$sql = 'DELETE FROM grp WHERE CREATED = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCREATEDBY($value){
		$sql = 'DELETE FROM grp WHERE CREATED_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPD($value){
		$sql = 'DELETE FROM grp WHERE LAST_UPD = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLASTUPDBY($value){
		$sql = 'DELETE FROM grp WHERE LAST_UPD_BY = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGRPNAME($value){
		$sql = 'DELETE FROM grp WHERE GRP_NAME = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGRPSTAT($value){
		$sql = 'DELETE FROM grp WHERE GRP_STAT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGRPSTARTDT($value){
		$sql = 'DELETE FROM grp WHERE GRP_START_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGRPENDDT($value){
		$sql = 'DELETE FROM grp WHERE GRP_END_DT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGRPCOMMENT($value){
		$sql = 'DELETE FROM grp WHERE GRP_COMMENT = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return GrpMySql 
	 */
	protected function readRow($row){
		$grp = new Grp();
		
		$grp->iD = $row['ID'];
		$grp->cREATED = $row['CREATED'];
		$grp->cREATEDBY = $row['CREATED_BY'];
		$grp->lASTUPD = $row['LAST_UPD'];
		$grp->lASTUPDBY = $row['LAST_UPD_BY'];
		$grp->gRPNAME = $row['GRP_NAME'];
		$grp->gRPSTAT = $row['GRP_STAT'];
		$grp->gRPSTARTDT = $row['GRP_START_DT'];
		$grp->gRPENDDT = $row['GRP_END_DT'];
		$grp->gRPCOMMENT = $row['GRP_COMMENT'];

		return $grp;
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
	 * @return GrpMySql 
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