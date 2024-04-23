<?php

class Product {
    private $db;

    public function __construct() {
        // Initialize database connection
        $this->db = new PDO('mysql:host=localhost;dbname=product_management', 'root', '');
        // Set the PDO error mode to exception
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllProducts() {
        $stmt = $this->db->query('SELECT * FROM products');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id) {
        $stmt = $this->db->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addProduct($name, $description, $price) {
        $stmt = $this->db->prepare('INSERT INTO products (name, description, price) VALUES (:name, :description, :price)');
        $stmt->execute([
            'name' => $name,
            'description' => $description,
            'price' => $price
        ]);
        return $this->db->lastInsertId();
    }

    public function updateProduct($id, $name, $description, $price) {
        $stmt = $this->db->prepare('UPDATE products SET name = :name, description = :description, price = :price WHERE id = :id');
        return $stmt->execute([
            'id' => $id,
            'name' => $name,
            'description' => $description,
            'price' => $price
        ]);
    }

    public function deleteProduct($id) {
        $stmt = $this->db->prepare('DELETE FROM products WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
