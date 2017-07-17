<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface TechProfileDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TechProfile 
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
 	 * @param techProfile primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechProfile techProfile
 	 */
	public function insert($techProfile);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechProfile techProfile
 	 */
	public function update($techProfile);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryByTECHSTAT($value);

	public function queryByTECHHITID($value);

	public function queryByTECHSGMNTID($value);

	public function queryByTECHGRPID($value);

	public function queryByTECHTYPEID($value);

	public function queryByTECHLOYID($value);

	public function queryBySERVID($value);

	public function queryByTECHPROFILECOMMENT($value);

	public function queryByTECHPRICEAVG($value);

	public function queryByEmail($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteByTECHSTAT($value);

	public function deleteByTECHHITID($value);

	public function deleteByTECHSGMNTID($value);

	public function deleteByTECHGRPID($value);

	public function deleteByTECHTYPEID($value);

	public function deleteByTECHLOYID($value);

	public function deleteBySERVID($value);

	public function deleteByTECHPROFILECOMMENT($value);

	public function deleteByTECHPRICEAVG($value);

	public function deleteByEmail($value);


}
?>