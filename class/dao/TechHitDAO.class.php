<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface TechHitDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TechHit 
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
 	 * @param techHit primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechHit techHit
 	 */
	public function insert($techHit);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechHit techHit
 	 */
	public function update($techHit);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByTECHID($value);

	public function queryByBTNCNT($value);

	public function queryByLOGINCNT($value);

	public function queryByVIEWCNT($value);

	public function queryByUPLDCNT($value);

	public function queryBySRCHCNT($value);

	public function queryByTOTALCNT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByTECHID($value);

	public function deleteByBTNCNT($value);

	public function deleteByLOGINCNT($value);

	public function deleteByVIEWCNT($value);

	public function deleteByUPLDCNT($value);

	public function deleteBySRCHCNT($value);

	public function deleteByTOTALCNT($value);


}
?>