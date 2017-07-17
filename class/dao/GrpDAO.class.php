<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface GrpDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Grp 
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
 	 * @param grp primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Grp grp
 	 */
	public function insert($grp);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Grp grp
 	 */
	public function update($grp);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByGRPNAME($value);

	public function queryByGRPSTAT($value);

	public function queryByGRPSTARTDT($value);

	public function queryByGRPENDDT($value);

	public function queryByGRPCOMMENT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByGRPNAME($value);

	public function deleteByGRPSTAT($value);

	public function deleteByGRPSTARTDT($value);

	public function deleteByGRPENDDT($value);

	public function deleteByGRPCOMMENT($value);


}
?>