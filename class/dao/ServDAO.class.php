<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-02 11:18
 */
interface ServDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Serv 
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
 	 * @param serv primary key
 	 */
	public function delete($ID);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Serv serv
 	 */
	public function insert($serv);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Serv serv
 	 */
	public function update($serv);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByCREATED($value);

	public function queryByCREATEDBY($value);

	public function queryByLASTUPD($value);

	public function queryByLASTUPDBY($value);

	public function queryBySERVNAME($value);

	public function queryBySERVTYPE($value);

	public function queryByPRICEFROM($value);

	public function queryByPRICETO($value);

	public function queryBySERVRATE($value);

	public function queryBySERVTECHCNT($value);

	public function queryBySERVSTAT($value);


	public function deleteByCREATED($value);

	public function deleteByCREATEDBY($value);

	public function deleteByLASTUPD($value);

	public function deleteByLASTUPDBY($value);

	public function deleteBySERVNAME($value);

	public function deleteBySERVTYPE($value);

	public function deleteByPRICEFROM($value);

	public function deleteByPRICETO($value);

	public function deleteBySERVRATE($value);

	public function deleteBySERVTECHCNT($value);

	public function deleteBySERVSTAT($value);


}
?>