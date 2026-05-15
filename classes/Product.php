<?php
class Product {
    public function getAllProducts($pdo) {
        $sql = "SELECT * FROM products ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductWithImages($pdo) {
        $sql = "
            SELECT p.*, pi.image_path AS featured_image
            FROM products p
            LEFT JOIN product_images pi ON p.id = pi.product_id AND pi.is_featured = 1
            ORDER BY p.id DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($pdo, $id) {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$product) return false;

        // Get all images
        $sql2 = "SELECT image_path, is_featured FROM product_images 
                 WHERE product_id = ? ORDER BY is_featured DESC, id ASC";
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute([$id]);
        $images = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        $product['images'] = $images;

        // Featured image
        $product['featured_image'] = '/images/no-image.jpg';
        foreach ($images as $img) {
            if (!empty($img['is_featured'])) {
                $product['featured_image'] = $img['image_path'];
                break;
            }
        }
        if ($product['featured_image'] === '/images/no-image.jpg' && !empty($images)) {
            $product['featured_image'] = $images[0]['image_path'];
        }

        return $product;
    }
    

    // New: Search & Filter
    public function searchProducts($pdo, $keyword = '', $category = '') {
        $sql = "
            SELECT p.*, pi.image_path AS featured_image
            FROM products p
            LEFT JOIN product_images pi ON p.id = pi.product_id AND pi.is_featured = 1
            WHERE 1=1";
        
        $params = [];
        
        if (!empty($keyword)) {
            $sql .= " AND (p.product_name LIKE ? OR p.product_description LIKE ?)";
            $params[] = "%$keyword%";
            $params[] = "%$keyword%";
        }
        
        if (!empty($category)) {
            $sql .= " AND p.product_category = ?";
            $params[] = $category;
        }
        
        $sql .= " ORDER BY p.id DESC";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //edit product
    public function editproduct ($pdo, $id, $name, $description, $price, $category) {
        $sql = "UPDATE products SET product_name = ?, product_description = ?, product_price = ?, product_category = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$name, $description, $price, $category, $id]);
    }

}