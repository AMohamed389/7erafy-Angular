<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface LoyPrgDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return LoyPrg 
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
 	 * @param loyPrg primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LoyPrg loyPrg
 	 */
	public function insert($loyPrg);
	
	/**
 	 * Update record in table
 	 *
 	 * @param LoyPrg loyPrg
 	 */
	public function update($loyPrg);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByLOYPRGNAME($value);

	public function queryByLOYPRGSTAT($value);

	public function queryByLOYPRGSATRTDT($value);

	public function queryByLOYPRGENDDT($value);

	public function queryByLOYPRGCOMMENT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByLOYPRGNAME($value);

	public function deleteByLOYPRGSTAT($value);

	public function deleteByLOYPRGSATRTDT($value);

	public function deleteByLOYPRGENDDT($value);

	public function deleteByLOYPRGCOMMENT($value);


}
?>