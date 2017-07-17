<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CstTechReqLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CstTechReqLog 
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
 	 * @param cstTechReqLog primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstTechReqLog cstTechReqLog
 	 */
	public function insert($cstTechReqLog);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstTechReqLog cstTechReqLog
 	 */
	public function update($cstTechReqLog);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByCSTTECHREQID($value);

	public function queryByTECHID($value);

	public function queryByTECHREQAPPRV($value);

	public function queryByTECHREQAPPRVDT($value);

	public function queryByENDDT($value);

	public function queryByTECHREQAPPRVPRICE($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByCSTTECHREQID($value);

	public function deleteByTECHID($value);

	public function deleteByTECHREQAPPRV($value);

	public function deleteByTECHREQAPPRVDT($value);

	public function deleteByENDDT($value);

	public function deleteByTECHREQAPPRVPRICE($value);


}
?>