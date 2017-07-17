<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CstHitLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CstHitLog 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param cstHitLog primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstHitLog cstHitLog
 	 */
	public function insert($cstHitLog);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstHitLog cstHitLog
 	 */
	public function update($cstHitLog);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByCSTHITID($value);

	public function queryByBTNID($value);

	public function queryBySRCHKEYWRDID($value);

	public function queryByVIEWID($value);

	public function queryByUPLDID($value);

	public function queryByLOGINVIEWID($value);

	public function queryByTECHID($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByCSTHITID($value);

	public function deleteByBTNID($value);

	public function deleteBySRCHKEYWRDID($value);

	public function deleteByVIEWID($value);

	public function deleteByUPLDID($value);

	public function deleteByLOGINVIEWID($value);

	public function deleteByTECHID($value);


}
?>