<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db{
	
	private function view_users(){
		

		try {
			$SQL = "SELECT * FROM tbl_provedores";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Error Administrator(view_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_users(){
		return $this->view_users();
	}

	private function register_users($data){
		

		try {
			
			$SQL = 'INSERT INTO tbl_provedores (nameComercial_user,rfc_user,nameSocial_user,tipoProducto_user,direccion_user,telefono_user,correo_user) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									
									$data['nameComercial'],
									$data['rfc'],
									$data['nameSocial'],
									$data['tipoProducto'],
									$data['direccion'],
									$data['telefono'],
									$data['correo']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(register_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_register_user($data){
		$this->register_users($data);
	}

	private function update_user($data){
		try {
			$SQL = 'UPDATE tbl_provedores SET  nameComercial_user = ?, rfc_user = ?, nameSocial_user	 = ?, tipoProducto_user	 = ?, direccion_user = ?, telefono_user = ?, correo_user = ? WHERE id_user = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
								
									$data['nameComercial'],
									$data['rfc'],
									$data['nameSocial'],
									$data['tipoProducto'],
									$data['direccion'],
									$data['telefono'],
									$data['correo'],
									$data['id']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(update_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_user($data){
		$this->update_user($data);
	}

	private function delete_user($id){
		try {
			$SQL = 'DELETE FROM tbl_provedores WHERE id_user = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));			
		} catch (Exception $e) {
			die('Error Administrator(delete_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_user($id){
		$this->delete_user($id);
	}	
}
?>