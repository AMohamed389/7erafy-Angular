<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface TechAddrDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TechAddr 
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
 	 * @param techAddr primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechAddr techAddr
 	 */
	public function insert($techAddr);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechAddr techAddr
 	 */
	public function update($techAddr);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByTECHID($value);

	public function queryByADDRCOMMENT($value);

	public function queryByAPARTMENT($value);

	public function queryByFLOOR($value);

	public function queryByBUILDING($value);

	public function queryBySTREET($value);

	public function queryByCITYID($value);

	public function queryByZONEID($value);

	public function queryByCOUNTRYID($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByTECHID($value);

	public function deleteByADDRCOMMENT($value);

	public function deleteByAPARTMENT($value);

	public function deleteByFLOOR($value);

	public function deleteByBUILDING($value);

	public function deleteBySTREET($value);

	public function deleteByCITYID($value);

	public function deleteByZONEID($value);

	public function deleteByCOUNTRYID($value);


}
?>