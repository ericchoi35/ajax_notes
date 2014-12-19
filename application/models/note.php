<?php

class Note extends CI_Model{

	public function get_all_notes()
	{
		return $this->db->query("SELECT * FROM notes")->result_array();
	}

	public function add_note($title)
	{
		$query = "INSERT INTO notes (title, created_at, updated_at) VALUES (?, NOW(), NOW())";
		$values = array($title);
		return $this->db->query($query, $values);
	}

	public function update_note($details)
	{
		$query = "UPDATE notes SET description = ?, updated_at = NOW() WHERE id = ?";
		$values = array($details['description'], $details['id']);
		return $this->db->query($query, $values);
	}

	public function delete_note($id)
	{
		return $this->db->query("DELETE FROM notes WHERE id = ?", $id);
	}
}