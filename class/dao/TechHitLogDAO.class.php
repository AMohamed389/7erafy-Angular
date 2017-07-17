<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface TechHitLogDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TechHitLog 
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
 	 * @param techHitLog primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechHitLog techHitLog
 	 */
	public function insert($techHitLog);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechHitLog techHitLog
 	 */
	public function update($techHitLog);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByTECHHITID($value);

	public function queryByBTNID($value);

	public function queryBySRCHKEYWRDID($value);

	public function queryByVIEWID($value);

	public function queryByUPLDID($value);

	public function queryByLOGINVIEWID($value);

	public function queryByCSTID($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByTECHHITID($value);

	public function deleteByBTNID($value);

	public function deleteBySRCHKEYWRDID($value);

	public function deleteByVIEWID($value);

	public function deleteByUPLDID($value);

	public function deleteByLOGINVIEWID($value);

	public function deleteByCSTID($value);


}
?>