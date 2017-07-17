<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface CstHitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return CstHit 
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
 	 * @param cstHit primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param CstHit cstHit
 	 */
	public function insert($cstHit);
	
	/**
 	 * Update record in table
 	 *
 	 * @param CstHit cstHit
 	 */
	public function update($cstHit);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByCSTID($value);

	public function queryByBTNCNT($value);

	public function queryByLOGINCNT($value);

	public function queryByVIEWCNT($value);

	public function queryByUPLDCNT($value);

	public function queryBySRCHCNT($value);

	public function queryByTECHCNT($value);

	public function queryByTOTALCNT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByCSTID($value);

	public function deleteByBTNCNT($value);

	public function deleteByLOGINCNT($value);

	public function deleteByVIEWCNT($value);

	public function deleteByUPLDCNT($value);

	public function deleteBySRCHCNT($value);

	public function deleteByTECHCNT($value);

	public function deleteByTOTALCNT($value);


}
?>