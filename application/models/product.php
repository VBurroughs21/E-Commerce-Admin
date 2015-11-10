<?php 
class Product extends CI_Model {

    function add($product_info) 
    {
    	$query = "INSERT INTO products(name, description, price, created_at, updated_at) 
    				VALUES(?,?,?, NOW(), NOW())";
    	$values = array($product_info['name'], $product_info['description'], $product_info['price']);
    	return $this->db->query($query, $values);
    }

    function get_all() 
    {
    	return $this->db->query("SELECT * FROM products")->result_array();
    }

    function get_product($id) 
    {
		return $this->db->query("SELECT * FROM products WHERE id = ?", array($id))->row_array();    	
    }

    function edit_product($update_info) 
    {
    	$update = "UPDATE products SET name = ?, description = ?, price = ?, updated_at = NOW()
    								WHERE id = ?";
    	$values = array($update_info['name'], $update_info['description'], 
    				$update_info['price'], $update_info['id']);
    	return $this->db->query($update, $values);
    }

    function delete_product($id) {
    	$this->db->query("DELETE FROM products WHERE id = ?", array($id));
    }
}







